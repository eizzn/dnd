<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import NavLink from "@/components/NavLink.vue";

const Uri = "monsters";
const filters = {
    name: null,
    type: null,
    cr: null,
};
</script>

<template>
    <Head title="Monsters" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Monsters
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
                                    <label for="monster-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="monster-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Hit Die</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="monster-cr-filter" class="block text-sm font-medium text-gray-700">CR</label>
                                    <select
                                        id="monster-cr-filter"
                                        v-model="filters.cr"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="0">0</option>
                                        <option value=".125">1/8</option>
                                        <option value=".25">1/4</option>
                                        <option value=".5">1/2</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Alignment</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Description</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="monster-type-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                    <select
                                        id="monster-type-filter"
                                        v-model="filters.type"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <optgroup label="Elemental">
                                            <option value="elemental">Elemental</option>
                                            <option value="acid">Acid</option>
                                            <option value="air">Air</option>
                                            <option value="cold">Cold</option>
                                            <option value="earth">Earth</option>
                                            <option value="electricity">Electricity</option>
                                            <option value="fire">Fire</option>
                                            <option value="water">Water</option>
                                        </optgroup>
                                        <optgroup label="Outsiders">
                                            <option value="outsider">Outsider</option>
                                            <option value="chaotic">Chaotic</option>
                                            <option value="evil">Evil</option>
                                            <option value="good">Good</option>
                                            <option value="lawful">Lawful</option>
                                            <option value="neutral">Neutral</option>
                                            <option value="celestial">Celestial</option>
                                            <option value="fiend">Fiend</option>
                                            <option value="archon">Archon</option>
                                            <option value="demon">Demon</option>
                                            <option value="devil">Devil</option>
                                            <option value="eladrin">Eladrin</option>
                                            <option value="guardinal">Guardinal</option>
                                            <option value="modron">Modron</option>
                                            <option value="slaad">Slaad</option>
                                            <option value="yugoloth">Yugoloth</option>
                                        </optgroup>
                                        <optgroup label="Miscellaneous">
                                            <option value="aberration">Aberration</option>
                                            <option value="animal">Animal</option>
                                            <option value="construct">Construct</option>
                                            <option value="dragon">Dragon</option>
                                            <option value="fey">Fey</option>
                                            <option value="giant">Giant</option>
                                            <option value="humanoid">Humanoid</option>
                                            <option value="beast">Beast</option>
                                            <option value="humanoid">Humanoid</option>
                                            <option value="monstrosity">Monstrosity</option>
                                            <option value="ooze">Ooze</option>
                                            <option value="plant">Plant</option>
                                            <option value="undead">Undead</option>
                                        </optgroup>
                                    </select>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="monster in data" :key="monster.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/monster/${monster.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ monster.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300 text-right">{{ monster.hit_dice }}</td>
                                    <td class="px-4 py-2 border border-gray-300 text-right">{{ parseFloat(monster.cr) }}</td>
                                    <td class="px-4 py-2 border border-gray-300 text-center">{{ monster.alignment }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ monster.description }}</td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <ul>
                                            <li v-for="(type, index) in monster.types" :key="index">{{ type.name }}</li>
                                        </ul>
                                    </td>
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
