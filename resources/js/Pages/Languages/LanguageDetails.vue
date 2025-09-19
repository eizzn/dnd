<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const language = ref(null);
const error = ref(null);

const fetchLanguageDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/language\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/language/${id}`);
        language.value = response.data.data;
    } catch (err) {
        console.error("Error fetching feat details:", err);
        error.value = "Failed to load feat details.";
    }
};

const pageTitle = computed(() => language.value?.name || "Loading...");

onMounted(fetchLanguageDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Language:</span><br/>
                <span>{{ language?.name }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="language">
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
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Alphabet</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Family</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Locale</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">{{ language.type }}</td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <NavLink v-if="language.alphabet" :href="`/alphabet/${language.alphabet.id}`">
                                                    {{ language.alphabet.name }}
                                                </NavLink>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">{{ language.family }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ language.local }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section v-if="language.speakers" class="m-2">
                                <dl>
                                    <dt>Speakers</dt> <dd>{{ language.speakers }}</dd>
                                </dl>
                            </section>
                            <section class="m-2 border-t">
                                <div class="description-container" v-html="language.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
