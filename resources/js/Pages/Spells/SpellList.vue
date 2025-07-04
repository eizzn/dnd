<script setup>
import { useRouter, useRoute } from "vue-router";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import { ref, onMounted } from "vue";
import { TailwindPagination } from 'laravel-vue-pagination';
import debounce from "lodash/debounce";

const router = useRouter();
const route = useRoute();

const spells = ref([]);
const pagination = ref({});
const currentPage = ref(1);
const filters = ref({
    name: null,
});

const getSpells = async (page) => {
    try {
        currentPage.value = page;
        let url = `/api/spells?page=${page}`;
        const queryParams = {};
        if (page > 1) {
            queryParams.page = page;
        }
        Object.keys(filters.value).forEach((key) => {
            if (filters.value[key]) {
                url += `&${key}=${filters.value[key]}`;
                queryParams[key] = filters.value[key];
            }
        });
        const response = await axios.get(url);
        spells.value = response.data.data;
        pagination.value = response.data;

        await router.push({ path: route.path, query: queryParams });
    } catch (error) {
        console.error("Error fetching classes:", error);
    }
};
const goToPage = (page) => {
    getSpells(page);
}

// Fetch spells when the component is mounted
onMounted(async () => {
    await router.isReady();
    const page = route.query.page ? parseInt(route.query.page) : 1;
    currentPage.value = isNaN(page) ? 1 : page;
    await getSpells(currentPage.value);
});
const debounceGetSpells = debounce(getSpells, 500);
</script>

<template>
    <Head title="Classes" />

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
                        <table class="w-full border-collapse border border-gray-300">
                            <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 border border-gray-300 text-left">
                                    <label for="spell-name-filter" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input
                                        id="spell-name-filter"
                                        type="text"
                                        v-model="filters.name"
                                        @input="debounceGetSpells(1)"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter title to filter"
                                    />
                                </th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Types</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Casting</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Range/Area</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Targets</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Duration</th>
                                <th class="px-4 py-2 border border-gray-300 text-left">Default Level</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="spell in spells" :key="spell.id" class="hover:bg-gray-50">
                                <td class="px-4 py-2 border border-gray-300">
                                    <router-link :to="`/spell/${spell.id}`">
                                        {{ spell.name }}
                                    </router-link>
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
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="text-right">
                                            <TailwindPagination
                                                :data="pagination"
                                                @pagination-change-page="goToPage"
                                                :align="'right'"
                                                :current-page="currentPage"
                                                :limit="5"
                                            />
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
