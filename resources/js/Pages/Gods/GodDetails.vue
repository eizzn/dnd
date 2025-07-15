<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const god = ref(null);
const error = ref(null);

const fetchSpellDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/god\/(\d+)\/pantheon\/(\d+)/);
        const godId = match ? parseInt(match[1], 10) : null;
        const pantheonId = match ? parseInt(match[2], 10) : null;

        if (isNaN(godId)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/god/${godId}/pantheon/${pantheonId}`);
        god.value = response.data.data;
    } catch (err) {
        console.error("Error fetching god details:", err);
        error.value = "Failed to load god details.";
    }
};

const pageTitle = computed(() => god.value?.name || "Loading...");

onMounted(fetchSpellDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>{{ god?.name || "God Details" }} ({{ god?.level }})</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="god">
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
                                            <td colspan="4" class="px-4 py-2 border border-gray-300">
                                                <p>{{ god.title }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Pantheon</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Symbol</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Favored Weapon</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Alignment</th>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border border-gray-300">{{ god.pantheon.name }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ god.symbol }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ god.favored_weapon }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ god.alignment }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Aliases</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Portfolio</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Regions</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Master</th>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border border-gray-300">{{ god.aliases }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ god.portfolio }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ god.regions }}</td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <NavLink :href="`/god/${god.master?.id}/pantheon/${god.pantheon.id}`">{{ god.master?.name }}</NavLink>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2">
                                <div v-html="god.description"></div>
                            </section>
                            <section class="m-2">
                                <div class="flex w-full gap-3">
                                    <div v-if="Array.isArray(god.servants) && god.servants.length > 0" class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4>Servants</h4>
                                        <ul>
                                            <li v-for="(servant, index) in god.servants" :key="index">
                                                <NavLink :href="`/god/${servant.id}/pantheon/${servant.pantheon_id}`">{{ servant.name }}</NavLink>
                                            </li>
                                        </ul>
                                    </div>
                                    <div v-if="Array.isArray(god.classes) && god.classes.length > 0" class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4>God Classes</h4>
                                        <ul>
                                            <li v-for="(klass, index) in god.classes" :key="index">
                                                <NavLink :href="`/class/${klass.id}`">{{ klass.name }}</NavLink>
                                                <span class="px-2">{{ klass.level }}</span>
                                                <span v-if="klass.meta">&nbsp;({{ klass.meta }})</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div v-if="Array.isArray(god.worship_classes) && god.worship_classes.length > 0" class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4>Worship Classes</h4>
                                        <ul>
                                            <li v-for="(klass, index) in god.worship_classes" :key="index">
                                                <NavLink :href="`/class/${klass.id}`">{{ klass.name }}</NavLink>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <section v-if="god.piety" class="m-2">
                                <table class="w-full">
                                    <tbody>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Favor</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.favor"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Devotion</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.devotion"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Favor</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.favor"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Devotion</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.devotion"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Earn Piety</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.earn_piety"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Lose Piety</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.lose_piety"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Piety 3</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.piety3"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Piety 10</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.piety10"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Piety 25</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.piety25"></div></td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Piety 50</th>
                                            <td class="px-4 py-2 border border-gray-300"><div v-html="god.piety.piety50"></div></td>
                                        </tr>
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
