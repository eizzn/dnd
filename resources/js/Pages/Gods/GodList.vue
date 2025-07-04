<script setup>
import { useRouter, useRoute } from "vue-router";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import { ref, onMounted } from "vue";
import { TailwindPagination } from "laravel-vue-pagination";
import debounce from "lodash/debounce";
import { Multiselect } from 'vue-multiselect';

const router = useRouter();
const route = useRoute();

const gods = ref([]);
const pantheons = ref([]);
const pagination = ref({});
const currentPage = ref(1);
const filters = ref({
    name: null,
    title: null,
    pantheon_id: [],
    level: null,
    alignment: null,
    portfolio: null,
});

const getGods = async (page) => {
    try {
        currentPage.value = page;
        let url = `/api/gods?page=${page}`;
        const queryParams = {};
        if (page > 1) {
            queryParams.page = page;
        }
        Object.keys(filters.value).forEach((key) => {
            if (key === 'pantheon_id') {
                if (Array.isArray(filters.value[key]) && filters.value[key].length > 0) {
                    url += `&${key}=${filters.value[key].map(pantheon => pantheon.id).join(',')}`;
                    queryParams[key] = filters.value[key].map(pantheon => pantheon.id).join(',');
                }
            } else if (filters.value[key]) {
                url += `&${key}=${filters.value[key]}`;
                queryParams[key] = filters.value[key];
            }
        });
        const response = await axios.get(url);
        gods.value = response.data.data;
        pagination.value = response.data;

        await router.push({ path: route.path, query: queryParams });
    } catch (error) {
        console.error("Error fetching feats:", error);
    }
};

const getOptions = async () => {
    try {
        const response = await axios.get('/api/pantheons?per_page=200');
        pantheons.value = response.data.data;
    } catch (error) {
        console.error("Error fetching options:", error);
    }
};

const goToPage = (page) => {
    getGods(page);
};

onMounted(async () => {
    await router.isReady();
    const page = route.query.page ? parseInt(route.query.page) : 1;
    currentPage.value = isNaN(page) ? 1 : page;
    await getOptions();
    await getGods(currentPage.value);
});

const debouncedGetGods = debounce(getGods, 500);

const handleSelect = (selectedOption) => {
    // Defensive check to ensure pantheon_id is an array
    if (!Array.isArray(filters.pantheon_id)) {
        filters.pantheon_id = [];
    }

    const index = filters.pantheon_id.findIndex(pantheon => pantheon.id === selectedOption.id);
    if (index !== -1) {
        filters.pantheon_id.splice(index, 1); // Remove the option if already selected
    } else {
        filters.pantheon_id.push(selectedOption); // Add the option if not selected
    }
    getGods(1); // Refresh the data
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<template>
    <Head title="Gods" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Gods
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="w-full border-collapse border border-gray-300">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 border border-gray-300 text-left">
                                        <label for="god-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input
                                            id="god-name-filter"
                                            type="text"
                                            v-model="filters.name"
                                            @input="debouncedGetGods(1)"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Enter title to filter"
                                        />
                                    </th>
                                    <th class="px-4 py-2 border border-gray-300 text-left">
                                        <label for="god-title-filter" class="block text-sm font-medium text-gray-700">Title</label>
                                        <input
                                            id="god-title-filter"
                                            type="text"
                                            v-model="filters.title"
                                            @input="debouncedGetGods(1)"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Enter title to filter"
                                        />
                                    </th>
                                    <th class="px-4 py-2 border border-gray-300 text-left">
                                        <label for="god-pantheon-filter" class="block text-sm font-medium text-gray-700">Pantheon</label>
                                        <multiselect
                                            id="god-pantheon-filter"
                                            v-model="filters.pantheon_id"
                                            :options="pantheons"
                                            :show-labels="false"
                                            :placeholder="'Select Pantheon'"
                                            @select="handleSelect"
                                            :track-by="'id'"
                                            :label="'name'"
                                            :close-on-select="false"
                                            multiple
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </multiselect>
                                    </th>
                                    <th class="px-4 py-2 border border-gray-300 text-left">Level</th>
                                    <th class="px-4 py-2 border border-gray-300 text-left">Alignment</th>
                                    <th class="px-4 py-2 border border-gray-300 text-left">
                                        <label for="god-portfolio-filter" class="block text-sm font-medium text-gray-700">Portfolio</label>
                                        <input
                                            id="god-portfolio-filter"
                                            type="text"
                                            v-model="filters.portfolio"
                                            @input="debouncedGetGods(1)"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Enter title to filter"
                                        />
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="god in gods" :key="god.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <router-link :to="`/class/${god.id}`" class="text-blue-500 hover:underline">
                                            {{ god.name }}
                                        </router-link>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.title }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.pantheon.name }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.level }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.alignment }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.portfolio }}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="px-4 py-2 border border-gray-300">
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
