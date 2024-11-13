<script setup>
import { ref } from 'vue'
const isLoading = ref(false)

const loginWithGoogle = async () => {
    try {
        isLoading.value = true
        window.location.href = 'http://127.0.0.1:8000/auth/google/redirect'
    } catch (error) {
        console.error('Google login error:', error)
    } finally {
        isLoading.value = false
    }
}
</script>

<template>
    <button 
        @click="loginWithGoogle"
        :disabled="isLoading"
        class="flex px-4 py-2 gap-4 bg-white border-myBlack border justify-center rounded w-auto max-w-sm m-auto text-myBlack active:border-blue3 active:ring-2 active:ring-blue3 disabled:opacity-50 disabled:cursor-not-allowed hover:bg-gray-50 transition-colors"
    >
        <div v-if="!isLoading" class="flex items-center gap-2">
            <img 
                src="icon/google-icon-logo-svgrepo-com.svg" 
                alt="Google" 
                class="size-6"
            >
            <p>Sign in with Google</p>
        </div>
        <div v-else class="flex items-center gap-2">
            <svg 
                class="animate-spin size-6 text-myBlack" 
                xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 24 24"
            >
                <circle 
                    class="opacity-25" 
                    cx="12" 
                    cy="12" 
                    r="10" 
                    stroke="currentColor" 
                    stroke-width="4"
                ></circle>
                <path 
                    class="opacity-75" 
                    fill="currentColor" 
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                ></path>
            </svg>
            <p>Signing in...</p>
        </div>
    </button>
</template>
