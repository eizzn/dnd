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
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <span>Monster</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div v-if="error" class="text-red-500">{{ error }}</div>
                        <div v-else-if="monster">
                            <section class="m-2 text-xl">
                                {{ monster.name }}<br/>
                                {{ monster.size }} {{ monster.type }}, {{ monster.alignment }}
                            </section>
                            <section class="m-2 pt-2 border-t-4">
                                <table class="w-full">
                                    <colgroup>
                                        <col style="width: 15%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 15%;" />
                                        <col style="width: 25%;" />
                                        <col style="width: 20%;" />
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th class="text-left px-2 border-b border-gray-300">Armor Class</th>
                                            <td class="text-left px-2 border-b border-gray-300" :colspan="Array.isArray(monster.languages) && monster.languages.length > 0 ? 1 : 3">
                                                <span class="text-gray-500 font-medium text-sm">{{ monster.armor_class }}</span>
                                                <span class="text-gray-500 font-medium text-sm px-4">({{ 10 + Math.floor((monster.dex - 10) / 2) }})</span>
                                            </td>
                                            <th class="text-left px-2 border-b border-gray-300" v-if="Array.isArray(monster.languages) && monster.languages.length > 0">Languages</th>
                                            <td class="text-left px-2 border-b border-gray-300" v-if="Array.isArray(monster.languages) && monster.languages.length > 0">
                                                <span v-for="(lang, index) in monster.languages" :key="index" class="inline-block mr-2">
                                                    <NavLink
                                                        :href="`/language/${lang.id}`"
                                                        class="text-blue-800 hover:underline p-0"
                                                        style="border-bottom-width: 0 !important;"
                                                    >
                                                        {{ lang.name }}
                                                    </NavLink>
                                                    <span class="text-gray-500 font-medium text-sm" v-if="lang.meta != null">({{ lang.meta }})</span>
                                                    <span v-if="index < monster.languages.length - 1">, </span>
                                                </span>
                                            </td>
                                            <th class="text-left px-2 border-b border-gray-300">Types</th>
                                        </tr>
                                        <tr>
                                            <th class="text-left px-2 border-b border-gray-300">Damage Reduction</th>
                                            <td class="text-left px-2 border-b border-gray-300">
                                                <span class="text-gray-500 font-medium text-sm">{{ monster.damage_reduction }}</span>
                                            </td>
                                            <th class="text-left px-2 border-b border-gray-300">Challenge Rating</th>
                                            <td class="text-left px-2 border-b border-gray-300">
                                                <span class="text-gray-500 font-medium text-sm">{{ parseFloat(monster.cr) }}</span>
                                            </td>
                                            <td class="text-left px-2 border-l border-gray-300" rowspan="3">
                                                <ul>
                                                    <li class="text-gray-500 font-medium text-sm" v-for="(type, index) in monster.types" :key="index">{{ type.name }}</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-left px-2 border-b border-gray-300">Hit Points</th>
                                            <td class="text-left px-2 border-b border-gray-300" :colspan="Array.isArray(monster.skills) && monster.skills.length > 0 ? 1 : 3">
                                                <span class="text-gray-500 font-medium text-sm">{{ monster.hit_points }}</span>
                                            </td>
                                            <th class="text-left px-2 border-l border-gray-300" v-if="Array.isArray(monster.skills) && monster.skills.length > 0" rowspan="2">Skills</th>
                                            <td class="text-left px-2" v-if="Array.isArray(monster.skills) && monster.skills.length > 0" rowspan="2">
                                                <template v-for="(skill, index) in monster.skills" :key="index">
                                                    <NavLink
                                                        :href="`/skill/${skill.id}`"
                                                        class="text-blue-800 hover:underline p-0"
                                                        style="border-bottom-width: 0 !important;"
                                                    >
                                                        {{ skill.name }}
                                                    </NavLink> +<span class="text-gray-500 font-medium text-sm">{{ skill.dc }}</span>
                                                    <br v-if="index < monster.skills.length - 1"/>
                                                </template>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-left px-2">Speed</th>
                                            <td class="text-left px-2" :colspan="Array.isArray(monster.skills) && monster.skills.length > 0 ? 1 : 3">
                                                <span class="text-gray-500 font-medium text-sm">{{ monster.speed }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2 pt-4 border-t-4">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">STR</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">DEX</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">CON</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">INT</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">WIS</th>
                                            <th class="px-4 py-2 border border-gray-300 bg-blue-300">CHA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-4 py-2 border border-gray-300 text-center">{{ monster.str }}</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center">{{ monster.dex }}</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center">{{ monster.con }}</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center">{{ monster.int }}</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center">{{ monster.wis }}</td>
                                            <td class="px-4 py-2 border border-gray-300 text-center">{{ monster.cha }}</td>
                                        </tr>
                                        <tr>
                                            <th>Melee</th>
                                            <td colspan="2">
                                                <span class="text-gray-500 font-medium text-sm">
                                                    {{ (isNaN(monster.str) || monster.str === null)
                                                        ? monster.proficiency
                                                        : (monster.proficiency + Math.floor((monster.str - 10) / 2)) > 0
                                                            ? '+' + (monster.proficiency + Math.floor((monster.str - 10) / 2))
                                                            : (monster.proficiency + Math.floor((monster.str - 10) / 2))
                                                    }}
                                                </span>
                                                <span class="px-8 text-gray-350 opacity-50 text-sm" v-if="hasWeaponFinesse">
                                                    {{ (isNaN(monster.dex) || monster.dex === null)
                                                        ? monster.proficiency
                                                        : (monster.proficiency + Math.floor((monster.dex - 10) / 2)) > 0
                                                            ? '+' + (monster.proficiency + Math.floor((monster.dex - 10) / 2))
                                                            : (monster.proficiency + Math.floor((monster.dex - 10) / 2))
                                                    }} (WF)
                                                </span>
                                            </td>
                                            <th>Ranged</th>
                                            <td colspan="2">
                                                <span class="text-gray-500 font-medium text-sm">
                                                    {{ (isNaN(monster.dex) || monster.dex === null)
                                                    ? monster.proficiency
                                                    : (monster.proficiency + Math.floor((monster.dex - 10) / 2)) > 0
                                                        ? '+' + (monster.proficiency + Math.floor((monster.dex - 10) / 2))
                                                        : (monster.proficiency + Math.floor((monster.dex - 10) / 2))
                                                    }}
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="m-2 pt-4 border-t-4">
                                <div v-html="monster.actions"></div>
                            </section>
                            <section class="my-8 mx-2 border-t-4" v-if="Array.isArray(monster.classes) && monster.classes.length > 0">
                                <h3 class="border-b-2 font-semibold bg-blue-300 p-3">Classes</h3>
                                <dl>
                                    <template v-for="(klass, index) in monster.classes" :key="index">
                                        <dt>
                                            <NavLink
                                                :href="`/class/${klass.id}`"
                                                class="text-blue-800 hover:underline p-0"
                                                style="border-bottom-width: 0 !important;"
                                            >
                                                {{ klass.name }} <span v-if="klass.level != null">&nbsp;{{ klass.level }}</span>
                                                <span v-if="klass.meta != null">&nbsp;({{ klass.meta }})</span>
                                            </NavLink>
                                        </dt>
                                        <dd><ClassTable :klass="klass"/></dd>
                                    </template>
                                </dl>
                            </section>
                            <section class="my-8 mx-2 border-t-4" v-if="Array.isArray(monster.features) && monster.features.length > 0">
                                <h3 class="border-b-2 font-semibold bg-blue-300 p-3">Features</h3>
                                <table class="w-full">
                                    <tbody>
                                        <tr v-for="(feature, index) in monster.features" :key="index">
                                            <th class="text-left px-4 border-b border-gray-300">{{ feature.name }}</th>
                                            <td class="px-4 border-b border-gray-300">
                                                <div class="inline-block" v-html="feature.description"></div>
                                                <span v-if="feature.meta != null">&nbsp;({{ feature.meta }})</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                            <section class="my-8 mx-2 border-t-4" v-if="(Array.isArray(monster.feats) && monster.feats.length > 0) || (Array.isArray(monster.talents) && monster.talents.length > 0)">
                                <div class="flex">
                                    <div class="flex-1" v-if="Array.isArray(monster.feats) && monster.feats.length > 0">
                                        <h3 class="border-b-2 font-semibold bg-blue-300 p-3">Feats</h3>
                                        <table class="w-full">
                                            <tbody>
                                                <tr v-for="(feat, index) in monster.feats" :key="index">
                                                    <th class="text-left border-b border-gray-300">{{ feat.name }}</th>
                                                    <td class="border-b border-gray-300"><div v-html="feat.description"></div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex-1" v-if="Array.isArray(monster.talents) && monster.talents.length > 0">
                                        <h3 class="border-b-2 font-semibold bg-blue-300 p-3">Talents</h3>
                                        <table class="w-full">
                                            <tbody>
                                                <tr v-for="(talent, index) in monster.talents" :key="index">
                                                    <th class="text-left border-b border-gray-300">{{ talent.name }}</th>
                                                    <td class="border-b border-gray-300"><div v-html="talent.description"></div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                            <section v-if="monster.spells && Object.keys(monster.spells).length > 0" class="my-8 mx-2 border-t-4">
                                <h4 class="text-lg font-semibold bg-blue-300 p-3">Spells:</h4>
                                <ul>
                                    <li v-for="(spell, index) in monster.spells" :key="index">
                                        <NavLink
                                            :href="`/spell/${spell.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ spell.name }} <span v-if="spell.meta != null">&nbsp;({{ spell.meta }})</span>
                                        </NavLink>
                                    </li>
                                </ul>
                            </section>
                            <section v-if="monster.powers && Object.keys(monster.powers).length > 0" class="my-8 mx-2 border-t-4">
                                <h4 class="text-lg font-semibold bg-blue-300 p-3">Powers:</h4>
                                <ul>
                                    <li v-for="(power, index) in monster.powers" :key="index">
                                        <NavLink
                                            :href="`/power/${power.id}`"
                                            class="text-blue-800 hover:underline p-0"
                                            style="border-bottom-width: 0 !important;"
                                        >
                                            {{ power.name}} <span v-if="power.meta != null">&nbsp;({{ power.meta }})</span>
                                        </NavLink>
                                    </li>
                                </ul>
                            </section>
                            <section class="my-8 mx-2 border-t-4">
                                <div v-html="monster.description"></div>
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
