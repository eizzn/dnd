<script setup>
import { useRouter, useRoute } from "vue-router";
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import {ref, onMounted, computed} from "vue";
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

const pageTitle = computed(() => klass.value?.name || "Loading...");
onMounted(async () => {
    await router.isReady();
    fetchClassDetails();
});
</script>

<template>
    <Head :title="pageTitle"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 flex items-baseline gap-3">
                {{ klass ? klass.name : 'Class' }}
                <span v-if="klass?.key_attribute" class="text-sm font-normal text-stone-400">{{ klass.key_attribute }}</span>
            </h2>
        </template>

        <div class="py-12" v-if="klass">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-6">

                <!-- Info cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Combat -->
                    <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                        <div class="px-6 py-4 border-b border-stone-700">
                            <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Combat</h3>
                        </div>
                        <div class="p-6 space-y-4">
                            <div v-if="klass.requirements" class="pb-4 border-b border-stone-700">
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Requirements</p>
                                <div v-html="klass.requirements"></div>
                            </div>
                            <div class="flex gap-8">
                                <div>
                                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Hit Dice</p>
                                    <p class="text-lg font-semibold text-stone-100">{{ klass.hit_dice }}</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Weapons</p>
                                <p class="text-stone-200">{{ klass.weapons ?? 'N/A' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Armor</p>
                                <p class="text-stone-200">{{ klass.armors ?? 'N/A' }}</p>
                            </div>
                            <div v-if="klass.saves?.length">
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Good Saves</p>
                                <p class="text-stone-200">{{ klass.saves.map(s => s.attr).join(', ') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Skills -->
                    <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                        <div class="px-6 py-4 border-b border-stone-700">
                            <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Skills</h3>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex gap-8">
                                <div>
                                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Skill Points</p>
                                    <p class="text-lg font-semibold text-stone-100">{{ klass.skill_points }}</p>
                                </div>
                                <div>
                                    <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Progression</p>
                                    <p class="text-lg font-semibold text-stone-100">{{ klass.skill_progress }}</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-2">Class Skills</p>
                                <div class="flex flex-wrap gap-1.5">
                                    <NavLink
                                        v-for="skill in klass.skills"
                                        :key="skill.id"
                                        :href="`/skill/${skill.id}`"
                                        class="inline-block px-2 py-0.5 rounded bg-amber-900/40 text-amber-300 text-sm hover:bg-amber-900/60 transition-colors"
                                        style="border-bottom-width: 0 !important;"
                                    >{{ skill.name }}</NavLink>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div v-if="klass.description" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="px-6 py-4 border-b border-stone-700">
                        <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Description</h3>
                    </div>
                    <div class="p-6 prose max-w-none" v-html="klass.description"></div>
                </div>

                <!-- Progression table -->
                <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-stone-700">
                        <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Progression</h3>
                    </div>
                    <div class="p-6 overflow-x-auto">
                        <ClassTable :klass="klass"/>
                    </div>
                </div>

                <!-- Features -->
                <div v-if="features.length > 0" class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-stone-700">
                        <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Features</h3>
                    </div>
                    <div id="features-section" class="divide-y divide-stone-700">
                        <div v-for="feature in features" :key="feature.id" class="px-6 py-5">
                            <div class="prose max-w-none">
                                <span class="font-semibold text-amber-300">{{ feature.name }}.</span>
                                <span class="[&>p]:inline [&>p]:m-0" v-html="' ' + feature.description"></span>
                            </div>
                            <div v-if="feature.meta" class="feature-meta prose prose-sm prose-stone max-w-none mt-1 text-stone-400" v-html="feature.meta"></div>
                        </div>
                    </div>
                </div>

                <!-- Class Group Feats -->
                <div v-if="klass.feats.length > 0" class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-stone-700">
                        <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Class Group Feats</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-1">
                            <div v-for="feat in klass.feats" :key="feat.id" class="flex items-center justify-between py-1.5 border-b border-stone-700">
                                <NavLink :href="`/feat/${feat.id}`" class="text-sm" style="border-bottom-width: 0 !important;">{{ feat.name }}</NavLink>
                                <span class="ml-2 text-xs font-medium text-amber-300 bg-amber-900/40 rounded px-1.5 py-0.5 shrink-0">Lv {{ feat.level }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Spells -->
                <div v-if="klass.spells && Object.keys(klass.spells).length > 0" class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-stone-700">
                        <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Spells</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 border-b border-stone-700 text-left text-xs font-semibold text-amber-400 uppercase tracking-wide w-24">Level</th>
                                    <th class="px-4 py-3 border-b border-stone-700 text-left text-xs font-semibold text-amber-400 uppercase tracking-wide">Spells</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(spells, level) in klass.spells" :key="level" class="border-b border-stone-700 hover:bg-amber-900/10 transition-colors">
                                    <td class="px-4 py-2.5 font-medium text-stone-300 align-top">{{ level }}</td>
                                    <td class="px-4 py-2.5">
                                        <div class="flex flex-wrap gap-1.5">
                                            <div v-for="spell in spells" :key="spell.id" class="flex flex-col">
                                                <NavLink :href="`/spell/${spell.id}`" class="inline-block px-2.5 py-0.5 rounded-full border border-stone-600 bg-stone-800 text-stone-200 text-xs hover:border-amber-700/50 hover:bg-amber-900/30 hover:text-amber-300 transition-colors" style="border-bottom-width: 1px !important;">{{ spell.name }}</NavLink>
                                                <span v-if="spell.meta" class="text-xs text-stone-400 px-2.5 mt-0.5">{{ spell.meta }}</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Powers -->
                <div v-if="klass.powers && Object.keys(klass.powers).length > 0" class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-stone-700">
                        <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Powers</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 border-b border-stone-700 text-left text-xs font-semibold text-amber-400 uppercase tracking-wide w-24">Level</th>
                                    <th class="px-4 py-3 border-b border-stone-700 text-left text-xs font-semibold text-amber-400 uppercase tracking-wide">Powers</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(powers, level) in klass.powers" :key="level" class="border-b border-stone-700 hover:bg-amber-900/10 transition-colors">
                                    <td class="px-4 py-2.5 font-medium text-stone-300 align-top">{{ level }}</td>
                                    <td class="px-4 py-2.5">
                                        <div class="flex flex-wrap gap-1.5">
                                            <div v-for="power in powers" :key="power.id" class="flex flex-col">
                                                <NavLink :href="`/power/${power.id}`" class="inline-block px-2.5 py-0.5 rounded-full border border-stone-600 bg-stone-800 text-stone-200 text-xs hover:border-amber-700/50 hover:bg-amber-900/30 hover:text-amber-300 transition-colors" style="border-bottom-width: 1px !important;">{{ power.name }}</NavLink>
                                                <span v-if="power.meta" class="text-xs text-stone-400 px-2.5 mt-0.5">{{ power.meta }}</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
    #features-section ul {
        list-style-type: disc;
        margin: 0.5em 1.5rem;
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
        border: 1px solid #44403c;
        padding: 8px;
    }
    #features-section th {
        background-color: #3c2f1e;
        color: #fbbf24;
        font-weight: 600;
        text-align: center;
        font-family: 'Cinzel', serif;
    }
    #features-section td {
        background-color: #1c1917;
        color: #e7e5e4;
    }
    #features-section tr:nth-child(even) td {
        background-color: rgba(255, 255, 255, 0.03);
    }
    .feature-meta dl {
        padding-left: 1.25rem !important;
        font-size: 0.875em;
        width: auto !important;
    }
</style>
