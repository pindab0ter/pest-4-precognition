<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { show } from '@/routes/email-form';

defineProps({
    email: {
        type: String,
        required: false,
    },
});
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] dark:text-[#EDEDEC] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]">
        <div class="flex w-full items-center justify-center opacity-100 transition-opacity duration-750 lg:grow starting:opacity-0">
            <main class="flex flex-col items-center justify-center gap-4">
                <div v-if="email" class="text-center">
                    <p class="text-sm">Email submitted:</p>
                    <p class="text-lg font-medium">{{ email }}</p>
                </div>
                <Link
                    :href="show()"
                    class="inline-block rounded-sm border border-black bg-[#1b1b18] px-5 py-1.5 text-sm leading-normal text-white hover:border-black hover:bg-black dark:border-[#eeeeec] dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:hover:border-white dark:hover:bg-white"
                >
                    Go to Email Form
                </Link>
            </main>
        </div>
    </div>
</template>
