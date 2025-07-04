<script setup>
import { useRouter, useRoute } from "vue-router";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import { ref, onMounted, watch } from "vue";
import { TailwindPagination } from 'laravel-vue-pagination';
import debounce from "lodash/debounce";

const router = useRouter();
const route = useRoute();

const powers = ref([]);
const pagination = ref({});
const currentPage = ref(1);
const filters = ref({
    name: null,
});

const getPowers = async (page) => {
    try {
        currentPage.value = page;
        let url = `/api/powers?page=${page}`;
        const queryParams = {};
        if (page > 1) {
            queryParams.page = page;
        }
        Object.keys(filters.value).forEach((key) => {
            if (filters.value[key]) {
                url += `&${key}=${filters.value[key]}`;
                queryParams[key] = filters.value[key];
            }
        });
        const response = await axios.get(url);
        powers.value = response.data.data;
        pagination.value = response.data;

        await router.push({ path: route.path, query: queryParams });
    } catch (error) {
        console.error("Error fetching classes:", error);
    }
};

const goToPage = (page) => {
    getPowers(page);
}

// Fetch spells when the component is mounted
onMounted(async () => {
    await router.isReady();
    const page = route.query.page ? parseInt(route.query.page) : 1;
    currentPage.value = isNaN(page) ? 1 : page;
    await getPowers(currentPage.value);
});
const debounceGetPowers = debounce(getPowers, 500);
</script>

<template>
    <Head title="Classes" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Powers
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="w-full">
                            <thead>
                            <tr>
                                <td>Name</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="power in powers" :key="power.id">
                                <td>
                                    <router-link :to="`/spell/${power.id}`">
                                        {{ power.name }}
                                    </router-link>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="1">
                                    <div class="text-right">
                                        <TailwindPagination
                                            :data="pagination"
                                            @pagination-change-page="goToPage"
                                            :align="'right'"
                                            :currenctt-page="currentPage"
                                            :limit="10"
                                        />
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
