<script setup>
import { ref, onMounted, watch } from "vue";

const props = defineProps({
    klass: {
        type: Object,
        required: true,
    },
});

const levels = ref([]);
const lastSpellSlot = ref(null);
const highestSpellSlot = ref(0);

const calculateHighestSpellSlot = (spellKeys, spellSlots) => {
    if (!props.klass.has_spells) {
        return 0;
    }
    // Initialize lastSpellSlot.value to an empty object if spellSlots is null or undefined
    lastSpellSlot.value = spellSlots
        ? spellSlots[
            Object.keys(spellSlots)
                .map(Number)
                .sort((a, b) => a - b)
                .pop()
            ]
        : {};

    // Ensure lastSpellSlot.value is an object and define `zero` if missing
    if (lastSpellSlot.value && typeof lastSpellSlot.value === 'object') {
        lastSpellSlot.value.zero = lastSpellSlot.value.zero || 0; // Default to 0 if undefined
        let highestNonNullKey = spellKeys
            .filter((key) => lastSpellSlot.value[key] !== null)
            .pop();

        return spellKeys.indexOf(highestNonNullKey) + 1;
    }

    return 0; // Return 0 if lastSpellSlot.value is not valid
};

watch(
    () => props.klass,
    (newKlass) => {
        if (newKlass) {
            levels.value = Array.from({ length: newKlass.max_level }, (_, i) => i + 1);

            const spellKeys = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];

            highestSpellSlot.value = calculateHighestSpellSlot(spellKeys, newKlass.spell_slots);
        }
    },
    { immediate: true }
);
</script>

<template>
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-100">
        <tr>
            <th class="px-4 py-2 border border-gray-300 text-left">Level</th>
            <th class="px-4 py-2 border border-gray-300 text-left">Features</th>

            <th v-if="props.klass.has_spells && highestSpellSlot >= 0" class="px-4 py-2 border border-gray-300 text-left">0</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 0" class="px-4 py-2 border border-gray-300 text-left">1st</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 1" class="px-4 py-2 border border-gray-300 text-left">2nd</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 2" class="px-4 py-2 border border-gray-300 text-left">3rd</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 3" class="px-4 py-2 border border-gray-300 text-left">4th</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 4" class="px-4 py-2 border border-gray-300 text-left">5th</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 5" class="px-4 py-2 border border-gray-300 text-left">6th</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 6" class="px-4 py-2 border border-gray-300 text-left">7th</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 7" class="px-4 py-2 border border-gray-300 text-left">8th</th>
            <th v-if="props.klass.has_spells && highestSpellSlot > 8" class="px-4 py-2 border border-gray-300 text-left">9th</th>

            <th v-if="props.klass.has_powers" class="px-4 py-2 border border-gray-300 text-left">Power Points</th>
            <th v-if="props.klass.has_powers" class="px-4 py-2 border border-gray-300 text-left">Powers Known</th>
            <th v-if="props.klass.has_powers" class="px-4 py-2 border border-gray-300 text-left">Max Power Level</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="level in levels" :key="level">
            <td class="px-4 py-2 border border-gray-300">{{ level }}</td>
            <td class="px-4 py-2 border border-gray-300">
                <ul>
                    <li v-for="feature in klass.features[level]" :key="feature.id">
                        {{ feature.name }} <span v-if="feature.meta">({{ feature.meta }})</span>
                    </li>
                </ul>
            </td>

            <td v-if="props.klass.has_spells && highestSpellSlot >= 0" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].zero }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 0" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].one }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 1" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].two }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 2" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].three }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 3" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].four }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 4" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].five }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 5" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].six }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 6" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].seven }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 7" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].eight }}</td>
            <td v-if="props.klass.has_spells && highestSpellSlot > 8" class="px-4 py-2 border border-gray-300 text-center">{{ klass.spell_slots[level].nine }}</td>

            <td v-if="props.klass.has_powers" class="px-4 py-2 border border-gray-300 text-center">{{ klass.power_metas[level].points }}</td>
            <td v-if="props.klass.has_powers" class="px-4 py-2 border border-gray-300 text-center">{{ klass.power_metas[level].known }}</td>
            <td v-if="props.klass.has_powers" class="px-4 py-2 border border-gray-300 text-center">{{ klass.power_metas[level].max_level_power }}</td>
        </tr>
        </tbody>
    </table>
<!--    <pre>{{ klass }}</pre>-->
</template>
