<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";
import ClassTable from "@/components/ClassTable.vue";

const route = useRoute();
const material = ref(null);
const error = ref(null);
const hasWeaponFinesse = ref(false);

const fetchMaterialDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/material\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/material/${id}`);
        material.value = response.data.data;
    } catch (err) {
        console.error("Error fetching material details:", err);
        error.value = "Failed to load material details.";
    }
};

const pageTitle = computed(() => material.value?.name || "Loading...");

onMounted(fetchMaterialDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Material</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="material">
                            <section class="m-2 text-xl">
                                {{ material.name }}
                            </section>
                            <section class="m-2 pt-2 border-t-4">
                                <table class="w-full">
                                    <colgroup>
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Type</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Rarity</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Price</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Source</th>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border border-gray-300">{{ material.type }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ material.rarity }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ material.price }}</td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <div class="description-container" v-html="material.source"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="my-8 mx-2 border-t-4">
                                <div class="description-container" v-html="material.description"></div>
                            </section>
                            <section class="my-8 mx-2 border-t-4 flex">
                                <div class="flex-1 border rounded m-2 p-2" v-if="material.alchemy != null">
                                    <h4>Alchemy</h4>
                                    <div class="description-container" v-html="material.alchemy"></div>
                                </div>
                                <div class="flex-1 border rounded m-2 p-2" v-if="material.armor != null">
                                    <h4>Armor</h4>
                                    <div class="description-container" v-html="material.armor"></div>
                                </div>
                                <div class="flex-1 border rounded m-2 p-2" v-if="material.weapon != null">
                                    <h4>Weapon</h4>
                                    <div class="description-container" v-html="material.weapon"></div>
                                </div>
                                <div class="flex-1 border rounded m-2 p-2" v-if="material.other != null && material.other !== ''">
                                    <h4>Other</h4>
                                    <div class="description-container" v-html="material.other"></div>
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
