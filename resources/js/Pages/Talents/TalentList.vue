<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import NavLink from "@/components/NavLink.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import MultiSelect from "@/components/MultiSelect.vue";

const Uri = "talents";
const filters = {
    name: null,
};
</script>

<template>
    <Head title="Talents" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Talents
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
                                    <label for="talent-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="talent-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="talent-name-filter" class="block text-sm font-medium text-gray-700">Requirements</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="talent-name-filter" class="block text-sm font-medium text-gray-700">Trigger</label>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="talent-name-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="[
                                            { value: 'animal companion', label: 'Animal Companion' },
                                            { value: 'attack', label: 'Attack' },
                                            { value: 'attack of opportunity', label: 'Attack of Opportunity' },
                                            { value: 'arcane', label: 'Arcane' },
                                            { value: 'charge', label: 'Charge' },
                                            { value: 'concentration', label: 'Concentration' },
                                            { value: 'diminishing', label: 'Diminishing' },
                                            { value: 'divine', label: 'Divine' },
                                            { value: 'finisher', label: 'Finisher' },
                                            { value: 'flanking', label: 'Flanking' },
                                            { value: 'graft', label: 'Graft' },
                                            { value: 'grapple', label: 'Grapple' },
                                            { value: 'heroic surge', label: 'Heroic Surge' },
                                            { value: 'initiative', label: 'Initiative' },
                                            { value: 'item creation', label: 'Item Creation' },
                                            { value: 'melee', label: 'Melee' },
                                            { value: 'move', label: 'Move' },
                                            { value: 'mounted', label: 'Mounted' },
                                            { value: 'precision', label: 'Precision' },
                                            { value: 'primal', label: 'Primal' },
                                            { value: 'psionic', label: 'Psionic' },
                                            { value: 'psionic combat', label: 'Psionic Combat' },
                                            { value: 'psionic focus', label: 'Psionic Focus' },
                                            { value: 'rage', label: 'Rage' },
                                            { value: 'ranged', label: 'Ranged' },
                                            { value: 'reaction', label: 'Reaction' },
                                            { value: 'shield', label: 'Shield' },
                                            { value: 'skill', label: 'Skill' },
                                            { value: 'stance', label: 'Stance' },
                                            { value: 'strike', label: 'Strike' },
                                            { value: 'unarmed', label: 'Unarmed' },
                                            { value: 'wild shape', label: 'Wild Shape' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="talent-name-filter" class="block text-sm font-medium text-gray-700">Description</label>
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="talent in data" :key="talent.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/talent/${talent.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ talent.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ talent.requirements }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ talent.trigger }}
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="(type, index) in talent.types" :key="index" class="inline-block px-2 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        {{ talent.description }}
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
                                        active-class="text-blue-500 font-bold"
                                        inactive-class="text-gray-500 opacity-20"
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
