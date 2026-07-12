<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const template = ref(null);
const error = ref(null);

const fetchTemplateDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/template\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/template/${id}`);
        template.value = response.data.data;
    } catch (err) {
        console.error("Error fetching template details:", err);
        error.value = "Failed to load template details.";
    }
};

const pageTitle = computed(() => template.value?.name || "Loading...");

onMounted(fetchTemplateDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ template ? template.name : 'Template' }}
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div v-if="error" class="text-red-400 p-4">{{ error }}</div>
                <div v-else-if="template" class="space-y-6">

                    <!-- Name & Types -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Name</h3>
                            </div>
                            <div class="p-6">
                                <p class="text-lg font-bold text-stone-100">{{ template.name }}</p>
                            </div>
                        </div>
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Types</h3>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap gap-1.5">
                                    <NavLink
                                        v-for="(type, index) in template.types" :key="index"
                                        :href="`/type/${type.id}`"
                                        class="inline-block px-2.5 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium hover:bg-amber-900/60 transition-colors"
                                        style="border-bottom-width: 1px !important;"
                                    >{{ type.name }}</NavLink>
                                    <span v-if="!template.types?.length" class="text-stone-500">—</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Description</h3>
                        </div>
                        <div class="p-6 description-container" v-html="template.description"></div>
                    </div>

                    <!-- Details -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Details</h3>
                        </div>
                        <div class="p-6 description-container" v-html="template.details"></div>
                    </div>

                </div>
                <div v-else class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6">
                    <p class="text-stone-400">Loading...</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
