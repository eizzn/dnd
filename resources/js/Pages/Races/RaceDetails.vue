<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";

const route = useRoute();
const race = ref(null);
const error = ref(null);

const fetchRaceDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/race\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/race/${id}`);
        race.value = response.data.data;
    } catch (err) {
        console.error("Error fetching race details:", err);
        error.value = "Failed to load race details.";
    }
};

const pageTitle = computed(() => race.value?.name || "Loading...");

onMounted(fetchRaceDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>{{ race?.name || "Race Details" }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="race">
                            <section class="m-2">
                                <table class="w-full border-collapse border border-gray-300">
                                    <colgroup>
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Hit Points</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Size</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Speed</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Types</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">{{ race.hit_points }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ race.size }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ race.speed }}</td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <ul>
                                                    <li v-for="(type, index) in race.types" :key="index">{{ type.name }}</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Benefits</th>
                                            <th colspan="2"class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Age</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="border border-gray-300 px-4 py-2">
                                                <div v-html="race.benefits"></div>
                                            </td>
                                            <td colspan="2" class="border border-gray-300 px-4 py-2">{{ race.age }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2">
                                <div v-html="race.description"></div>
                            </section>
                            <section class="m-2" v-if="Array.isArray(race.sub_races) && race.sub_races.length > 0">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Name</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Regions</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Benefits</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template v-for="(sub_race, index) in race.sub_races" :key="index">
                                            <tr :class="index % 2 == 0 ? 'bg-amber-50' : ''">
                                                <td class="border border-gray-300 px-4 py-2">{{ sub_race.name }}</td>
                                                <td class="border border-gray-300 px-4 py-2">{{ sub_race.regions }}</td>
                                                <td :rowspan="sub_race.description != null ? 2 : 1" class="border border-gray-300 px-4 py-2">
                                                    <div v-html="sub_race.benefits"></div>
                                                </td>
                                            </tr>
                                            <tr :class="index % 2 == 0 ? 'bg-amber-50' : ''" v-if="sub_race.description != null">
                                                <td colspan="2" class="border border-gray-300 px-4 py-2">
                                                    <div class="description-container" v-html="sub_race.description"></div>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

