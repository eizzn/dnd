<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const feature = ref(null);
const error = ref(null);

const fetchFeatureDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/feature\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/feature/${id}`);
        feature.value = response.data.data;
    } catch (err) {
        console.error("Error fetching feature details:", err);
        error.value = "Failed to load feature details.";
    }
};

const pageTitle = computed(() => feature.value?.name || "Loading...");

onMounted(fetchFeatureDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Feature</span><br/>
                <span>{{ feature?.name }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="feature">
                            <section class="m-2">
                                <div class="description-container" v-html="feature.description"></div>
                            </section>
                            <section class="m-2">
                                <div class="flex w-full gap-3">
                                    <div class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4 class="mb-2 text-lg font-semibold">Types</h4>
                                        <ul>
                                            <li v-for="(type, index) in feature.types" :key="index">
                                                <NavLink
                                                    :href="`/type/${type.id}`"
                                                    class="text-blue-800 hover:underline p-0"
                                                    style="border-bottom-width: 0 !important;"
                                                >
                                                    {{ type.name }}
                                                </NavLink>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4 class="mb-2 text-lg font-semibold">Classes</h4>
                                        <ul>
                                            <li v-for="(klass, index) in feature.classes" :key="index">
                                                <NavLink :href="`/class/${klass.id}`">{{ klass.name }}</NavLink>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
