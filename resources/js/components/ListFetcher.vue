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

        const buildQueryString = (obj) => {
            const parts = [];
            for (const [key, val] of Object.entries(obj)) {
                if (val === null || val === '') continue;
                if (Array.isArray(val)) {
                    if (val.length === 0) continue;
                    val.forEach(v => parts.push(`${encodeURIComponent(key + '[]')}=${encodeURIComponent(v)}`));
                } else {
                    parts.push(`${encodeURIComponent(key)}=${encodeURIComponent(val)}`);
                }
            }
            return parts.join('&');
        };

        const fetchData = async (page = 1) => {
            const params = buildQueryString({
                ...filters.value,
                page,
                per_page: props.paginationLimit,
            });

            try {
                const response = await fetch(`/api/${props.uri}?${params}`);
                const result = await response.json();
                data.value = result.data;
                pagination.value = result;
                currentPage.value = page;

                const routeQuery = {};
                for (const [key, val] of Object.entries({ ...filters.value, page, per_page: props.paginationLimit })) {
                    if (val === null || val === '') continue;
                    if (Array.isArray(val) && val.length === 0) continue;
                    routeQuery[key] = val;
                }
                await router.push({ path: `/${props.uri}`, query: routeQuery });
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        const debounceFetchData = debounce(fetchData, 500);

        onMounted(() => {
            const queryParams = new URLSearchParams(window.location.search);
            queryParams.forEach((value, key) => {
                const cleanKey = key.endsWith('[]') ? key.slice(0, -2) : key;
                if (Array.isArray(filters.value[cleanKey])) {
                    if (!filters.value[cleanKey].includes(value)) {
                        filters.value[cleanKey].push(value);
                    }
                } else if (!filters.value[cleanKey]) {
                    filters.value[cleanKey] = value;
                }
            });
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
                <tr v-if="data.length === 0">
                    <td colspan="100" class="px-4 py-6 text-center text-gray-500 italic">No records found.</td>
                </tr>
            </tbody>
        </table>
        <div class="mt-4">
            <slot name="pagination" :pagination="pagination" :currentPage="currentPage" :goToPage="fetchData"></slot>
        </div>
    </div>
</template>
