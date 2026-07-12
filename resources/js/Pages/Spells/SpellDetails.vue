<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const spell = ref(null);
const availableToOpen = ref(false);
const error = ref(null);

const fetchSpellDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/spell\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/spell/${id}`);
        spell.value = response.data.data;
    } catch (err) {
        console.error("Error fetching spell details:", err);
        error.value = "Failed to load spell details.";
    }
};

const pageTitle = computed(() => spell.value?.name || "Loading...");

onMounted(fetchSpellDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ spell ? spell.name : 'Spell' }}
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div v-if="error" class="text-red-400 p-4">{{ error }}</div>
                <div v-else-if="spell" class="space-y-6">

                    <!-- Stats grid -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600 flex items-baseline gap-3">
                            <h3 class="text-lg font-bold text-amber-400" style="font-family:'Cinzel',serif;">{{ spell.name }}</h3>
                            <span v-if="spell.rarity" class="text-xs text-stone-400 italic">{{ spell.rarity }}</span>
                            <span v-if="spell.spell_creator" class="text-xs text-stone-400 italic">— {{ spell.spell_creator }}</span>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 divide-x divide-y divide-stone-700">
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Default Level</p>
                                <p class="text-amber-300 font-bold text-lg">{{ spell.default_level }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Casting</p>
                                <p class="text-stone-100 font-semibold">{{ spell.casting || '-' }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Range / Area</p>
                                <p class="text-stone-100 font-semibold">
                                    <span>{{ spell.range }}</span>
                                    <span v-if="spell.range && spell.area"> / </span>
                                    <span>{{ spell.area }}</span>
                                    <span v-if="!spell.range && !spell.area">-</span>
                                </p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Targets</p>
                                <p class="text-stone-100 font-semibold">{{ spell.targets || '-' }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Duration</p>
                                <p class="text-stone-100 font-semibold">{{ spell.duration || '-' }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Save</p>
                                <p class="text-stone-100 font-semibold">{{ spell.save_attribute || '-' }}</p>
                            </div>
                            <div class="px-5 py-4 col-span-2">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-2">Types</p>
                                <div class="flex flex-wrap gap-1.5">
                                    <NavLink
                                        v-for="(type, index) in spell.types" :key="index"
                                        :href="`/type/${type.id}`"
                                        class="inline-block px-2.5 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium hover:bg-amber-900/60 transition-colors"
                                        style="border-bottom-width: 1px !important;"
                                    >{{ type.name }}</NavLink>
                                    <span v-if="!spell.types?.length" class="text-stone-500">—</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Classes & Feats -->
                    <div v-if="spell.classes?.length || spell.feats?.length" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <button
                            type="button"
                            class="w-full flex items-center justify-between px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600 hover:bg-amber-900/10 transition-colors"
                            @click="availableToOpen = !availableToOpen"
                        >
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Available To</h3>
                            <svg
                                class="w-4 h-4 text-amber-400 transition-transform duration-200"
                                :class="{ 'rotate-180': availableToOpen }"
                                viewBox="0 0 20 20" fill="currentColor"
                            >
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div v-show="availableToOpen" class="divide-y divide-stone-800">
                            <div
                                v-for="(klass, index) in spell.classes" :key="'class-' + index"
                                class="flex items-center justify-between px-6 py-2.5 hover:bg-amber-900/10 transition-colors"
                            >
                                <NavLink :href="`/class/${klass.id}`" class="text-sm" style="border-bottom-width: 0 !important;">{{ klass.name }}</NavLink>
                                <span class="flex items-center gap-2 shrink-0">
                                    <span class="text-xs font-semibold text-amber-300 bg-amber-900/40 border border-amber-700/40 rounded px-2 py-0.5">Lv {{ klass.level }}</span>
                                    <span class="text-xs text-stone-400 bg-stone-800 border border-stone-600 rounded px-2 py-0.5 italic">class</span>
                                </span>
                            </div>
                            <div
                                v-for="(feat, index) in spell.feats" :key="'feat-' + index"
                                class="flex items-center justify-between px-6 py-2.5 hover:bg-amber-900/10 transition-colors"
                            >
                                <NavLink :href="`/feat/${feat.id}`" class="text-sm" style="border-bottom-width: 0 !important;">{{ feat.name }}</NavLink>
                                <span class="flex items-center gap-2 shrink-0">
                                    <span class="text-xs font-semibold text-amber-300 bg-amber-900/40 border border-amber-700/40 rounded px-2 py-0.5">Lv {{ feat.level }}</span>
                                    <span class="text-xs text-stone-400 bg-stone-800 border border-stone-600 rounded px-2 py-0.5 italic">feat</span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Description</h3>
                        </div>
                        <div class="p-6 description-container" v-html="spell.description"></div>
                    </div>

                    <!-- Material Components -->
                    <div v-if="Array.isArray(spell.materials) && spell.materials.length > 0" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Material Components</h3>
                        </div>
                        <ul class="p-6 space-y-2">
                            <li v-for="(material, index) in spell.materials" :key="index" class="flex items-start gap-2 text-stone-200">
                                <span class="mt-1.5 shrink-0 w-1.5 h-1.5 rounded-full bg-amber-600"></span>
                                <span>
                                    <span class="font-medium">{{ material.name }}</span>
                                    <span v-if="material.quantity" class="text-stone-400"> ({{ material.quantity }})</span>
                                    <span v-if="material.meta" class="text-stone-400"> {{ material.meta }}</span>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <!-- Requirements -->
                    <div v-if="spell.requirements != null || (Array.isArray(spell.skills) && spell.skills.length > 0)" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Requirements</h3>
                        </div>
                        <div class="p-6 space-y-3">
                            <div v-if="spell.requirements" v-html="spell.requirements"></div>
                            <ul class="space-y-2">
                                <li v-for="(skill, index) in spell.skills" :key="index" class="flex items-center gap-3">
                                    <NavLink :href="`/skill/${skill.id}`" style="border-bottom-width: 0 !important;">{{ skill.name }}</NavLink>
                                    <span class="text-xs font-semibold text-amber-300 bg-amber-900/40 border border-amber-700/40 rounded px-2 py-0.5">DC {{ skill.dc }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Saves & Heightened -->
                    <div v-if="spell.saves || spell.heightened" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div v-if="spell.saves" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Saves</h3>
                            </div>
                            <div class="p-6" v-html="spell.saves"></div>
                        </div>
                        <div v-if="spell.heightened" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Heightened</h3>
                            </div>
                            <div class="p-6" v-html="spell.heightened"></div>
                        </div>
                    </div>

                </div>
                <div v-else class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6">
                    <p class="text-stone-400">Loading...</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
