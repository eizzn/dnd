<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";
import ClassTable from "@/components/ClassTable.vue";

const route = useRoute();
const monster = ref(null);
const error = ref(null);
const hasWeaponFinesse = ref(false);

const fetchMonsterDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/monster\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/monster/${id}`);
        monster.value = response.data.data;
        hasWeaponFinesse.value = monster.value.feats.some(feat => feat.name.toLowerCase().includes("weapon finesse"));
    } catch (err) {
        console.error("Error fetching monster details:", err);
        error.value = "Failed to load monster details.";
    }
};

const pageTitle = computed(() => monster.value?.name || "Loading...");

onMounted(fetchMonsterDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    {{ monster ? monster.name : 'Monster' }}
                </h2>
                <p v-if="monster" class="text-sm text-gray-500 mt-0.5 italic">
                    {{ monster.size }} {{ monster.type }}<span v-if="monster.alignment">, {{ monster.alignment }}</span>
                </p>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div v-if="error" class="text-red-400 p-4">{{ error }}</div>
                <div v-else-if="monster" class="space-y-6">

                    <!-- Identity -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Stats</h3>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 divide-x divide-stone-700">
                            <div class="px-5 py-4 border-b border-stone-700">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Armor Class</p>
                                <p class="text-stone-100 font-semibold">
                                    {{ monster.armor_class }}
                                    <span class="text-stone-400 text-sm ml-1">({{ 10 + Math.floor((monster.dex - 10) / 2) }})</span>
                                </p>
                            </div>
                            <div class="px-5 py-4 border-b border-stone-700">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Hit Points</p>
                                <p class="text-stone-100 font-semibold">{{ monster.hit_points }}</p>
                            </div>
                            <div class="px-5 py-4 border-b border-stone-700">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Speed</p>
                                <p class="text-stone-100 font-semibold">{{ monster.speed || '—' }}</p>
                            </div>
                            <div class="px-5 py-4 border-b border-stone-700">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Challenge Rating</p>
                                <p class="text-stone-100 font-semibold">{{ parseFloat(monster.cr) }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Damage Reduction</p>
                                <p class="text-stone-100 font-semibold">{{ monster.damage_reduction || '—' }}</p>
                            </div>
                            <div class="px-5 py-4" v-if="Array.isArray(monster.skills) && monster.skills.length > 0">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-2">Skills</p>
                                <div class="space-y-0.5">
                                    <div v-for="(skill, index) in monster.skills" :key="index" class="flex items-center gap-2">
                                        <NavLink :href="`/skill/${skill.id}`" class="text-sm" style="border-bottom-width: 0 !important;">{{ skill.name }}</NavLink>
                                        <span class="text-xs font-semibold text-amber-300 bg-amber-900/40 border border-amber-700/40 rounded px-1.5 py-0.5">+{{ skill.dc }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 py-4" v-if="Array.isArray(monster.languages) && monster.languages.length > 0">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-2">Languages</p>
                                <div class="flex flex-wrap gap-1.5">
                                    <span v-for="(lang, index) in monster.languages" :key="index" class="text-sm text-stone-200">
                                        <NavLink :href="`/language/${lang.id}`" style="border-bottom-width: 0 !important;">{{ lang.name }}</NavLink>
                                        <span v-if="lang.meta" class="text-stone-400"> ({{ lang.meta }})</span>
                                        <span v-if="index < monster.languages.length - 1" class="text-stone-600">, </span>
                                    </span>
                                </div>
                            </div>
                            <div class="px-5 py-4" v-if="Array.isArray(monster.types) && monster.types.length > 0">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-2">Types</p>
                                <div class="flex flex-wrap gap-1.5">
                                    <span v-for="(type, index) in monster.types" :key="index" class="inline-block px-2.5 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium">{{ type.name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ability Scores -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="border-b border-stone-700 border-l-4 border-l-amber-600 flex items-stretch divide-x divide-stone-700">
                            <div class="px-5 py-3 flex items-center shrink-0">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Ability Scores</h3>
                            </div>
                            <div v-for="(stat, label) in { STR: monster.str, DEX: monster.dex, CON: monster.con, INT: monster.int, WIS: monster.wis, CHA: monster.cha }" :key="label" class="flex-1 py-3 text-center">
                                <p class="text-xs font-bold text-stone-500 uppercase tracking-wide leading-none mb-0.5">{{ label }}</p>
                                <p class="text-sm font-bold text-stone-100 leading-none">{{ stat }} <span class="text-xs text-stone-400 font-normal">({{ stat >= 10 ? '+' : '' }}{{ Math.floor((stat - 10) / 2) }})</span></p>
                            </div>
                            <div class="flex-1 py-3 text-center">
                                <p class="text-xs font-bold text-stone-500 uppercase tracking-wide leading-none mb-0.5">Melee</p>
                                <p class="text-sm font-bold text-stone-100 leading-none">
                                    {{ (isNaN(monster.str) || monster.str === null) ? monster.proficiency : (monster.proficiency + Math.floor((monster.str - 10) / 2)) > 0 ? '+' + (monster.proficiency + Math.floor((monster.str - 10) / 2)) : (monster.proficiency + Math.floor((monster.str - 10) / 2)) }}
                                    <span v-if="hasWeaponFinesse" class="text-stone-400 font-normal text-xs ml-1">/ {{ (isNaN(monster.dex) || monster.dex === null) ? monster.proficiency : (monster.proficiency + Math.floor((monster.dex - 10) / 2)) > 0 ? '+' + (monster.proficiency + Math.floor((monster.dex - 10) / 2)) : (monster.proficiency + Math.floor((monster.dex - 10) / 2)) }} WF</span>
                                </p>
                            </div>
                            <div class="flex-1 py-3 text-center">
                                <p class="text-xs font-bold text-stone-500 uppercase tracking-wide leading-none mb-0.5">Ranged</p>
                                <p class="text-sm font-bold text-stone-100 leading-none">{{ (isNaN(monster.dex) || monster.dex === null) ? monster.proficiency : (monster.proficiency + Math.floor((monster.dex - 10) / 2)) > 0 ? '+' + (monster.proficiency + Math.floor((monster.dex - 10) / 2)) : (monster.proficiency + Math.floor((monster.dex - 10) / 2)) }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div v-if="monster.actions" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Actions</h3>
                        </div>
                        <div class="p-6 description-container" v-html="monster.actions"></div>
                    </div>

                    <!-- Features -->
                    <div v-if="Array.isArray(monster.features) && monster.features.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Features</h3>
                        </div>
                        <div class="divide-y divide-stone-700">
                            <div v-for="(feature, index) in monster.features" :key="index" class="px-6 py-4">
                                <p class="font-semibold text-amber-300 mb-1">{{ feature.name }}<span v-if="feature.meta" class="text-stone-400 font-normal text-sm"> ({{ feature.meta }})</span></p>
                                <div class="text-sm description-container" v-html="feature.description"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Feats & Talents -->
                    <div v-if="(Array.isArray(monster.feats) && monster.feats.length > 0) || (Array.isArray(monster.talents) && monster.talents.length > 0)" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div v-if="Array.isArray(monster.feats) && monster.feats.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Feats</h3>
                            </div>
                            <div class="divide-y divide-stone-700">
                                <div v-for="(feat, index) in monster.feats" :key="index" class="px-6 py-4">
                                    <p class="font-semibold text-amber-300 mb-1">{{ feat.name }}</p>
                                    <div class="text-sm description-container" v-html="feat.description"></div>
                                </div>
                            </div>
                        </div>
                        <div v-if="Array.isArray(monster.talents) && monster.talents.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Talents</h3>
                            </div>
                            <div class="divide-y divide-stone-700">
                                <div v-for="(talent, index) in monster.talents" :key="index" class="px-6 py-4">
                                    <p class="font-semibold text-amber-300 mb-1">{{ talent.name }}</p>
                                    <div class="text-sm description-container" v-html="talent.description"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Classes -->
                    <div v-if="Array.isArray(monster.classes) && monster.classes.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Classes</h3>
                        </div>
                        <div class="divide-y divide-stone-700">
                            <div v-for="(klass, index) in monster.classes" :key="index" class="px-6 py-4">
                                <div class="flex items-center gap-3 mb-3">
                                    <NavLink :href="`/class/${klass.id}`" class="font-semibold" style="border-bottom-width: 0 !important;">{{ klass.name }}</NavLink>
                                    <span v-if="klass.level != null" class="text-xs font-semibold text-amber-300 bg-amber-900/40 border border-amber-700/40 rounded px-2 py-0.5">Lv {{ klass.level }}</span>
                                    <span v-if="klass.meta != null" class="text-stone-400 text-sm">({{ klass.meta }})</span>
                                </div>
                                <div class="overflow-x-auto">
                                    <ClassTable :klass="klass"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Spells -->
                    <div v-if="monster.spells && Object.keys(monster.spells).length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Spells</h3>
                        </div>
                        <div class="p-6 flex flex-wrap gap-1.5">
                            <NavLink v-for="(spell, index) in monster.spells" :key="index" :href="`/spell/${spell.id}`" class="inline-block px-2.5 py-0.5 rounded-full border border-stone-600 bg-stone-800 text-stone-200 text-xs hover:border-amber-700/50 hover:bg-amber-900/30 hover:text-amber-300 transition-colors" style="border-bottom-width: 1px !important;">
                                {{ spell.name }}<span v-if="spell.meta" class="ml-1 text-stone-400">({{ spell.meta }})</span>
                            </NavLink>
                        </div>
                    </div>

                    <!-- Powers -->
                    <div v-if="monster.powers && Object.keys(monster.powers).length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Powers</h3>
                        </div>
                        <div class="p-6 flex flex-wrap gap-1.5">
                            <NavLink v-for="(power, index) in monster.powers" :key="index" :href="`/power/${power.id}`" class="inline-block px-2.5 py-0.5 rounded-full border border-stone-600 bg-stone-800 text-stone-200 text-xs hover:border-amber-700/50 hover:bg-amber-900/30 hover:text-amber-300 transition-colors" style="border-bottom-width: 1px !important;">
                                {{ power.name }}<span v-if="power.meta" class="ml-1 text-stone-400">({{ power.meta }})</span>
                            </NavLink>
                        </div>
                    </div>

                    <!-- Description -->
                    <div v-if="monster.description" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Description</h3>
                        </div>
                        <div class="p-6 description-container" v-html="monster.description"></div>
                    </div>

                </div>
                <div v-else class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6">
                    <p class="text-stone-400">Loading...</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
