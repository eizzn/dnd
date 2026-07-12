<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center rounded-md border border-stone-600 bg-stone-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-stone-300 shadow-sm transition duration-150 ease-in-out hover:bg-stone-700 hover:text-stone-100 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 focus:ring-offset-stone-900 disabled:opacity-25"
    >
        <slot />
    </button>
</template>
