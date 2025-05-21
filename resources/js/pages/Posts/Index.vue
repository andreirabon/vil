<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Posts',
        href: '/posts',
    },
];
</script>

<template>
    <Head title="Posts" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="flex items-center justify-between">
                <Link
                    href="/posts/create"
                    class="inline-flex items-center rounded-md border border-transparent bg-green-600 px-3 py-1 text-xs font-medium text-white shadow-sm hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:outline-none"
                >
                    Create Post
                </Link>
            </div>
            <div class="w-full">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="border-b border-gray-200">
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">ID</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">TITLE</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">BODY</th>
                            <th class="px-4 py-2 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200 odd:bg-gray-100 even:bg-white">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Example Title</td>
                            <td class="px-4 py-2">Example body content.</td>
                            <td class="flex items-center space-x-2 px-4 py-2">
                                <button
                                    class="inline-flex items-center rounded-md border border-transparent bg-blue-600 px-3 py-1 text-xs font-medium text-white shadow-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-none"
                                >
                                    Edit
                                </button>
                                <button
                                    class="inline-flex items-center rounded-md border border-transparent bg-red-600 px-3 py-1 text-xs font-medium text-white shadow-sm hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:outline-none"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <!-- More rows can be added here -->
                    </tbody>
                </table>
            </div>
        </div>
    </AppLayout>
</template>
