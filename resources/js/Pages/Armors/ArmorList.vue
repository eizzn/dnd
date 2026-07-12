<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import NavLink from "@/components/NavLink.vue";
import MultiSelect from "@/Components/MultiSelect.vue";

const Uri = "armors";
const filters = {
    name: null,
    type: [],
    group: [],
};
</script>

<template>
    <Head title="Armors" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Armors
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
                                    <label for="armor-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="armor-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="armor-type-filter" class="block text-sm font-medium text-gray-700">Type</label>
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="[
                                            { value: 'light', label: 'Light' },
                                            { value: 'medium', label: 'Medium' },
                                            { value: 'heavy', label: 'Heavy' },
                                            { value: 'shield', label: 'Shield' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="armor-group-filter" class="block text-sm font-medium text-gray-700">Group</label>
                                    <MultiSelect
                                        v-model="filters.group"
                                        :options="[
                                            { value: 'cloth', label: 'Cloth' },
                                            { value: 'wood', label: 'Wood' },
                                            { value: 'leather', label: 'Leather' },
                                            { value: 'chain', label: 'Chain' },
                                            { value: 'plate', label: 'Plate' },
                                            { value: 'composite', label: 'Composite' },
                                            { value: 'other', label: 'Other' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="armor-effect-filter" class="block text-sm font-medium text-gray-700">Properties</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="armor-description-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="armor in data" :key="armor.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/armor/${armor.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ armor.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ armor.type }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ armor.group }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <table class="w-full">
                                            <tbody>
                                                <tr v-for="(prop, index) in armor.properties" :key="index">
                                                    <th class="text-left text-xs px-4 py-1">{{ prop.name }}</th>
                                                    <td class="text-right text-xs px-4 py-1">{{ prop.value }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="(type, index) in armor.types" :key="index" class="inline-block px-2 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
                                        </div>
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
