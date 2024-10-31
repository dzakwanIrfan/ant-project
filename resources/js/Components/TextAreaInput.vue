<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <textarea
        class="rounded-md border-myBlack shadow-sm focus:border-blue3 focus:ring-blue3"
        v-model="model"
        ref="input"
    >

    </textarea>
</template>
