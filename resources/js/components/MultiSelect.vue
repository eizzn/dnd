<script setup>
import { ref, computed, onMounted, onUnmounted, nextTick } from 'vue';

const props = defineProps({
    modelValue: {
        type: Array,
        default: () => [],
    },
    options: {
        type: Array, // [{ value, label }]
        required: true,
    },
    placeholder: {
        type: String,
        default: 'All',
    },
});

const emit = defineEmits(['update:modelValue']);

const open = ref(false);
const container = ref(null);
const dropdownStyle = ref({});

const toggle = (value) => {
    const current = [...props.modelValue];
    const idx = current.indexOf(value);
    if (idx === -1) current.push(value);
    else current.splice(idx, 1);
    emit('update:modelValue', current);
};

const isSelected = (value) => props.modelValue.includes(value);

const summary = computed(() => {
    if (props.modelValue.length === 0) return props.placeholder;
    if (props.modelValue.length === 1) {
        const opt = props.options.find(o => o.value === props.modelValue[0]);
        return opt ? opt.label : props.modelValue[0];
    }
    return `${props.modelValue.length} selected`;
});

const openDropdown = () => {
    open.value = !open.value;
    if (open.value) {
        nextTick(() => {
            const rect = container.value.getBoundingClientRect();
            dropdownStyle.value = {
                position: 'fixed',
                top: `${rect.bottom + 4}px`,
                left: `${rect.left}px`,
                width: `${rect.width}px`,
                zIndex: 9999,
            };
        });
    }
};

const closeOnOutsideClick = (e) => {
    if (container.value && !container.value.contains(e.target)) {
        open.value = false;
    }
};

onMounted(() => document.addEventListener('mousedown', closeOnOutsideClick));
onUnmounted(() => document.removeEventListener('mousedown', closeOnOutsideClick));
</script>

<template>
    <div class="relative" ref="container">
        <button
            type="button"
            @click="openDropdown"
            class="mt-1 flex w-full items-center justify-between gap-1 rounded-md border border-stone-600 bg-stone-900 px-2 py-1 text-left text-sm text-stone-200 shadow-sm transition-colors hover:border-amber-600 focus:border-amber-600 focus:outline-none focus:ring-1 focus:ring-amber-600"
        >
            <span class="truncate" :class="modelValue.length === 0 ? 'text-stone-500' : 'text-stone-200'">
                {{ summary }}
            </span>
            <svg
                class="h-4 w-4 shrink-0 text-stone-400 transition-transform duration-200"
                :class="open ? 'rotate-180' : ''"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
            >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <Teleport to="body">
            <Transition
                enter-active-class="transition ease-out duration-150"
                enter-from-class="opacity-0 -translate-y-1"
                enter-to-class="opacity-100 translate-y-0"
                leave-active-class="transition ease-in duration-100"
                leave-from-class="opacity-100 translate-y-0"
                leave-to-class="opacity-0 -translate-y-1"
            >
                <div
                    v-show="open"
                    :style="dropdownStyle"
                    class="max-h-56 min-w-max overflow-y-auto rounded-md border border-stone-700 bg-stone-900 shadow-xl"
                >
                    <label
                        v-for="opt in options"
                        :key="opt.value"
                        class="flex cursor-pointer items-center gap-2 px-3 py-1.5 text-sm text-stone-300 transition-colors hover:bg-stone-800 hover:text-amber-400"
                        :class="isSelected(opt.value) ? 'bg-stone-800 text-amber-400' : ''"
                    >
                        <input
                            type="checkbox"
                            class="rounded border-stone-600 bg-stone-900 text-amber-500 focus:ring-amber-600 focus:ring-offset-stone-900"
                            :checked="isSelected(opt.value)"
                            @change="toggle(opt.value)"
                        />
                        {{ opt.label }}
                    </label>
                </div>
            </Transition>
        </Teleport>
    </div>
</template>
