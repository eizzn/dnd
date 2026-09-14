<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const feat = ref(null);
const error = ref(null);

const fetchFeatDetails = async () => {
    try {
        const match = window.location.pathname.match(/\/feat\/(\d+)/);
        const id = match ? parseInt(match[1], 10) : null;

        if (isNaN(id)) {
            console.error("Invalid ID");
            return;
        }

        const response = await axios.get(`/api/feat/${id}`);
        feat.value = response.data.data;
    } catch (err) {
        console.error("Error fetching feat details:", err);
        error.value = "Failed to load feat details.";
    }
};

const pageTitle = computed(() => feat.value?.name || "Loading...");

onMounted(fetchFeatDetails);
</script>

<template>
    <Head :title="pageTitle" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Feat</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="feat">
                            <section class="m-2">
                                <h2 class="text-xl">{{ feat?.name }}</h2>
                                <table class="w-full border-collapse border border-gray-300">
                                    <colgroup>
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Requirements</th>
                                            <th class="px-4 py-2 border border-gray-300">Trigger</th>
                                            <th class="px-4 py-2 border border-gray-300">Skills</th>
                                            <th class="px-4 py-2 border border-gray-300">Types</th>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border border-gray-300">
                                                {{ feat.requirements }}
                                                <div v-if="feat.action_type">
                                                    <dl>
                                                        <dt class="text-sm font-medium text-gray-500">Action Type:</dt>
                                                        <dd>{{ feat.action_type }}</dd>
                                                    </dl>
                                                </div>
                                                <div v-if="feat.attributes">
                                                    <dl v-for="(attribute, index) in feat.attributes" :key="index">
                                                        <dt class="text-sm font-medium text-gray-500">{{ attribute.attr }}:</dt>
                                                        <dd>{{ attribute.dc }}</dd>
                                                    </dl>
                                                </div>
                                                <div v-if="feat.features">
                                                    <h4 class="text-sm font-semibold">Features:</h4>
                                                    <ul>
                                                        <li v-for="(feature, index) in feat.features" :key="index">
                                                            <NavLink :href="`/feature/${feature.id}`" class="text-blue-500 hover:underline">
                                                                {{ feature.name }}
                                                            </NavLink>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="px-4 py-2 border border-gray-300">{{ feat.trigger }}</td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <ul class="space-y-1.5">
                                                    <li v-for="(skill, index) in feat.skills" :key="index" class="flex items-center gap-2">
                                                        <NavLink
                                                            :href="`/skill/${skill.id}`"
                                                            style="border-bottom-width: 0 !important;"
                                                        >
                                                            {{ skill.name }}
                                                            <span v-if="skill.dc" class="ml-1 text-stone-400">({{ skill.dc }})</span>
                                                        </NavLink>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <div class="flex flex-wrap gap-1.5">
                                                    <NavLink
                                                        v-for="(type, index) in feat.types" :key="index"
                                                        :href="`/type/${type.id}`"
                                                        class="inline-block px-2.5 py-0.5 rounded-full border border-amber-700/50 bg-amber-900/30 text-amber-300 text-xs font-medium hover:bg-amber-900/60 transition-colors"
                                                        style="border-bottom-width: 1px !important;"
                                                    >{{ type.name }}<span v-if="type.level" class="ml-1 text-stone-400">({{ type.level }})</span></NavLink>
                                                    <span v-if="!feat.types?.length" class="text-stone-500">—</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300">Requires</th>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <ul>
                                                    <li v-for="(parent, index) in feat.parents" :key="index">
                                                        <NavLink :href="`/feat/${parent.id}`">{{ parent.name }}</NavLink>
                                                    </li>
                                                </ul>
                                            </td>
                                            <th class="px-4 py-2 border border-gray-300">Required For</th>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <ul>
                                                    <li v-for="(child, index) in feat.children" :key="index">
                                                        <NavLink :href="`/feat/${child.id}`">{{ child.name }}</NavLink>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2 description-container">
                                <div v-html="feat.description"></div>
                            </section>
                            <section v-if="feat.spells && Object.keys(feat.spells).length > 0" class="m-3">
                                <h4 class="text-lg font-semibold">Spells:</h4>
                                <table class="w-full border-collapse border border-gray-300">
                                    <thead>
                                        <tr>
                                            <th>Level</th>
                                            <th>Spells</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(spells, level) in feat.spells">
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
                            <section v-if="feat.powers && Object.keys(feat.powers).length > 0" class="m-3">
                                <h4 class="text-lg font-semibold">Powers:</h4>
                                <table class="w-full border-collapse border border-gray-300">
                                    <thead>
                                        <tr>
                                            <th>Level</th>
                                            <th>Powers</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(powers, level) in feat.powers">
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
        </div>
    </AuthenticatedLayout>
</template>
