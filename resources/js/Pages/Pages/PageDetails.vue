<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";

const route = useRoute();
const page = ref(null);
const error = ref(null);

const fetchPageDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/page\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/page/${id}`);
        page.value = response.data.data;
    } catch (err) {
        console.error("Error fetching page details:", err);
        error.value = "Failed to load page details.";
    }
};

const pageTitle = computed(() => page.value?.name || "Loading...");

onMounted(fetchPageDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Rules</span><br/>
                <span>{{ page?.name }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="page">
                            <section class="m-8">
                                <div class="description-container" v-html="page.description"></div>
                            </section>
                            <section v-for="(rule, index) in page.rules" :key="index" class="m-2 border-b-2 border-stone-600 py-2">
                                <h3>{{ rule.name }}</h3>
                                <div class="description-container" v-html="rule.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
