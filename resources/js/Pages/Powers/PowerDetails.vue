<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const power = ref(null);
const availableToOpen = ref(false);
const error = ref(null);

const fetchPowerDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/power\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/power/${id}`);
        power.value = response.data.data;
    } catch (err) {
        console.error("Error fetching power details:", err);
        error.value = "Failed to load power details.";
    }
};

const pageTitle = computed(() => power.value?.name || "Loading...");

onMounted(fetchPowerDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ power ? power.name : 'Power' }}
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div v-if="error" class="text-red-400 p-4">{{ error }}</div>
                <div v-else-if="power" class="space-y-6">

                    <!-- Stats grid -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-lg font-bold text-amber-400" style="font-family:'Cinzel',serif;">{{ power.name }}</h3>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 divide-x divide-y divide-stone-700">
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Default Level</p>
                                <p class="text-amber-300 font-bold text-lg">{{ power.default_level }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Action</p>
                                <p class="text-stone-100 font-semibold">{{ power.action_type || '-' }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Range / Area</p>
                                <p class="text-stone-100 font-semibold">
                                    <span>{{ power.range }}</span>
                                    <span v-if="power.range && power.area"> / </span>
                                    <span>{{ power.area }}</span>
                                    <span v-if="!power.range && !power.area">-</span>
                                </p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Targets</p>
                                <p class="text-stone-100 font-semibold">{{ power.targets || '-' }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Duration</p>
                                <p class="text-stone-100 font-semibold">{{ power.duration || '-' }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Save</p>
                                <p class="text-stone-100 font-semibold">{{ power.save_attribute || '-' }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-1">Maintenance Cost</p>
                                <p class="text-stone-100 font-semibold">{{ power.maintenance_cost || '-' }}</p>
                            </div>
                            <div class="px-5 py-4">
                                <p class="text-xs font-medium text-stone-500 uppercase tracking-wide mb-2">Types</p>
                                <div class="flex flex-wrap gap-1.5">
                                    <NavLink
                                        v-for="(type, index) in power.types" :key="index"
                                        :href="`/type/${type.id}`"
                                        class="inline-block px-2.5 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium hover:bg-amber-900/60 transition-colors"
                                        style="border-bottom-width: 1px !important;"
                                    >{{ type.name }}</NavLink>
                                    <span v-if="!power.types?.length" class="text-stone-500">—</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prerequisite chain -->
                    <div v-if="power.parents?.length || power.children?.length" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div v-if="power.parents?.length" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Requires</h3>
                            </div>
                            <div class="divide-y divide-stone-800">
                                <div v-for="(parent, index) in power.parents" :key="index" class="px-6 py-2.5 hover:bg-amber-900/10 transition-colors">
                                    <NavLink :href="`/power/${parent.id}`" style="border-bottom-width: 0 !important;">{{ parent.name }}</NavLink>
                                </div>
                            </div>
                        </div>
                        <div v-if="power.children?.length" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Required For</h3>
                            </div>
                            <div class="divide-y divide-stone-800">
                                <div v-for="(child, index) in power.children" :key="index" class="px-6 py-2.5 hover:bg-amber-900/10 transition-colors">
                                    <NavLink :href="`/power/${child.id}`" style="border-bottom-width: 0 !important;">{{ child.name }}</NavLink>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Classes & Feats -->
                    <div v-if="power.classes?.length || power.feats?.length" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
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
                                v-for="(klass, index) in power.classes" :key="'class-' + index"
                                class="flex items-center justify-between px-6 py-2.5 hover:bg-amber-900/10 transition-colors"
                            >
                                <NavLink :href="`/class/${klass.id}`" class="text-sm" style="border-bottom-width: 0 !important;">{{ klass.name }}</NavLink>
                                <span class="ml-2 text-xs font-semibold text-amber-300 bg-amber-900/40 border border-amber-700/40 rounded px-2 py-0.5 shrink-0">Lv {{ klass.level }}</span>
                            </div>
                            <div
                                v-for="(feat, index) in power.feats" :key="'feat-' + index"
                                class="flex items-center justify-between px-6 py-2.5 hover:bg-amber-900/10 transition-colors"
                            >
                                <NavLink :href="`/feat/${feat.id}`" class="text-sm" style="border-bottom-width: 0 !important;">{{ feat.name }}</NavLink>
                                <span class="ml-2 text-xs text-stone-400 bg-stone-800 border border-stone-600 rounded px-2 py-0.5 shrink-0 italic">feat</span>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Description</h3>
                        </div>
                        <div class="p-6 description-container" v-html="power.description"></div>
                    </div>

                    <!-- Requirements -->
                    <div v-if="power.requirements != null" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                            <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Requirements</h3>
                        </div>
                        <div class="p-6 description-container" v-html="power.requirements"></div>
                    </div>

                    <!-- Saves & Heightened -->
                    <div v-if="power.saves || power.heightened" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div v-if="power.saves" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Saves</h3>
                            </div>
                            <div class="p-6" v-html="power.saves"></div>
                        </div>
                        <div v-if="power.heightened" class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="px-6 py-4 border-b border-stone-700 border-l-4 border-l-amber-600">
                                <h3 class="text-sm font-bold text-amber-400 uppercase tracking-widest" style="font-family:'Cinzel',serif;">Heightened</h3>
                            </div>
                            <div class="p-6" v-html="power.heightened"></div>
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
