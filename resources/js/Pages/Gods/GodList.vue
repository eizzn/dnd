<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import ListFetcher from "@/components/ListFetcher.vue";
import TailwindPagination from "laravel-vue-pagination/src/TailwindPagination.vue";
import {computed, onMounted, ref} from "vue";
import NavLink from "@/components/NavLink.vue";
import MultiSelect from "@/Components/MultiSelect.vue";

const Uri = "gods";
const pantheons = ref([]);
const filters = {
    name: null,
    title: null,
    pantheon_id: [],
    level: [],
    alignment: null,
    portfolio: null,
};

const pantheonOptions = computed(() => pantheons.value.map(p => ({ value: p.id, label: p.name })));

const getOptions = async () => {
    try {
        const response = await axios.get('/api/pantheons?per_page=200');
        pantheons.value = response.data.data;
    } catch (error) {
        console.error("Error fetching options:", error);
    }
};

onMounted(async () => {
    await getOptions();
});
</script>

<template>
    <Head title="Gods" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Gods
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
                                    <label for="god-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="god-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter name to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="god-title-filter" class="block text-sm font-medium text-gray-700">Title</label>
                                    <input
                                        id="god-title-filter"
                                        type="text"
                                        v-model="filters.title"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter title to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="god-pantheon-filter" class="block text-sm font-medium text-gray-700">Pantheon</label>
                                    <MultiSelect
                                        v-model="filters.pantheon_id"
                                        :options="pantheonOptions"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="god-level-filter" class="block text-sm font-medium text-gray-700">Level</label>
                                    <MultiSelect
                                        v-model="filters.level"
                                        :options="[
                                            { value: 'greater', label: 'Greater' },
                                            { value: 'intermediate', label: 'Intermediate' },
                                            { value: 'lesser', label: 'Lesser' },
                                            { value: 'demi', label: 'Demi' },
                                            { value: 'hero', label: 'Hero' },
                                            { value: 'archdevil', label: 'Archdevil' },
                                            { value: 'devil lord', label: 'Devil Lord' },
                                            { value: 'duke of hell', label: 'Duke of Hell' },
                                            { value: 'devil', label: 'Devil' },
                                            { value: 'demon prince', label: 'Demon Prince' },
                                            { value: 'demon lord', label: 'Demon Lord' },
                                            { value: 'demon', label: 'Demon' },
                                            { value: 'Altraloth', label: 'Altraloth' },
                                            { value: 'yugoloth', label: 'Yugoloth' },
                                            { value: 'solar', label: 'Solar' },
                                            { value: 'tome archon', label: 'Tome Archon' },
                                            { value: 'archon', label: 'Archon' },
                                            { value: 'guardinal paragon', label: 'Guardinal Paragon' },
                                            { value: 'guardinal', label: 'Guardinal' },
                                            { value: 'slaad lord', label: 'Slaad Lord' },
                                            { value: 'slaad', label: 'Slaad' },
                                            { value: 'prime', label: 'Prime' },
                                            { value: 'modron', label: 'Modron' },
                                            { value: 'archomental', label: 'Archomental' },
                                            { value: 'archfey', label: 'Archfey' },
                                            { value: 'fey', label: 'Fey' },
                                            { value: 'dead', label: 'Dead' },
                                            { value: 'departed', label: 'Departed' },
                                        ]"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <span class="block text-sm font-medium text-gray-700">Alignment</span>
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="god-portfolio-filter" class="block text-sm font-medium text-gray-700">Portfolio</label>
                                    <input
                                        id="god-portfolio-filter"
                                        type="text"
                                        v-model="filters.portfolio"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter portfolio to filter"
                                    />
                                </th>
                            </template>

                            <template #table="{ data }">
                                <tr v-for="god in data" :key="god.id" class="hover:bg-gray-50">
                                    <td class="px-4 py-2 border border-gray-300">
                                        <NavLink
                                            :href="`/god/${god.id}/pantheon/${god.pantheon.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ god.name }}
                                        </NavLink>
                                    </td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.title }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.pantheon.name }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.level }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.alignment }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ god.portfolio }}</td>
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
