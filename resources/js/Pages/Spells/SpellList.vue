<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import NavLink from "@/components/NavLink.vue";
import { TailwindPagination } from "laravel-vue-pagination";
import MultiSelect from "@/components/MultiSelect.vue";

const Uri = "spells";
const filters = {
    name: null,
    type: [],
    casting: [],
    duration: null,
    default_level: [],
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
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="[
                                            { value: 'abjuration', label: 'Abjuration' },
                                            { value: 'conjuration', label: 'Conjuration' },
                                            { value: 'divination', label: 'Divination' },
                                            { value: 'enchantment', label: 'Enchantment' },
                                            { value: 'evocation', label: 'Evocation' },
                                            { value: 'illusion', label: 'Illusion' },
                                            { value: 'necromancy', label: 'Necromancy' },
                                            { value: 'transmutation', label: 'Transmutation' },
                                            { value: 'acid', label: 'Acid' },
                                            { value: 'air', label: 'Air' },
                                            { value: 'cold', label: 'Cold' },
                                            { value: 'darkness', label: 'Darkness' },
                                            { value: 'earth', label: 'Earth' },
                                            { value: 'electricity', label: 'Electricity' },
                                            { value: 'fire', label: 'Fire' },
                                            { value: 'force', label: 'Force' },
                                            { value: 'light', label: 'Light' },
                                            { value: 'negative', label: 'Negative' },
                                            { value: 'poison', label: 'Poison' },
                                            { value: 'positive', label: 'Positive' },
                                            { value: 'shadow', label: 'Shadow' },
                                            { value: 'sonic', label: 'Sonic' },
                                            { value: 'water', label: 'Water' },
                                            { value: 'chaotic', label: 'Chaotic' },
                                            { value: 'evil', label: 'Evil' },
                                            { value: 'neutral', label: 'Neutral' },
                                            { value: 'good', label: 'Good' },
                                            { value: 'lawful', label: 'Lawful' },
                                            { value: 'demon', label: 'Demon' },
                                            { value: 'aura', label: 'Aura' },
                                            { value: 'calling', label: 'Calling' },
                                            { value: 'curse', label: 'Curse' },
                                            { value: 'healing', label: 'Healing' },
                                            { value: 'polymorph', label: 'Polymorph' },
                                            { value: 'ray', label: 'Ray' },
                                            { value: 'ritual', label: 'Ritual' },
                                            { value: 'smite', label: 'Smite' },
                                            { value: 'spirit', label: 'Spirit' },
                                            { value: 'summoning', label: 'Summoning' },
                                            { value: 'compulsion', label: 'Compulsion' },
                                            { value: 'animate', label: 'Animate' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300">
                                    <label for="spell-casting-filter" class="block text-sm font-medium text-gray-700">Casting</label>
                                    <MultiSelect
                                        v-model="filters.casting"
                                        :options="[
                                            { value: 'material', label: 'Material' },
                                            { value: 'somatic', label: 'Somatic' },
                                            { value: 'verbal', label: 'Verbal' },
                                            { value: 'reaction', label: 'Reaction' },
                                            { value: 'free', label: 'Free' },
                                            { value: 'caster', label: 'Secondary Casters' },
                                            { value: 'ability', label: 'Ability Damage' },
                                            { value: 'skill', label: 'Skill Check' },
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
                                    <label for="spell-duration-filter" class="block text-sm font-medium text-gray-700">Duration</label>
                                    <select
                                        id="spell-duration-filter"
                                        v-model="filters.duration"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-1.5 px-3 text-sm text-gray-700 shadow-sm transition hover:border-indigo-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/30"
                                    >
                                        <option value="">Any</option>
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
                                    <MultiSelect
                                        v-model="filters.default_level"
                                        :options="[
                                            { value: 0, label: '0' },
                                            { value: 1, label: '1' },
                                            { value: 2, label: '2' },
                                            { value: 3, label: '3' },
                                            { value: 4, label: '4' },
                                            { value: 5, label: '5' },
                                            { value: 6, label: '6' },
                                            { value: 7, label: '7' },
                                            { value: 8, label: '8' },
                                            { value: 9, label: '9' },
                                            { value: 10, label: '10' },
                                        ]"
                                    />
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
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="(type, index) in spell.types" :key="index" class="inline-block px-2 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
                                        </div>
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
