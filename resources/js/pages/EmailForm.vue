<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { useForm } from 'laravel-precognition-vue-inertia';

const form = useForm('post', '/email-submit', {
    email: '',
});
</script>

<template>
    <Head title="Test">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]">
        <div class="flex w-full items-center justify-center lg:grow">
            <main
                class="flex w-full max-w-md flex-col overflow-hidden rounded-lg bg-white p-8 shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:bg-[#161615] dark:text-[#EDEDEC] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"
            >
                <h1 class="mb-6 text-2xl font-medium">Test Form</h1>

                <form @submit.prevent="form.submit()">
                    <div class="mb-4">
                        <label for="email" class="mb-2 block text-sm font-medium"> Email </label>
                        <input
                            id="email"
                            v-model="form.email"
                            class="w-full rounded-md border border-[#e3e3e0] bg-white px-4 py-2 text-sm transition-colors outline-none focus:border-[#f53003] dark:border-[#3E3E3A] dark:bg-[#0a0a0a] dark:focus:border-[#FF4433]"
                            @change="form.validate('email')"
                        />
                        <div v-if="form.invalid('email')" class="mt-1 text-sm text-red-600 dark:text-red-400">
                            {{ form.errors.email }}
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-md border border-black bg-[#1b1b18] px-5 py-2.5 text-sm leading-normal font-medium text-white hover:bg-black disabled:cursor-not-allowed disabled:opacity-50 dark:border-[#eeeeec] dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white"
                        :disabled="form.processing"
                    >
                        {{ form.processing ? 'Submitting...' : 'Submit' }}
                    </button>
                </form>
            </main>
        </div>
    </div>
</template>
