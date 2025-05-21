<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Post Create',
        href: '/posts/create',
    },
];
</script>

<template>
    <Head title="Post Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="flex items-center justify-between">
                <Link
                    href="/posts/"
                    class="inline-flex items-center rounded-md border border-transparent bg-green-600 px-3 py-1 text-xs font-medium text-white shadow-sm hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:outline-none"
                >
                    Back to Posts
                </Link>
            </div>
        </div>
    </AppLayout>
</template>
