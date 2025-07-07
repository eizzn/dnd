<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import NavLink from "@/components/NavLink.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";

const Uri = "classes";
const filters = {
    name: null,
    type: null,
    key_attribute: null,
    hit_dice: null,
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
                                    <label for="class-type-filter" class="block text-sm font-medium text-gray-700">Type</label>
                                    <select
                                        id="class-type-filter"
                                        v-model="filters.type"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="base">Base</option>
                                        <option value="priest">Priest</option>
                                        <option value="prestige">Prestige</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="class-attr-filter" class="block text-sm font-medium text-gray-700">Key Attribute</label>
                                    <select
                                        id="class-attr-filter"
                                        v-model="filters.key_attribute"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="str">STR</option>
                                        <option value="dex">DEX</option>
                                        <option value="con">CON</option>
                                        <option value="int">INT</option>
                                        <option value="wis">WIS</option>
                                        <option value="cha">CHA</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="class-hitdice-filter" class="block text-sm font-medium text-gray-700">Hit Dice</label>
                                    <select
                                        id="class-hitdice-filter"
                                        v-model="filters.hit_dice"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="6">d6</option>
                                        <option value="8">d8</option>
                                        <option value="10">d10</option>
                                        <option value="12">d12</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="class-hasspells-filter" class="block text-sm font-medium text-gray-700">Spells</label>
                                    <select
                                        id="class-hasspells-filter"
                                        v-model="filters.has_spells"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="class-haspowers-filter" class="block text-sm font-medium text-gray-700">Powers</label>
                                    <select
                                        id="class-haspowers-filter"
                                        v-model="filters.has_powers"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
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
