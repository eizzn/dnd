<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";

const route = useRoute();
const skill = ref(null);
const error = ref(null);

const fetchSkillDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/skill\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/skill/${id}`);
        skill.value = response.data.data;
    } catch (err) {
        console.error("Error fetching skill details:", err);
        error.value = "Failed to load skill details.";
    }
};

const pageTitle = computed(() => skill.value?.name || "Loading...");

onMounted(fetchSkillDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Skill:</span><br/>
                <span>{{ skill?.name }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="skill">
                            <section class="m-2">
                                <table class="w-full border-collapse border border-gray-300">
                                    <tbody>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Attribute</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Armor Penalty</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Untrained</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Trained</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">{{ skill.attribute.name }}</td>
                                            <td class="border border-gray-300 px-4 py-2">{{ skill.armor_penalty }}</td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <div v-html="skill.untrained_uses"></div>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <div v-html="skill.trained_uses"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-8">
                                <div class="description-container" v-html="skill.description"></div>
                            </section>
                            <section class="m-2">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th colspan="4" class="text-center border border-gray-300 px-4 py-2 bg-blue-300">Subskills</th>
                                        </tr>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Name</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Action Type</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Trained</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Outcomes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template v-for="(sub_skill, index) in skill?.sub_skills" :key="index">
                                            <tr :class="index % 2 == 0 ? 'bg-amber-50' : ''">
                                                <td class="border border-gray-300 px-4 py-2">{{ sub_skill.name }}</td>
                                                <td class="border border-gray-300 px-4 py-2">{{ sub_skill.action_type }}</td>
                                                <td class="border border-gray-300 px-4 py-2">{{ sub_skill?.trained_only ? 'Yes' : 'No' }}</td>
                                                <td :rowspan="sub_skill.trigger != null || sub_skill.requirements != null ? 3 : 2" class="border border-gray-300 px-4 py-2 border-b-8">
                                                    <dl>
                                                        <dt v-if="sub_skill.critical_success != null">Critical Success</dt> <dd v-if="sub_skill.critical_success != null">{{ sub_skill.critical_success }}</dd>
                                                        <dt v-if="sub_skill.success != null">Success</dt> <dd v-if="sub_skill.success != null">{{ sub_skill.success }}</dd>
                                                        <dt v-if="sub_skill.failure != null">Failure</dt> <dd v-if="sub_skill.failure != null">{{ sub_skill.failure }}</dd>
                                                        <dt v-if="sub_skill.critical_failure != null">Critical Failure</dt> <dd v-if="sub_skill.critical_failure != null">{{ sub_skill.critical_failure }}</dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <tr :class="index % 2 == 0 ? 'bg-amber-50' : ''" v-if="sub_skill.trigger != null || sub_skill.requirements != null">
                                                <td v-if="sub_skill.trigger != null" :colspan="sub_skill.requirements != null ? 1 : 3" class="border border-gray-300 px-4 py-2">
                                                    <h6 class="font-bold">Trigger</h6>
                                                    <div v-html="sub_skill.trigger"></div>
                                                </td>
                                                <td v-if="sub_skill.requirements != null" :colspan="sub_skill.trigger != null ? 2 : 3" class="border border-gray-300 px-4 py-2">
                                                    <h6 class="font-bold">Requirements</h6>
                                                    <div v-html="sub_skill.requirements"></div>
                                                </td>
                                            </tr>
                                            <tr :class="index % 2 == 0 ? 'bg-amber-50' : ''">
                                                <td colspan="3" class="border border-gray-300 px-4 py-2 border-b-8">
                                                    <div class="description-container" v-html="sub_skill.description"></div>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
