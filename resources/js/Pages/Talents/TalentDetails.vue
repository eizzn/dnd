<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const talent = ref(null);
const error = ref(null);

const fetchTalentDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/talent\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/talent/${id}`);
        talent.value = response.data.data;
    } catch (err) {
        console.error("Error fetching talent details:", err);
        error.value = "Failed to load talent details.";
    }
};

const pageTitle = computed(() => talent.value?.name || "Loading...");

onMounted(fetchTalentDetails);
</script>

<template>
    <Head :title="pageTitle"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Talent:</span><br/>
                <span>{{ talent?.name }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="talent">
                            <section class="m-2">
                                <table class="w-full border-collapse border border-gray-300">
                                    <colgroup>
                                        <col style="width: 25%;"/>
                                        <col style="width: 25%;"/>
                                        <col style="width: 25%;"/>
                                        <col style="width: 25%;"/>
                                    </colgroup>
                                    <tbody>
                                    <tr>
                                        <th class="px-4 py-2 border border-gray-300">Requirements</th>
                                        <th class="px-4 py-2 border border-gray-300">Trigger</th>
                                        <th class="px-4 py-2 border border-gray-300">Skills</th>
                                        <th class="px-4 py-2 border border-gray-300">Types</th>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 border border-gray-300">{{ talent.requirement }}</td>
                                        <td class="px-4 py-2 border border-gray-300">{{ talent.trigger }}</td>
                                        <td class="px-4 py-2 border border-gray-300">
                                            <ul class="space-y-1.5">
                                                <li v-for="(skill, index) in talent.skills" :key="index" class="flex items-center gap-2">
                                                    <NavLink
                                                        :href="`/skill/${skill.id}`"
                                                        style="border-bottom-width: 0 !important;"
                                                    >{{ skill.name }}</NavLink>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300">
                                            <div class="flex flex-wrap gap-1.5">
                                                <NavLink
                                                    v-for="(type, index) in talent.types" :key="index"
                                                    :href="`/type/${type.id}`"
                                                    class="inline-block px-2.5 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium hover:bg-amber-900/60 transition-colors"
                                                    style="border-bottom-width: 1px !important;"
                                                >{{ type.name }}<span v-if="type.level" class="ml-1 text-stone-400">({{ type.level }})</span></NavLink>
                                                <span v-if="!talent.types?.length" class="text-stone-500">—</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 py-2 border border-gray-300">Requires</th>
                                        <td class="px-4 py-2 border border-gray-300">
                                            <ul>
                                                <li v-if="talent.parent">
                                                    <NavLink :href="`/talent/${talent.parent.id}`">{{ talent.parent.name }}</NavLink>
                                                </li>
                                            </ul>
                                        </td>
                                        <th class="px-4 py-2 border border-gray-300">Required For</th>
                                        <td class="px-4 py-2 border border-gray-300">
                                            <ul>
                                                <li v-for="(child, index) in talent.children" :key="index">
                                                    <NavLink :href="`/talent/${child.id}`">{{ child.name }}</NavLink>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2">
                                <div v-html="talent.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
