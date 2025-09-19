<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import NavLink from "@/components/NavLink.vue";

const Uri = "materials";
const filters = {
    name: null,
    type: null,
};
</script>

<template>
    <Head title="Materials" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Materials
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
                                    <label for="material-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="material-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="material-type-filter" class="block text-sm font-medium text-gray-700">Type</label>
                                    <select
                                        id="material-type-filter"
                                        v-model="filters.type"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="animal product">Animal Product</option>
                                        <option value="clay">Clay</option>
                                        <option value="crystal">Crystal</option>
                                        <option value="earth">Earth</option>
                                        <option value="gem">Gem</option>
                                        <option value="herb">Herb</option>
                                        <option value="liquid">Liquid</option>
                                        <option value="liquid metal">Liquid Metal</option>
                                        <option value="metal">Metal</option>
                                        <option value="mineral">Mineral</option>
                                        <option value="non-mineral">Non-Mineral</option>
                                        <option value="plant or herb">Plant or Herb</option>
                                        <option value="stone">Stone</option>
                                        <option value="various">Various</option>
                                        <option value="wood">Wood</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="material-rarity-filter" class="block text-sm font-medium text-gray-700">Rarity</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="material-source-filter" class="block text-sm font-medium text-gray-700">Source</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="material-description-filter" class="block text-sm font-medium text-gray-700">Description</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="material-price-filter" class="block text-sm font-medium text-gray-700">Price</label>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="material in data" :key="material.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/material/${material.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ material.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300 text-right">{{ material.type }}</td>
                                    <td class="px-4 py-2 border border-gray-300 text-right">{{ material.rarity }}</td>
                                    <td class="px-4 py-2 border border-gray-300 text-center">
                                        <div v-html="material.source" class="text-left"></div>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">{{ material.description }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ material.price }}</td>
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
