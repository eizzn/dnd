<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";

const route = useRoute();
const formula = ref(null);
const error = ref(null);

const fetchArmorDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/formula\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/formula/${id}`);
        formula.value = response.data.data;
    } catch (err) {
        console.error("Error fetching feat details:", err);
        error.value = "Failed to load feat details.";
    }
};

const pageTitle = computed(() => formula.value?.name || "Loading...");

onMounted(fetchArmorDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>{{ formula?.name || "Formula Details" }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="formula">
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
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Type</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Level</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Rarity</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Price</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">{{ formula.type }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ formula.level }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ formula.rarity }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ formula.price }}</td>
                                        </tr>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Types</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Crafting</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Method</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Activation</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <ul>
                                                    <li v-for="type in formula.types" :key="type">{{ type.name }}</li>
                                                </ul>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">{{ formula.crafting }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ formula.method }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ formula.activation }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2">
                                <div v-html="formula.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
