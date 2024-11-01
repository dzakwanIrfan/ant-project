<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="Profile" />
    <GuestLayout>
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div
                class="bg-white p-4 shadow sm:rounded-lg sm:p-8"
            >
                <UpdateProfileInformationForm
                    :must-verify-email="mustVerifyEmail"
                    :status="status"
                    class="max-w-xl"
                />
            </div>

            <div
                class="bg-white p-4 shadow sm:rounded-lg sm:p-8"
            >
                <UpdatePasswordForm class="max-w-xl" />
            </div>
        </div>
    </GuestLayout>
</template>
