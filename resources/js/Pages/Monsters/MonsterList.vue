<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import NavLink from "@/components/NavLink.vue";
import MultiSelect from "@/components/MultiSelect.vue";
import {computed, onMounted, ref} from "vue";
import axios from "axios";

const Uri = "monsters";
const filters = {
    name: null,
    cr: null,
};

const types = ref([]);
const typeOptions = computed(() => types.value.map(t => ({ value: t.name, label: t.name })));

const getTypeOptions = async () => {
    try {
        const response = await axios.get('/api/types', {
            params: { typeable_type: 'Monster', per_page: 200 },
        });
        types.value = response.data.data;
    } catch (error) {
        console.error("Error fetching type options:", error);
    }
};

onMounted(() => {
    getTypeOptions();
});
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
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <span class="block text-sm font-medium text-gray-700">Hit Die</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="monster-cr-filter" class="block text-sm font-medium text-gray-700">CR</label>
                                    <select
                                        id="monster-cr-filter"
                                        v-model="filters.cr"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-1.5 px-3 text-sm text-gray-700 shadow-sm transition hover:border-indigo-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/30"
                                    >
                                        <option value="">Any</option>
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
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <span class="block text-sm font-medium text-gray-700">Alignment</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <span class="block text-sm font-medium text-gray-700">Description</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="monster-type-filter" class="block text-sm font-medium text-gray-700">Types</label>
                                    <MultiSelect
                                        v-model="filters.type"
                                        :options="typeOptions"
                                    />
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
                                        <div class="flex flex-wrap gap-1">
                                            <span v-for="(type, index) in monster.types" :key="index" class="inline-block px-2 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
                                        </div>
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
