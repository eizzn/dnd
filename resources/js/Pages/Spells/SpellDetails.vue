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
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>{{ spell?.name || "Spell Details" }}</span>
                <span v-if="spell?.rarity" class="text-sm opacity-75">&nbsp;&nbsp;({{ spell?.rarity }})</span>
            </h2>
            <span v-if="spell?.spell_creator" class="text-sm opacity-75">({{ spell?.spell_creator }})</span>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="spell">
                            <section class="m-2">
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
                                                        {{ type.name }}
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
                            <section class="m-2">
                                <h3 class="text-lg font-bold">Description</h3>
                                <div v-html="spell.description" class="mb-4"></div>
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
                                <div v-if="spell.requirements != null" class="border-t">
                                    <h4 class="text-md font-bold">Requirements</h4>
                                    <div v-html="spell.requirements" class="mb-4"></div>
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
