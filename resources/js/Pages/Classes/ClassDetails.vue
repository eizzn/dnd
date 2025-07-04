<script setup>
import { useRouter, useRoute } from "vue-router";
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, watch } from "vue";
import NavLink from "@/components/NavLink.vue";
import ClassTable from "@/components/ClassTable.vue";

const router = useRouter();
const route = useRoute();

const klass = ref(null);
const features = ref([]);

const fetchClassDetails = async () => {
    const match = window.location.pathname.match(/\/class\/(\d+)/);
    const id = match ? parseInt(match[1], 10) : null;

    if (isNaN(id)) {
        console.error("Invalid class ID");
        return;
    }

    klass.value = null;
    features.value = [];

    const response = await axios.get(`/api/class/${id}?timestamp=${Date.now()}`);
    klass.value = response.data.data;

    if (klass.value.features) {
        let uniqueFeatures = new Set();

        Object.values(klass.value.features).forEach((featureArray) => {
            featureArray.forEach((feature) => {
                uniqueFeatures.add(feature.id); // Add feature ID to ensure uniqueness
            });
        });

        features.value = Array.from(uniqueFeatures).map((id) => {
            for (let level in klass.value.features) {
                let feature = klass.value.features[level].find((f) => f.id === id);
                if (feature) return feature;
            }
        });
    }
};

onMounted(async () => {
    await router.isReady();
    fetchClassDetails();
});
</script>

<template>
    <Head title="Classes"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ klass?.name }}
            </h2>
        </template>

        <div class="py-12" v-if="klass">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <section class="m-2">
                            <h3 class="text-lg font-semibold">Description</h3>
                            <div class="text-gray-700 mt-2" v-html="klass.description"></div>
                        </section>
                        <section class="m-2">
                            <div style="display: flex; width: 100%; gap: 12px;">
                                <div class="flex-1 border border-gray-300 rounded-lg shadow-md p-4">
                                    <div v-if="klass.requirements">
                                        <h4 class="text-lg font-semibold">Requirements</h4>
                                        <div class="text-gray-700 mt-2" v-html="klass.requirements"></div>
                                    </div>
                                    <div class="flex items-center space-x-2 m-2">
                                        <h4 class="text-lg font-semibold">Hit Dice:</h4>
                                        <span>{{ klass.hit_dice }}</span>
                                    </div>
                                    <div class="items-center space-x-2 m-2">
                                        <h4 class="text-lg font-semibold">Weapons:</h4>
                                        <div>{{ klass.weapons ?? 'N/A' }}</div>
                                    </div>
                                    <div class="items-center space-x-2 m-2">
                                        <h4 class="text-lg font-semibold">Armors:</h4>
                                        <div>{{ klass.armors ?? 'N/A' }}</div>
                                    </div>
                                </div>
                                <div class="flex-1 border border-gray-300 rounded-lg shadow-md p-4">
                                    <div class="items-center space-x-2 m-2">
                                        <h4 class="text-lg font-semibold">Skills:</h4>
                                        <p><strong>Skill Points</strong> <span>{{ klass.skill_points }}</span></p>
                                        <p><strong>Skill Progression</strong> <span>{{ klass.skill_progress }}</span>
                                        </p>
                                        <ul>
                                            <li v-for="skill in klass.skills" :key="skill.id">
                                                <NavLink :href="`/skill/${skill.id}`">{{ skill.name }}</NavLink>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="m-2">
                            <ClassTable :klass="klass"/>
                        </section>
                        <section class="m-2">
                            <ul>
                                <li v-for="feature in features" :key="feature.id" class="m-2">
                                    <h4 class="text-lg font-semibold">{{ feature.name }}</h4>
                                    <div>
                                        <div v-html="feature.description"></div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
