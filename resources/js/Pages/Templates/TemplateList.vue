<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import { ref } from "vue";
import {TailwindPagination} from "laravel-vue-pagination";
import NavLink from "@/components/NavLink.vue";
import MultiSelect from "@/components/MultiSelect.vue";

const Uri = 'templates';
const filters = {
    name: null,
    type: [],
};
</script>

<template>
    <Head title="Templates" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Templates
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
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="template-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="template-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Template Name"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="template-types-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="[
                                            { value: 'air', label: 'Air' },
                                            { value: 'animal', label: 'Animal' },
                                            { value: 'celestial', label: 'Celestial' },
                                            { value: 'earth', label: 'Earth' },
                                            { value: 'elemental', label: 'Elemental' },
                                            { value: 'fiend', label: 'Fiend' },
                                            { value: 'spirit', label: 'Spirit' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300">Description</th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="template in data" :key="template.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/template/${template.id}`"
                                        >{{ template.name }}</NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="(type, index) in template.types" :key="index" class="inline-block px-2 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ template.description }}
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
