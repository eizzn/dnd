<script>
import { ref, onMounted, watch } from 'vue';
import { useRouter } from 'vue-router';
import debounce from 'lodash/debounce';

export default {
    name: 'ListFetcher',
    props: {
        uri: {
            type: String,
            required: true,
        },
        initialFilters: {
            type: Object,
            default: () => ({}),
        },
        paginationLimit: {
            type: Number,
            default: 10,
        },
    },
    setup(props, { emit, slots }) {
        const router = useRouter();

        const data = ref([]);
        const filters = ref({ ...props.initialFilters });
        const currentPage = ref(1);
        const pagination = ref({});

        const fetchData = async (page = 1) => {
            const params = new URLSearchParams(
                Object.fromEntries(
                    Object.entries({
                        ...filters.value,
                        page,
                        per_page: props.paginationLimit,
                    }).filter(([_, value]) => value !== null && value !== '' && (!Array.isArray(value) || value.length > 0))
                )
            ).toString();

            try {
                const response = await fetch(`/api/${props.uri}?${params}`);
                const result = await response.json();
                data.value = result.data;
                pagination.value = result;
                currentPage.value = page;

                await router.push({
                    path: `/${props.uri}`,
                    query: Object.fromEntries(
                        Object.entries({
                            ...filters.value,
                            page,
                            per_page: props.paginationLimit,
                        }).filter(([_, value]) => value !== null)
                    )
                });
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        const debounceFetchData = debounce(fetchData, 500);

        onMounted(() => {
            fetchData();
        });

        watch(filters, () => {
            debounceFetchData(1);
        }, {deep: true});

        return {
            data,
            filters,
            currentPage,
            pagination,
            fetchData,
            router,
        };
    },
};
</script>

<template>
    <div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <slot name="filters" :filters="filters"></slot>
            </tr>
            </thead>
            <tbody>
                <slot name="table" :data="data"></slot>
            </tbody>
        </table>
        <div class="mt-4">
            <slot name="pagination" :pagination="pagination" :currentPage="currentPage" :goToPage="fetchData"></slot>
        </div>
    </div>
</template>
