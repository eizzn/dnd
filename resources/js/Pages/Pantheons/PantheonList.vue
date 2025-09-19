<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import {onMounted, ref} from "vue";
import NavLink from "@/components/NavLink.vue";

const Uri = "pantheons";
const pantheons = ref([]);
const filters = {
    name: null,
    title: null,
    pantheon_id: [],
    level: null,
    alignment: null,
    portfolio: null,
};

const getOptions = async () => {
    try {
        const response = await axios.get('/api/pantheons?per_page=200');
        pantheons.value = response.data.data;
    } catch (error) {
        console.error("Error fetching options:", error);
    }
};

onMounted(async () => {
    await getOptions();
});
</script>

<template>
    <Head title="Pantheons" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Pantheons
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <ListFetcher
                            :uri="Uri"
                            :initial-filters="filters"
                            :pagination-limit="15"
                        >
                            <template #filters="{ filters }">
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="pantheon-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="pantheon-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="pantheon-title-filter" class="block text-sm font-medium text-gray-700">Description</label>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="pantheon in data" :key="pantheons.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/pantheon/${pantheon.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ pantheon.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">{{ pantheon.description }}</td>
                                </tr>
                            </template>

                            <template #pagination="{ pagination, currentPage, goToPage }">
                                <div class="text-right">
                                    <TailwindPagination
                                        :data="pagination"
                                        :current-page="currentPage"
                                        @pagination-change-page="goToPage"
                                        :limit="5"
                                    />
                                </div>
                            </template>
                        </ListFetcher>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
