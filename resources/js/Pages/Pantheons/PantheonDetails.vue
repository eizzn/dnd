<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const pantheon = ref(null);
const error = ref(null);

const fetchSpellDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/pantheon\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/pantheon/${id}`);
        pantheon.value = response.data.data;
    } catch (err) {
        console.error("Error fetching pantheon details:", err);
        error.value = "Failed to load pantheon details.";
    }
};

const pageTitle = computed(() => pantheon.value?.name || "Loading...");

onMounted(fetchSpellDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Pantheon:</span><br/>
                <span>{{ pantheon?.name }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="pantheon">
                            <section class="m-2 relative">
                                <div class="float-right mx-4 px-4 py-2 border border-2">
                                    <NavLink
                                        :href="`/gods?pantheon_id=${pantheon.id}`"
                                        class="text-blue-800 hover:underline p-0"
                                        style="border-bottom-width: 0 !important;"
                                    >
                                        Gods
                                    </NavLink>
                                </div>
                                <div v-html="pantheon.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
