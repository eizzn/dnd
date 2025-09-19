<script setup>
import { useRoute } from "vue-router";
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import NavLink from "@/components/NavLink.vue";

const route = useRoute();
const spell = ref(null);
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
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Spell</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="spell">
                            <section class="m-2">
                                <h3 class="text-xl">
                                    <span>{{ spell.name }}</span>
                                    <span v-if="spell.rarity" class="text-sm opacity-75">&nbsp;&nbsp;({{ spell.rarity }})</span>
                                </h3>
                                <span v-if="spell.spell_creator" class="text-sm opacity-75">({{ spell.spell_creator }})</span>
                                <table class="w-full border-collapse border border-gray-300">
                                    <colgroup>
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 25%;" />
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Default Level</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Casting</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Range/Area</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Targets</th>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border border-gray-300">{{ spell.default_level }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ spell.casting }}</td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <span>{{ spell.range }}</span>
                                                <br v-if="spell.range && spell.area" />
                                                <span>{{ spell.area }}</span>
                                            </td>
                                            <td class="px-4 py-2 border border-gray-300">{{ spell.targets || '-' }}</td>
                                        </tr>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Duration</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Save</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Types</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">Classes</th>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2 border border-gray-300">{{ spell.duration }}</td>
                                            <td class="px-4 py-2 border border-gray-300">{{ spell.save_attribute || '-' }}</td>
                                            <td class="px-4 py-2 border border-gray-300">
                                                <ul class="list-disc ml-4">
                                                    <li v-for="(type, index) in spell.types" :key="index">
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
                                            <td class="px-4 py-2 border border-gray-300">
                                                <div class="max-h-80 overflow-y-auto">
                                                    <table class="w-full">
                                                        <tbody>
                                                            <tr v-for="(klass, index) in spell.classes" :key="index">
                                                                <td><NavLink :href="`/class/${klass.id}`">{{ klass.name }}</NavLink></td>
                                                                <td>{{ klass.level }}</td>
                                                            </tr>
                                                            <tr><td colspan="2" class="h-2"></td></tr>
                                                            <tr v-for="(feat, index) in spell.feats" :key="index">
                                                                <td><NavLink :href="`/feat/${feat.id}`">{{ feat.name }}</NavLink></td>
                                                                <td>{{ feat.level }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2 pt-2">
                                <h3 class="text-lg font-bold border-b-2">Description</h3>
                                <div v-html="spell.description" class="mb-4 description-container"></div>
                                <div v-if="Array.isArray(spell.materials) && spell.materials.length > 0" class="border-t">
                                    <dl>
                                        <dt>Material Components</dt>
                                        <dd>
                                            <ul>
                                                <li v-for="(material, index) in spell.materials" :key="index">
                                                    <span>{{ material.name }}</span>
                                                    <span v-if="material.quantity">&nbsp;({{ material.quantity }})</span>
                                                    <span v-if="material.meta">&nbsp;{{ material.meta }}</span>
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                                <div v-if="spell.requirements != null || (Array.isArray(spell.skills) && spell.skills.length > 0)" class="border-t-4">
                                    <h4 class="text-md font-bold border-b-2">Requirements</h4>
                                    <div v-html="spell.requirements" class="mb-4"></div>
                                    <ul>
                                        <li v-for="(skill, index) in spell.skills" :key="index">
                                            <NavLink
                                                :href="`/skill/${skill.id}`"
                                                class="text-blue-800 hover:underline p-0"
                                                style="border-bottom-width: 0 !important;"
                                            >
                                                {{ skill.name }}
                                            </NavLink>
                                            <span class="text-sm px-3">DC: {{ skill.dc }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <section class="m-2">
                                <div class="flex w-full gap-3">
                                    <div v-if="spell.saves" class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4 class="text-center font-bold">Saves</h4>
                                        <div v-html="spell.saves" ></div>
                                    </div>
                                    <div v-if="spell.heightened" class="flex-1 border border-gray-300 shadow-md rounded-lg p-4 bg-white">
                                        <h4 class="text-center font-bold">Heightened</h4>
                                        <div v-html="spell.heightened"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div v-else>
                            <p>Loading...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
