<script setup>
import { useRouter, useRoute } from "vue-router";
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted } from "vue";
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

    const response = await axios.get(`/api/class/${id}`);
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
    <Head title={{ klass?.name }}/>

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
                                    <div id="class-requirements" class="border-b" v-if="klass.requirements">
                                        <h4 class="text-lg font-semibold">Requirements</h4>
                                        <div class="text-gray-700 mt-2" v-html="klass.requirements"></div>
                                    </div>
                                    <div class="flex items-center mt-2 mb-2">
                                        <h4 class="text-lg font-semibold">Hit Dice:</h4>
                                        <span>{{ klass.hit_dice }}</span>
                                    </div>
                                    <div class="mt-2 mb-2 border-y">
                                        <div style="display: inline-flex; align-items: center;">
                                            <h4 class="text-lg font-semibold">Weapons:</h4>
                                            <span class="ml-3">{{ klass.weapons ?? 'N/A' }}</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-2">
                                        <div style="display: inline-flex; align-items: center;">
                                            <h4 class="text-lg font-semibold">Armors:</h4>
                                            <span class="ml-3">{{ klass.armors ?? 'N/A' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 border border-gray-300 rounded-lg shadow-md p-4">
                                    <div class="items-center space-x-2 m-2">
                                        <h4 class="text-lg font-semibold">Skills:</h4>
                                        <p><strong>Skill Points</strong> <span>{{ klass.skill_points }}</span></p>
                                        <p><strong>Skill Progression</strong> <span>{{ klass.skill_progress }}</span></p>
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
                        <section id="features-section" class="m-2">
                            <ul class="list-disc ml-4">
                                <li v-for="feature in features" :key="feature.id" class="m-2">
                                    <h4 class="text-lg font-semibold">{{ feature.name }}</h4>
                                    <div>
                                        <div v-html="feature.description"></div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <section v-if="klass.feats.length > 0">
                            <h4 class="text-lg font-semibold">Class Group Feats:</h4>
                            <div class="grid grid-cols-3 gap-4">
                                <ul>
                                    <li v-for="feat in klass.feats.slice(0, Math.ceil(klass.feats.length / 3))" :key="feat.id" class="text-left">
                                        <div class="flex">
                                            <span class="w-4/5"><NavLink :href="`/feat/${feat.id}`">{{ feat.name }}</NavLink></span>
                                            <span class="w-1/5 text-center">{{ feat.level }}</span>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li v-for="feat in klass.feats.slice(Math.ceil(klass.feats.length / 3), Math.ceil(2 * klass.feats.length / 3))" :key="feat.id" class="text-left">
                                        <div class="flex">
                                            <span class="w-4/5"><NavLink :href="`/feat/${feat.id}`">{{ feat.name }}</NavLink></span>
                                            <span class="w-1/5 text-center">{{ feat.level }}</span>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li v-for="feat in klass.feats.slice(Math.ceil(2 * klass.feats.length / 3))" :key="feat.id" class="text-left">
                                        <div class="flex">
                                            <span class="w-4/5"><NavLink :href="`/feat/${feat.id}`">{{ feat.name }}</NavLink></span>
                                            <span class="w-1/5 text-center">{{ feat.level }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section v-if="klass.spells && Object.keys(klass.spells).length > 0" class="m-3">
                            <h4 class="text-lg font-semibold">Spells:</h4>
                            <table class="w-full border-collapse border border-gray-300">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>Spells</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(spells, level) in klass.spells">
                                        <th class="px-4 py-2 border border-gray-300 text-left">{{ level }}</th>
                                        <td class="px-4 py-2 border border-gray-300 left">
                                            <div v-for="(spell, index) in spells" :key="spell.id" class="inline-block m-0.5">
                                                <NavLink :href="`/spell/${spell.id}`" class="text-blue-500 hover:underline">{{ spell.name }}</NavLink><span v-if="index < spells.length - 1">, </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <section v-if="klass.powers && Object.keys(klass.powers).length > 0" class="m-3">
                            <h4 class="text-lg font-semibold">Powers:</h4>
                            <table class="w-full border-collapse border border-gray-300">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>Powers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(powers, level) in klass.powers">
                                        <th class="px-4 py-2 border border-gray-300 text-left">{{ level }}</th>
                                        <td class="px-4 py-2 border border-gray-300 left">
                                            <div v-for="(power, index) in powers" :key="power.id" class="inline-block m-0.5">
                                                <NavLink :href="`/power/${power.id}`" class="text-blue-500 hover:underline">{{ power.name }}</NavLink><span v-if="index < power.length - 1">, </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
    #features-section ul {
        list-style-type: disc;
        margin: 1em 1.5rem;
    }
    #features-section table {
        width: 100%;
        border-collapse: collapse;
        margin: 1em 0;
        font-size: 1rem;
        text-align: left;
    }

    #features-section th,
    #features-section td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #features-section th {
        background-color: #f4f4f4;
        font-weight: bold;
        text-align: center;
    }

    #features-section tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #features-section tr:hover {
        background-color: #f1f1f1;
    }
</style>
