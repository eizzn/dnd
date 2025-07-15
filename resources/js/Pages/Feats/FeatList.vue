<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import NavLink from "@/components/NavLink.vue";

const Uri = "feats";
const filters = {
    name: null,
    type: null,
};
</script>

<template>
    <Head title="Feats" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Feats
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
                                    <label for="feat-req-filter" class="block text-sm font-medium text-gray-700">Requirements</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-trigger-filter" class="block text-sm font-medium text-gray-700">Trigger</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-types-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                    <select
                                        id="feat-types-filter"
                                        v-model="filters.type"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="generic">Generic</option>
                                        <optgroup label="Schools of Magic">
                                            <option value="abjuration">Abjuration</option>
                                            <option value="conjuration">Conjuration</option>
                                            <option value="divination">Divination</option>
                                            <option value="enchantment">Enchantment</option>
                                            <option value="evocation">Evocation</option>
                                            <option value="illusion">Illusion</option>
                                            <option value="necromancy">Necromancy</option>
                                            <option value="transmutation">Transmutation</option>
                                        </optgroup>
                                        <optgroup label="Damage Type">
                                            <option value="acid">Acid</option>
                                            <option value="cold">Cold</option>
                                            <option value="electricity">Electricity</option>
                                            <option value="fire">Fire</option>
                                            <option value="force">Force</option>
                                            <option value="negative">Negative</option>
                                            <option value="positive">Positive</option>
                                            <option value="sonic">Sonic</option>
                                        </optgroup>
                                        <optgroup label="Psionic">
                                            <option value="psionic">Psionic</option>
                                            <option value="psionic combat">Psionic Combat</option>
                                            <option value="psionic focus">Psionic Focus</option>
                                        </optgroup>
                                        <optgroup label="Class Specific">
                                            <option value="animal companion">Animal Companion</option>
                                            <option value="arcane">Arcane</option>
                                            <option value="artificer discipline">Artificer Discipline</option>
                                            <option value="bardic inspiration">Bardic Inspiration</option>
                                            <option value="channel divinity">Channel Divinity</option>
                                            <option value="combat mastery">Combat Mastery</option>
                                            <option value="divine">Divine</option>
                                            <option value="primal">Primal</option>
                                            <option value="rage">Rage</option>
                                            <option value="totem">Totem</option>
                                            <option value="wizard school">Wizard School</option>
                                        </optgroup>
                                        <optgroup label="Racial">
                                            <option value="dwarf">Dwarf</option>
                                            <option value="elf">Elf</option>
                                            <option value="gnome">Gnome</option>
                                            <option value="halfling">Halfling</option>
                                            <option value="human">Human</option>
                                        </optgroup>
                                        <optgroup label="Miscellaneous">
                                            <option value="extra action">Extra Action</option>
                                            <option value="item creation">Item Creation</option>
                                            <option value="metamagic">Metamagic</option>
                                            <option value="talent">Talent</option>
                                        </optgroup>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="feat-description-filter" class="block text-sm font-medium text-gray-700">Description</label>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="feat in data" :key="feat.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/feat/${feat.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ feat.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ feat.requirements }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ feat.trigger }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <ul>
                                            <li v-for="type in feat.types" :key="index">{{ type.name }}</li>
                                        </ul>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ feat.short_description }}
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
