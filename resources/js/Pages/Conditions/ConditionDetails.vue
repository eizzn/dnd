<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";

const route = useRoute();
const condition = ref(null);
const error = ref(null);

const fetchArmorDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/condition\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/condition/${id}`);
        condition.value = response.data.data;
    } catch (err) {
        console.error("Error fetching condition details:", err);
        error.value = "Failed to load condition details.";
    }
};

const pageTitle = computed(() => condition.value?.name || "Loading...");

onMounted(fetchArmorDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>{{ condition?.name || "Condition Details" }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="condition">
                            <section class="m-2">
                                <div v-html="condition.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
