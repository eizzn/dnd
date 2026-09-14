<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import NavLink from "@/components/NavLink.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import MultiSelect from "@/components/MultiSelect.vue";

const Uri = "classes";
const filters = {
    name: null,
    type: [],
    key_attribute: [],
    hit_dice: [],
    has_spells: null,
    has_powers: null,
};
</script>

<template>
    <Head title="Classes"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Classes
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
                                    <label for="class-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="class-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label class="block text-sm font-medium text-gray-700">Type</label>
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="[
                                            { value: 'base', label: 'Base' },
                                            { value: 'priest', label: 'Priest' },
                                            { value: 'prestige', label: 'Prestige' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label class="block text-sm font-medium text-gray-700">Key Attribute</label>
                                    <MultiSelect
                                        v-model="filters.key_attribute"
                                        :options="[
                                            { value: 'str', label: 'STR' },
                                            { value: 'dex', label: 'DEX' },
                                            { value: 'con', label: 'CON' },
                                            { value: 'int', label: 'INT' },
                                            { value: 'wis', label: 'WIS' },
                                            { value: 'cha', label: 'CHA' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label class="block text-sm font-medium text-gray-700">Hit Dice</label>
                                    <MultiSelect
                                        v-model="filters.hit_dice"
                                        :options="[
                                            { value: '6', label: 'd6' },
                                            { value: '8', label: 'd8' },
                                            { value: '10', label: 'd10' },
                                            { value: '12', label: 'd12' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="class-hasspells-filter" class="block text-sm font-medium text-gray-700">Spells</label>
                                    <select
                                        id="class-hasspells-filter"
                                        v-model="filters.has_spells"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-1.5 px-3 text-sm text-gray-700 shadow-sm transition hover:border-indigo-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/30"
                                    >
                                        <option :value="null">Any</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="class-haspowers-filter" class="block text-sm font-medium text-gray-700">Powers</label>
                                    <select
                                        id="class-haspowers-filter"
                                        v-model="filters.has_powers"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-1.5 px-3 text-sm text-gray-700 shadow-sm transition hover:border-indigo-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/30"
                                    >
                                        <option :value="null">Any</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="classItem in data" :key="classItem.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/class/${classItem.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >{{ classItem.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">{{ classItem.type }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ classItem.key_attribute }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ classItem.hit_dice }}</td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <div class="flex justify-center items-center">
                                            <svg v-if="classItem.has_spells" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M5 13l4 4L19 7"/>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <div class="flex justify-center items-center">
                                            <svg v-if="classItem.has_powers" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M5 13l4 4L19 7"/>
                                            </svg>
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
