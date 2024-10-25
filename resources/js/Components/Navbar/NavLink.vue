<script setup>
import { Link } from "@inertiajs/vue3";
import { computed, defineProps } from "vue";

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() => {
    return props.active
        ? "border-blue2 font-bold text-blue2 focus:outline-none focus:border-blue2 transition duration-150 ease-in-out"
        : "border-transparent text-unactive text-opacity-60 hover:text-opacity-100 hover:text-blue2 hover:border-blue2 hover:font-bold focus:outline-none focus:text-blue2 focus:border-blue2 transition duration-150 ease-in-out";
});
</script>

<template>
    <Link :href="href" :class="classes" class="min-w-[112px] py-1 leading-tight text-lg flex items-center justify-center h-full px-4 border-b-2">
        <span class="inline-block">
            <slot />
        </span>
    </Link>
</template>