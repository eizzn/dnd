<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import NavLink from "@/components/NavLink.vue";
import MultiSelect from "@/components/MultiSelect.vue";

const Uri = "weapons";
const filters = {
    name: null,
    type: [],
    group: [],
};
</script>

<template>
    <Head title="Weapons" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Weapons
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
                                    <label for="weapon-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="weapon-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="weapon-type-filter" class="block text-sm font-medium text-gray-700">Type</label>
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="[
                                            { value: 'simple melee', label: 'Simple Melee' },
                                            { value: 'simple ranged', label: 'Simple Ranged' },
                                            { value: 'martial melee', label: 'Martial Melee' },
                                            { value: 'martial ranged', label: 'Martial Ranged' },
                                            { value: 'melee', label: 'Melee' },
                                            { value: 'ranged', label: 'Ranged' },
                                            { value: 'exotic', label: 'Exotic' },
                                            { value: 'ammunition', label: 'Ammunition' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="weapon-group-filter" class="block text-sm font-medium text-gray-700">Group</label>
                                    <MultiSelect
                                        v-model="filters.group"
                                        :options="[
                                            { value: 'axe', label: 'Axe' },
                                            { value: 'bow', label: 'Bow' },
                                            { value: 'club', label: 'Club' },
                                            { value: 'crossbow', label: 'Crossbow' },
                                            { value: 'flail', label: 'Flail' },
                                            { value: 'hammer', label: 'Hammer' },
                                            { value: 'knife', label: 'Knife' },
                                            { value: 'polearm', label: 'Polearm' },
                                            { value: 'sling', label: 'Sling' },
                                            { value: 'spear', label: 'Spear' },
                                            { value: 'sword', label: 'Sword' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="weapon-damage-filter" class="block text-sm font-medium text-gray-700">Properties</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="weapon-description-filter" class="block text-sm font-medium text-gray-700">Description</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="weapon-types-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="weapon in data" :key="weapon.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/weapon/${weapon.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ weapon.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ weapon.type }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ weapon.group }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <table class="w-full">
                                            <tbody>
                                                <tr v-for="(prop, index) in weapon.properties" :key="index">
                                                    <th class="text-left text-xs px-4 py-1">{{ prop.name }}</th>
                                                    <td class="text-right text-xs px-4 py-1">{{ prop.value }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ weapon.description }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="(type, index) in weapon.types" :key="index" class="inline-block px-2 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
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
