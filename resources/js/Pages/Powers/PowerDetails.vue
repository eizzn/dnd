<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const power = ref(null);
const error = ref(null);

const fetchPowerDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/power\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/power/${id}`);
        power.value = response.data.data;
    } catch (err) {
        console.error("Error fetching power details:", err);
        error.value = "Failed to load power details.";
    }
};

const pageTitle = computed(() => power.value?.name || "Loading...");

onMounted(fetchPowerDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Power:</span><br/>
                <span>{{ power?.name }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="power">
                            <section class="m-2">
                                <table class="w-full border-collapse border border-gray-300">
                                    <colgroup>
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                    </colgroup>
                                    <tbody>
                                        <tr class="border border-gray-300">
                                            <th class="px-4 py-2 border border-gray-300">Default Level</th>
                                            <th class="px-4 py-2 border border-gray-300">Action</th>
                                            <th class="px-4 py-2 border border-gray-300">Range/Area</th>
                                            <th class="px-4 py-2 border border-gray-300">Targets</th>
                                        </tr>
                                        <tr class="border border-gray-300">
                                            <td class="px-4 py-2 border border-gray-300">{{ power.default_level }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ power.action_type }}</td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <span>{{ power.range }}</span>
                                                <br v-if="power.range && power.area" />
                                                <span>{{ power.area }}</span>
                                            </td>
                                            <td class="px-4 py-2 border border-gray-300">{{ power.targets || '-' }}</td>
                                        </tr>
                                        <tr class="border border-gray-300">
                                            <th class="px-4 py-2 border border-gray-300">Duration</th>
                                            <th class="px-4 py-2 border border-gray-300">Saves</th>
                                            <th class="px-4 py-2 border border-gray-300">Types</th>
                                            <th class="px-4 py-2 border border-gray-300">Classes</th>
                                        </tr>
                                        <tr class="border border-gray-300">
                                            <td class="px-4 py-2 border border-gray-300">{{ power.duration }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ power.save_attribute }}</td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <ul class="list-disc ml-4">
                                                    <li v-for="(type, index) in power.types" :key="index">
                                                        <NavLink
                                                            :href="`/type/${type.id}`"
                                                            class="text-blue-800 hover:underline p-0"
                                                            style="border-bottom-width: 0 !important;"
                                                        >
                                                            {{ type.name }}
                                                        </NavLink>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <div class="max-h-80 overflow-y-auto">
                                                    <table class="w-full">
                                                        <tbody>
                                                            <tr v-for="(klass, index) in power.classes" :key="index">
                                                                <td><NavLink :href="`/class/${klass.id}`">{{ klass.name }}</NavLink></td>
                                                                <td>{{ klass.level }}</td>
                                                            </tr>
                                                            <tr><td colspan="2" class="h-2"></td></tr>
                                                            <tr v-for="(feat, index) in power.feats" :key="index">
                                                                <td><NavLink :href="`/feat/${feat.id}`">{{ feat.name }}</NavLink></td>
                                                                <td>{{ feat.level }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border border-gray-300">
                                            <th class="px-4 py-2 border border-gray-300">Requires</th>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <div class="max-h-80 overflow-y-auto">
                                                    <ul>
                                                        <li v-for="(parent, index) in power.parents" :key="index">
                                                            <NavLink :href="`/power/${parent.id}`">{{ parent.name }}</NavLink>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <th class="px-4 py-2 border border-gray-300">Required For</th>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <div class="max-h-80 overflow-y-auto">
                                                    <ul>
                                                        <li v-for="(child, index) in power.children" :key="index">
                                                            <NavLink :href="`/power/${child.id}`">{{ child.name }}</NavLink>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2">
                                <h3 class="text-lg font-bold">Description</h3>
                                <div v-html="power.description" class="mb-4"></div>
                                <div v-if="power.requirements != null">
                                    <h4 class="text-md font-bold">Requirements</h4>
                                    <div v-html="power.requirements" class="mb-4"></div>
                                </div>
                            </section>
                            <section class="m-2">
                                <div class="flex w-full gap-3">
                                    <div v-if="power.saves" class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4 class="text-center font-bold">Saves</h4>
                                        <div v-html="power.saves" ></div>
                                    </div>
                                    <div v-if="power.heightened" class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4 class="text-center font-bold">Heightened</h4>
                                        <div v-html="power.heightened"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div v-else>
                            <p>Loading...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
