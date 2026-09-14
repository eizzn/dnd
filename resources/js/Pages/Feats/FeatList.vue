<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import NavLink from "@/components/NavLink.vue";
import MultiSelect from "@/components/MultiSelect.vue";

const Uri = "feats";
const filters = {
    name: null,
    type: [],
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
                                    <label class="block text-sm font-medium text-gray-700">Types</label>
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="[
                                            { value: 'generic', label: 'Generic' },
                                            { value: 'abjuration', label: 'Abjuration' },
                                            { value: 'conjuration', label: 'Conjuration' },
                                            { value: 'divination', label: 'Divination' },
                                            { value: 'enchantment', label: 'Enchantment' },
                                            { value: 'evocation', label: 'Evocation' },
                                            { value: 'illusion', label: 'Illusion' },
                                            { value: 'necromancy', label: 'Necromancy' },
                                            { value: 'transmutation', label: 'Transmutation' },
                                            { value: 'acid', label: 'Acid' },
                                            { value: 'cold', label: 'Cold' },
                                            { value: 'electricity', label: 'Electricity' },
                                            { value: 'fire', label: 'Fire' },
                                            { value: 'force', label: 'Force' },
                                            { value: 'poison', label: 'Poison' },
                                            { value: 'negative', label: 'Negative' },
                                            { value: 'positive', label: 'Positive' },
                                            { value: 'sonic', label: 'Sonic' },
                                            { value: 'metapsionic', label: 'Metapsionic' },
                                            { value: 'psionic', label: 'Psionic' },
                                            { value: 'psionic combat', label: 'Psionic Combat' },
                                            { value: 'psionic focus', label: 'Psionic Focus' },
                                            { value: 'stance', label: 'Stance' },
                                            { value: 'animal companion', label: 'Animal Companion' },
                                            { value: 'pact', label: 'Pact' },
                                            { value: 'arcane', label: 'Arcane' },
                                            { value: 'artificer discipline', label: 'Artificer Discipline' },
                                            { value: 'bardic inspiration', label: 'Bardic Inspiration' },
                                            { value: 'discipline', label: 'Discipline'},
                                            { value: 'channel divinity', label: 'Channel Divinity' },
                                            { value: 'combat mastery', label: 'Combat Mastery' },
                                            { value: 'divine', label: 'Divine' },
                                            { value: 'fighter feat', label: 'Fighter Feat' },
                                            { value: 'primal', label: 'Primal' },
                                            { value: 'rage', label: 'Rage' },
                                            { value: 'totem', label: 'Totem' },
                                            { value: 'wizard school', label: 'Wizard School' },
                                            { value: 'dwarf', label: 'Dwarf' },
                                            { value: 'elf', label: 'Elf' },
                                            { value: 'gnome', label: 'Gnome' },
                                            { value: 'halfling', label: 'Halfling' },
                                            { value: 'human', label: 'Human' },
                                            { value: 'extra action', label: 'Extra Action' },
                                            { value: 'item creation', label: 'Item Creation' },
                                            { value: 'metamagic', label: 'Metamagic' },
                                            { value: 'talent', label: 'Talent' },
                                        ]"
                                    />
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
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="(type, index) in feat.types" :key="index" class="inline-block px-2 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
                                        </div>
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
