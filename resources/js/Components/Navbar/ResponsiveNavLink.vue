<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'border-blue2 text-start text-base font-medium text-blue2 bg-gray-50 focus:outline-none focus:text-blue2 focus:bg-blue2 focus:border-blue2 transition duration-150 ease-in-out'
        : 'text-opacity-60 hover:text-opacity-100 border-transparent text-start text-base font-medium text-myBlack hover:text-blue2 hover:bg-gray-50 hover:border-blue2 focus:outline-none focus:text-blue2 focus:bg-blue2 focus:border-blue2 transition duration-150 ease-in-out',
);
</script>

<template>
    <Link :href="href" :class="classes" class="block w-full ps-3 pe-4 py-2 border-l-4">
        <slot />
    </Link>
</template>
