<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import { ref } from "vue";
import {TailwindPagination} from "laravel-vue-pagination";
import NavLink from "@/components/NavLink.vue";

const Uri = 'powers';
const filters = {
    name: null,
    type: null,
    action_type: null,
    duration: null,
    default_level: null,
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
                                    <select
                                        id="spell-types-filter"
                                        v-model="filters.type"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <optgroup label="Schools of Magic">
                                            <option value="clairsentience">Clairsentience</option>
                                            <option value="metacreativity">Metacreativity</option>
                                            <option value="psychokinesis">Psychokinesis</option>
                                            <option value="psychometabolism">Psychometabolism</option>
                                            <option value="telepathy">Telepathy</option>
                                        </optgroup>
                                        <optgroup label="Damage Type">
                                            <option value="astral">Astral</option>
                                            <option value="cold">Cold</option>
                                            <option value="creation">Creation</option>
                                            <option value="construct">Construct</option>
                                            <option value="ectoplasm">Ectoplasm</option>
                                            <option value="electricity">Electricity</option>
                                            <option value="fire">Fire</option>
                                            <option value="force">Force</option>
                                            <option value="light">Light</option>
                                            <option value="psionic combat">Psionic Combat</option>
                                            <option value="sonic">Sonic</option>
                                            <option value="time">Time</option>
                                        </optgroup>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="power-action-type" class="block text-sm font-medium text-gray-700">Actions</label>
                                    <select
                                        id="power-action-type"
                                        v-model="filters.action_type"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="action">Action</option>
                                        <option value="double action">Double Action</option>
                                        <option value="triple action">Triple Action</option>
                                        <option value="minute">Minutes</option>
                                        <option value="hour">Hours</option>
                                        <option value="day">Days</option>
                                        <option value="week">Weeks</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <span class="block text-sm font-medium text-gray-700">Range/Area</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    Targets
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    Duration
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="power-level-filter" class="block text-sm font-medium text-gray-700">Level</label>
                                    <select
                                        id="power-level-filter"
                                        v-model="filters.default_level"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option v-for="level in 9" :key="level" :value="level">
                                            {{ level }}
                                        </option>
                                    </select>
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
                                        <span v-for="(type, index) in power.types" :key="index" class="inline-block mr-2">
                                            {{ type.name }}
                                            <span v-if="index < power.types.length - 1">, </span>
                                        </span>
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
