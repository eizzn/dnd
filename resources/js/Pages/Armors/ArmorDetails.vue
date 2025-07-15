<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";

const route = useRoute();
const armor = ref(null);
const error = ref(null);

const fetchArmorDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/armor\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/armor/${id}`);
        armor.value = response.data.data;
    } catch (err) {
        console.error("Error fetching feat details:", err);
        error.value = "Failed to load feat details.";
    }
};

const pageTitle = computed(() => armor.value?.name || "Loading...");

onMounted(fetchArmorDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>{{ armor?.name || "Armor Details" }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="armor">
                            <section class="m-2">
                                <table class="w-full border-collapse border border-gray-300">
                                    <colgroup>
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 12.5%;" />
                                        <col style="width: 12.5%;" />
                                        <col style="width: 25%;" />
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Type</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Group</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Bulk</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Weight</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Price</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">{{ armor.type }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ armor.group }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ armor.bulk }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ armor.weight }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ armor.price }} gp</td>
                                        </tr>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300" colspan="3">Types</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300" colspan="2">Statistics</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2" colspan="3">
                                                <table class="w-full">
                                                    <tbody>
                                                        <tr v-for="(type, index) in armor.types" :key="index">
                                                            <th class="text-left border-y border-gray-100 px-2">{{ type.name }}</th>
                                                            <td class="text-left border-y border-gray-100 px-2">{{ type.description }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2" colspan="2">
                                                <table class="w-full">
                                                    <tbody>
                                                        <tr v-for="(prop, index) in armor.properties" :key="index">
                                                            <th class="text-left border-y border-gray-100">{{ prop.name }}</th>
                                                            <td class="text-right border-y border-gray-100">{{ prop.value }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2">
                                <div v-html="armor.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
