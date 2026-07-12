<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import { ref } from "vue";
import {TailwindPagination} from "laravel-vue-pagination";
import NavLink from "@/components/NavLink.vue";
import MultiSelect from "@/Components/MultiSelect.vue";

const Uri = 'powers';
const filters = {
    name: null,
    type: [],
    action_type: [],
    duration: null,
    default_level: [],
};
</script>

<template>
    <Head title="Powers" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Powers
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
                                    <label for="power-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="power-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Power Name"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="power-types-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="[
                                            { value: 'clairsentience', label: 'Clairsentience' },
                                            { value: 'metacreativity', label: 'Metacreativity' },
                                            { value: 'psychokinesis', label: 'Psychokinesis' },
                                            { value: 'psychometabolism', label: 'Psychometabolism' },
                                            { value: 'telepathy', label: 'Telepathy' },
                                            { value: 'astral', label: 'Astral' },
                                            { value: 'cold', label: 'Cold' },
                                            { value: 'creation', label: 'Creation' },
                                            { value: 'construct', label: 'Construct' },
                                            { value: 'ectoplasm', label: 'Ectoplasm' },
                                            { value: 'electricity', label: 'Electricity' },
                                            { value: 'fire', label: 'Fire' },
                                            { value: 'force', label: 'Force' },
                                            { value: 'light', label: 'Light' },
                                            { value: 'psionic combat', label: 'Psionic Combat' },
                                            { value: 'sonic', label: 'Sonic' },
                                            { value: 'time', label: 'Time' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="power-action-type" class="block text-sm font-medium text-gray-700">Actions</label>
                                    <MultiSelect
                                        v-model="filters.action_type"
                                        :options="[
                                            { value: 'action', label: 'Action' },
                                            { value: 'double action', label: 'Double Action' },
                                            { value: 'triple action', label: 'Triple Action' },
                                            { value: 'minute', label: 'Minutes' },
                                            { value: 'hour', label: 'Hours' },
                                            { value: 'day', label: 'Days' },
                                            { value: 'week', label: 'Weeks' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <span class="block text-sm font-medium text-gray-700">Range/Area</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <span class="block text-sm font-medium text-gray-700">Targets</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <span class="block text-sm font-medium text-gray-700">Duration</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="power-level-filter" class="block text-sm font-medium text-gray-700">Level</label>
                                    <MultiSelect
                                        v-model="filters.default_level"
                                        :options="[
                                            { value: 1, label: '1' },
                                            { value: 2, label: '2' },
                                            { value: 3, label: '3' },
                                            { value: 4, label: '4' },
                                            { value: 5, label: '5' },
                                            { value: 6, label: '6' },
                                            { value: 7, label: '7' },
                                            { value: 8, label: '8' },
                                            { value: 9, label: '9' },
                                        ]"
                                    />
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="power in data" :key="power.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/power/${power.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ power.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="(type, index) in power.types" :key="index" class="inline-block px-2 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ power.action_type }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ power.range }}
                                        <span v-if="power.range && power.area"><br /></span>
                                        {{ power.area }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ power.targets }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ power.duration }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ power.default_level }}
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
