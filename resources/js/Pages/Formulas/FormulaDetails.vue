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
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="formula">
                            <section class="m-2">
                                <h2 class="text-xl">{{ formula.name }}</h2>
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
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Level</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Rarity</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Price</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <span class="text-gray-500 font-medium text-sm">{{ formula.type }}</span>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <span class="text-gray-500 font-medium text-sm">{{ formula.level }}</span>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <span class="text-gray-500 font-medium text-sm">{{ formula.rarity }}</span>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <span class="text-gray-500 font-medium text-sm">{{ formula.price }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Types</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Crafting</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Method</th>
                                            <th class="border border-gray-300 px-4 py-2 text-left bg-blue-300">Activation</th>
                                        </tr>
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <ul>
                                                    <li v-for="type in formula.types" :key="type">
                                                        <NavLink
                                                            :href="`/type/${type.id}`"
                                                            class="text-blue-800 hover:underline p-0"
                                                            style="border-bottom-width: 0 !important;"
                                                        >
                                                            {{ type.name }}
                                                        </NavLink>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <div class="text-gray-500 font-medium text-sm">{{ formula.crafting }}</div>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <div class="text-gray-500 font-medium text-sm">{{ formula.method }}</div>
                                            </td>
                                            <td class="border border-gray-300 px-4 py-2">
                                                <div class="text-gray-500 font-medium text-sm">{{ formula.activation }}</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="mx-2 my-4 grid grid-cols-2 gap-2 border-t-4">
                                <div class="border rounded p-2" v-if="formula.meta != null">
                                    <h4>Meta</h4>
                                    <dl class="text-sm" v-html="formula.meta"></dl>
                                </div>
                                <div class="border rounded p-2" v-if="Array.isArray(formula.skills) && formula.skills.length > 0">
                                    <h4>Skills</h4>
                                    <ul>
                                        <li v-for="skill in formula.skills" :key="skill.id">
                                            <NavLink
                                                :href="`/skill/${skill.id}`"
                                                class="text-blue-800 hover:underline p-0"
                                                style="border-bottom-width: 0 !important;"
                                            >
                                                {{ skill.name }}
                                            </NavLink>
                                            <span class="text-gray-500 font-medium text-sm" v-if="skill.dc != null">DC: {{ skill.dc }}</span>
                                            <span class="text-gray-500 font-medium text-sm px-2" v-if="skill.meta != null">({{ skill.meta }})</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="border rounded p-2" v-if="Array.isArray(formula.spells) && formula.spells.length > 0">
                                    <h4>Spells</h4>
                                    <ul>
                                        <li v-for="spell in formula.spells" :key="spell.id">
                                            <NavLink
                                                :href="`/spell/${spell.id}`"
                                                class="text-blue-800 hover:underline p-0"
                                                style="border-bottom-width: 0 !important;"
                                            >
                                                {{ spell.name }}
                                            </NavLink>
                                            <span class="text-gray-500 font-medium text-sm" v-if="spell.meta != null">({{ spell.meta }})</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="border rounded p-2" v-if="Array.isArray(formula.feats) && formula.feats.length > 0">
                                    <h4>Feats</h4>
                                    <ul>
                                        <li v-for="feat in formula.feats" :key="feat.id">
                                            <NavLink
                                                :href="`/feat/${feat.id}`"
                                                class="text-blue-800 hover:underline p-0"
                                                style="border-bottom-width: 0 !important;"
                                            >
                                                {{ feat.name }}
                                            </NavLink>
                                            <span class="text-gray-500 font-medium text-sm" v-if="feat.meta != null">({{ feat.meta }})</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="border rounded p-2" v-if="Array.isArray(formula.materials) && formula.materials.length > 0">
                                    <h4>Materials</h4>
                                    <ul>
                                        <li v-for="material in formula.materials" :key="material.id">
                                            <NavLink
                                                :href="`/material/${material.id}`"
                                                class="text-blue-800 hover:underline p-0"
                                                style="border-bottom-width: 0 !important;"
                                            >
                                                {{ material.name }}
                                            </NavLink>
                                            <span class="text-gray-500 font-medium text-sm" v-if="material.meta != null">({{ material.meta }})</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="border rounded p-2" v-if="Array.isArray(formula.monsters) && formula.monsters.length > 0">
                                    <h4>Monsters</h4>
                                    <ul>
                                        <li v-for="monster in formula.monsters" :key="monster.id">
                                            <NavLink
                                                :href="`/monster/${monster.id}`"
                                                class="text-blue-800 hover:underline p-0"
                                                style="border-bottom-width: 0 !important;"
                                            >
                                                {{ monster.name }}
                                            </NavLink>
                                            <span class="text-gray-500 font-medium text-sm" v-if="monster.meta != null">({{ monster.meta }})</span>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <section class="mx-2 my-4 border-t-4 description-container">
                                <div v-html="formula.description"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
