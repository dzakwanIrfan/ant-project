<script setup>
import { ref, onMounted } from 'vue';
import { CheckCircle, XCircle, X } from 'lucide-vue-next';

const props = defineProps({
    type: {
        type: String,
        required: true,
        validator: (value) => ['success', 'error'].includes(value)
    },
    message: {
        type: String,
        required: true
    },
    autoClose: {
        type: Boolean,
        default: true
    },
    duration: {
        type: Number,
        default: 5000
    }
});

const isVisible = ref(true);

const close = () => {
    isVisible.value = false;
};

onMounted(() => {
    if (props.autoClose) {
        setTimeout(close, props.duration);
    }
});

const getAlertStyle = () => {
    if (props.type === 'success') {
        return {
            container: 'bg-green-50 border-green-100',
            text: 'text-green-800',
            icon: 'text-green-400'
        };
    }
    return {
        container: 'bg-red-50 border-red-100',
        text: 'text-red-800',
        icon: 'text-red-400'
    };
};
</script>

<template>
    <transition
        enter-active-class="transform ease-out duration-300 transition"
        enter-from-class="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        enter-to-class="translate-y-0 opacity-100 sm:translate-x-0"
        leave-active-class="transition ease-in duration-100"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
    >
        <div 
            v-if="isVisible" 
            class="w-full max-w-sm overflow-hidden rounded-lg shadow-md border"
            :class="getAlertStyle().container"
        >
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <CheckCircle
                            v-if="type === 'success'"
                            class="h-5 w-5"
                            :class="getAlertStyle().icon"
                        />
                        <XCircle
                            v-else
                            class="h-5 w-5"
                            :class="getAlertStyle().icon"
                        />
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p
                            class="text-sm font-medium"
                            :class="getAlertStyle().text"
                        >
                            {{ message }}
                        </p>
                    </div>
                    <div class="ml-4 flex flex-shrink-0">
                        <button
                            type="button"
                            class="inline-flex rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2"
                            :class="getAlertStyle().text"
                            @click="close"
                        >
                            <span class="sr-only">Close</span>
                            <X class="h-5 w-5" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>