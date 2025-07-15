<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import NavLink from "@/components/NavLink.vue";

const Uri = "formulas";
const filters = {
    name: null,
};
</script>

<template>
    <Head title="Formulas" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Formulas
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
                                    <label for="feat-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="feat-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-req-filter" class="block text-sm font-medium text-gray-700">Type</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-trigger-filter" class="block text-sm font-medium text-gray-700">Level</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-types-filter" class="block text-sm font-medium text-gray-700">Crafting</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-description-filter" class="block text-sm font-medium text-gray-700">Method</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-description-filter" class="block text-sm font-medium text-gray-700">Description</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-description-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="formula in data" :key="formula.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/formula/${formula.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ formula.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ formula.type }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ formula.level }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <span>{{ formula.crafting_time }}</span>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ formula.method }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ formula.description }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <ul>
                                            <li v-for="(type, index) in formula.types" :key="index">{{ type.name }}</li>
                                        </ul>
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
