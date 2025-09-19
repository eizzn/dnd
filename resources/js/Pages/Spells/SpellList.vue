<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import NavLink from "@/components/NavLink.vue";
import { TailwindPagination } from "laravel-vue-pagination";

const Uri = "spells";
const filters = {
    name: null,
    type: null,
    casting: null,
    duration: null,
    default_level: null,
};
</script>

<template>
    <Head title="Spells" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Spells
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
                                    <label for="spell-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="spell-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Spell Name"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="spell-types-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                    <select
                                        id="spell-types-filter"
                                        v-model="filters.type"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
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
                                            <option value="air">Air</option>
                                            <option value="cold">Cold</option>
                                            <option value="darkness">Darkness</option>
                                            <option value="earth">Earth</option>
                                            <option value="electricity">Electricity</option>
                                            <option value="fire">Fire</option>
                                            <option value="force">Force</option>
                                            <option value="light">Light</option>
                                            <option value="negative">Negative</option>
                                            <option value="poison">Poison</option>
                                            <option value="positive">Positive</option>
                                            <option value="shadow">Shadow</option>
                                            <option value="sonic">Sonic</option>
                                            <option value="water">Water</option>
                                        </optgroup>
                                        <optgroup label="Alignment">
                                            <option value="chaotic">Chaotic</option>
                                            <option value="evil">Evil</option>
                                            <option value="neutral">Neutral</option>
                                            <option value="good">Good</option>
                                            <option value="lawful">Lawful</option>
                                            <option value="demon">Demon</option>
                                        </optgroup>
                                        <optgroup label="Miscellaneous">
                                            <option value="aura">Aura</option>
                                            <option value="calling">Calling</option>
                                            <option value="curse">Curse</option>
                                            <option value="healing">Healing</option>
                                            <option value="mind-affecting">Mind-Affecting</option>
                                            <option value="polymorph">Polymorph</option>
                                            <option value="ray">Ray</option>
                                            <option value="ritual">Ritual</option>
                                            <option value="smite">Smite</option>
                                            <option value="summoning">Summoning</option>
                                        </optgroup>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="spell-casting-filter" class="block text-sm font-medium text-gray-700">Casting</label>
                                    <select
                                        id="spell-casting-filter"
                                        v-model="filters.casting"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="material">Material</option>
                                        <option value="somatic">Somatic</option>
                                        <option value="verbal">Verbal</option>
                                        <option value="reaction">Reaction</option>
                                        <option value="free">Free</option>
                                        <option value="caster">Secondary Casters</option>
                                        <option value="ability">Ability Damage</option>
                                        <option value="skill">Skill Check</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <span class="block text-sm font-medium text-gray-700">Range/Area</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <span class="block text-sm font-medium text-gray-700">Targets</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="spell-duration-filter" class="block text-sm font-medium text-gray-700">Duration</label>
                                    <select
                                        id="spell-duration-filter"
                                        v-model="filters.duration"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option value="instantaneous">Instantaneous</option>
                                        <option value="round">Rounds</option>
                                        <option value="minute">Minutes</option>
                                        <option value="hour">Hours</option>
                                        <option value="day">Days</option>
                                        <option value="week">Weeks</option>
                                        <option value="month">Months</option>
                                        <option value="concentration">Concentration</option>
                                        <option value="permanent">Permanent</option>
                                    </select>
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="spell-level-filter" class="block text-sm font-medium text-gray-700">Level</label>
                                    <select
                                        id="spell-level-filter"
                                        v-model="filters.default_level"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    >
                                        <option value=""> - </option>
                                        <option v-for="level in 11" :key="level" :value="level - 1">
                                            {{ level - 1 }}
                                        </option>
                                    </select>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="spell in data" :key="spell.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/spell/${spell.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ spell.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <span v-for="(type, index) in spell.types" :key="index" class="inline-block mr-2">
                                            {{ type.name }}
                                            <span v-if="index < spell.types.length - 1">, </span>
                                        </span>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ spell.casting }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ spell.range }}
                                        <span v-if="spell.range && spell.area"><br /></span>
                                        {{ spell.area }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">{{ spell.targets }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ spell.duration }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ spell.default_level }}</td>
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
