<script setup>
import { getCurrentInstance } from 'vue';
import Alert from '@/Components/Alert.vue';

const app = getCurrentInstance();
const { $alert } = app.appContext.config.globalProperties;
</script>

<template>
    <div class="fixed top-20 right-4 z-50 space-y-2">
        <Alert
            v-for="alert in $alert.alerts"
            :key="alert.id"
            :type="alert.type"
            :message="alert.message"
            :auto-close="alert.autoClose"
            :duration="alert.duration"
        />
    </div>
</template>