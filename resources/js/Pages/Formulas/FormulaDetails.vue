<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const formula = ref(null);
const error = ref(null);

const fetchArmorDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/formula\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/formula/${id}`);
        formula.value = response.data.data;
    } catch (err) {
        console.error("Error fetching feat details:", err);
        error.value = "Failed to load feat details.";
    }
};

const pageTitle = computed(() => formula.value?.name || "Loading...");

onMounted(fetchArmorDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Formula</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-6">
                <div v-if="error" class="text-red-400">{{ error }}</div>
                <template v-if="formula">

                    <!-- Stats block -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700">
                            <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">{{ formula.name }}</h3>
                        </div>
                        <div class="p-6 grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Type</p>
                                <p class="text-stone-200">{{ formula.type }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Level</p>
                                <p class="text-stone-200">{{ formula.level }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Rarity</p>
                                <p class="text-stone-200">{{ formula.rarity }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Price</p>
                                <p class="text-stone-200">{{ formula.price }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Crafting</p>
                                <p class="text-stone-200 description-container" v-html="formula.crafting"></p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Method</p>
                                <p class="text-stone-200">{{ formula.method }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-1">Activation</p>
                                <p class="text-stone-200">{{ formula.activation }}</p>
                            </div>
                            <div v-if="formula.types && formula.types.length > 0">
                                <p class="text-xs font-medium text-stone-400 uppercase tracking-wide mb-2">Types</p>
                                <div class="flex flex-wrap gap-1.5">
                                    <NavLink
                                        v-for="type in formula.types"
                                        :key="type.id"
                                        :href="`/type/${type.id}`"
                                        class="inline-block px-2 py-0.5 rounded bg-amber-900/40 text-amber-300 text-sm hover:bg-amber-900/60 transition-colors"
                                        style="border-bottom-width: 0 !important;"
                                    >{{ type.name }}</NavLink>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Requirements / components grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div v-if="formula.meta != null" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700">
                                <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Meta</h3>
                            </div>
                            <div class="p-6 text-sm description-container" v-html="formula.meta"></div>
                        </div>

                        <div v-if="Array.isArray(formula.skills) && formula.skills.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700">
                                <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Skills</h3>
                            </div>
                            <div class="p-6 space-y-1">
                                <div v-for="skill in formula.skills" :key="skill.id" class="flex items-center gap-2">
                                    <NavLink :href="`/skill/${skill.id}`" class="text-amber-300 hover:text-amber-200 text-sm" style="border-bottom-width: 0 !important;">{{ skill.name }}</NavLink>
                                    <span class="text-stone-400 text-sm" v-if="skill.dc != null">DC {{ skill.dc }}</span>
                                    <span class="text-stone-500 text-sm" v-if="skill.meta != null">({{ skill.meta }})</span>
                                </div>
                            </div>
                        </div>

                        <div v-if="Array.isArray(formula.feats) && formula.feats.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700">
                                <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Feats</h3>
                            </div>
                            <div class="p-6 space-y-1">
                                <div v-for="feat in formula.feats" :key="feat.id" class="flex items-center gap-2">
                                    <NavLink :href="`/feat/${feat.id}`" class="text-amber-300 hover:text-amber-200 text-sm" style="border-bottom-width: 0 !important;">{{ feat.name }}</NavLink>
                                    <span class="text-stone-500 text-sm" v-if="feat.meta != null">({{ feat.meta }})</span>
                                </div>
                            </div>
                        </div>

                        <div v-if="Array.isArray(formula.spells) && formula.spells.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700">
                                <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Spells</h3>
                            </div>
                            <div class="p-6 space-y-1">
                                <div v-for="spell in formula.spells" :key="spell.id" class="flex items-center gap-2">
                                    <NavLink :href="`/spell/${spell.id}`" class="text-amber-300 hover:text-amber-200 text-sm" style="border-bottom-width: 0 !important;">{{ spell.name }}</NavLink>
                                    <span class="text-stone-500 text-sm" v-if="spell.meta != null">({{ spell.meta }})</span>
                                </div>
                            </div>
                        </div>

                        <div v-if="Array.isArray(formula.materials) && formula.materials.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700">
                                <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Materials</h3>
                            </div>
                            <div class="p-6 space-y-1">
                                <div v-for="material in formula.materials" :key="material.id" class="flex items-center gap-2">
                                    <NavLink :href="`/material/${material.id}`" class="text-amber-300 hover:text-amber-200 text-sm" style="border-bottom-width: 0 !important;">{{ material.name }}</NavLink>
                                    <span class="text-stone-500 text-sm" v-if="material.meta != null">({{ material.meta }})</span>
                                </div>
                            </div>
                        </div>

                        <div v-if="Array.isArray(formula.monsters) && formula.monsters.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700">
                                <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Monsters</h3>
                            </div>
                            <div class="p-6 space-y-1">
                                <div v-for="monster in formula.monsters" :key="monster.id" class="flex items-center gap-2">
                                    <NavLink :href="`/monster/${monster.id}`" class="text-amber-300 hover:text-amber-200 text-sm" style="border-bottom-width: 0 !important;">{{ monster.name }}</NavLink>
                                    <span class="text-stone-500 text-sm" v-if="monster.meta != null">({{ monster.meta }})</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Description -->
                    <div v-if="formula.description" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700">
                            <h3 class="text-base font-semibold text-amber-400 uppercase tracking-wide">Description</h3>
                        </div>
                        <div class="p-6 description-container" v-html="formula.description"></div>
                    </div>

                </template>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
