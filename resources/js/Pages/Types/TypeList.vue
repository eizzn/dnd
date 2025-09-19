<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import NavLink from "@/components/NavLink.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";

const Uri = "types";
const filters = {
    name: null,
};
</script>

<template>
    <Head title="Types" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Types
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
                                    <label for="type-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="type-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="type-name-filter" class="block text-sm font-medium text-gray-700">Description</label>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="type in data" :key="type.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/type/${type.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ type.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ type.description }}
                                    </td>
                                </tr>
                            </template>

                            <template #pagination="{ pagination, currentPage, goToPage }">
                                <div class="text-right">
                                    <TailwindPagination
                                        v-if="pagination"
                                        :data="pagination"
                                        :current-page="currentPage"
                                        @pagination-change-page="goToPage"
                                        :limit="5"
                                        active-class="text-blue-500 font-bold"
                                        inactive-class="text-gray-500 opacity-20"
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
