<script setup>
import { useRouter, useRoute } from "vue-router";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import { ref, onMounted } from "vue";
import { TailwindPagination } from "laravel-vue-pagination";
import debounce from "lodash/debounce";

const router = useRouter();
const route = useRoute();

const feats = ref([]);
const pagination = ref({});
const currentPage = ref(1);
const filters = ref({
    name: null,
});

const getFeats = async (page) => {
    try {
        currentPage.value = page;
        let url = `/api/feats?page=${page}`;
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
        feats.value = response.data.data;
        pagination.value = response.data;

        await router.push({ path: route.path, query: queryParams });
    } catch (error) {
        console.error("Error fetching feats:", error);
    }
};

const goToPage = (page) => {
    getFeats(page);
};

onMounted(async () => {
    await router.isReady();
    const page = route.query.page ? parseInt(route.query.page) : 1;
    currentPage.value = isNaN(page) ? 1 : page;
    await getFeats(currentPage.value);
});

const debounceGetFeats = debounce(getFeats, 500);
</script>

<template>
    <Head title="Feats" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Feats
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
                            <tr v-for="feat in feats" :key="feat.id">
                                <td>
                                    <router-link :to="`/class/${feat.id}`">
                                        {{ feat.name }}
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
                                            :limit="5"
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
