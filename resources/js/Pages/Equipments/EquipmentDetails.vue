<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const equipment = ref(null);
const error = ref(null);

const fetchEquipmentDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/equipment\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/equipment/${id}`);
        equipment.value = response.data.data;
    } catch (err) {
        console.error("Error fetching feat details:", err);
        error.value = "Failed to load feat details.";
    }
};

const pageTitle = computed(() => equipment.value?.name || "Loading...");

onMounted(fetchEquipmentDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Equipment:</span><br/>
                <span>{{ equipment?.name }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="equipment">
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
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Bulk</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Hands</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Price</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Type</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">{{ equipment.bulk }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ equipment.hands }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ equipment.price }} gp</td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <ul>
                                                    <li v-for="(type, index) in equipment.types" :key="index">
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
                                        </tr>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Parent</th>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <NavLink
                                                    v-if="equipment.parent"
                                                    :href="`/equipment/${equipment.parent.id}`"
                                                    class="text-blue-800 hover:underline p-0"
                                                    style="border-bottom-width: 0 !important;"
                                                >
                                                    {{ equipment.parent.name }}
                                                </NavLink>
                                            </td>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Children</th>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <ul>
                                                    <li v-for="(child, index) in equipment.children" :key="index">
                                                        <NavLink
                                                            :href="`/equipment/${child.id}`"
                                                            class="text-blue-800 hover:underline p-0"
                                                            style="border-bottom-width: 0 !important;"
                                                        >
                                                            {{ child.name }}
                                                        </NavLink>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2">
                                <div v-html="equipment.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
