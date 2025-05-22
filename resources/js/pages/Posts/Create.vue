<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Post Create',
        href: '/posts/create',
    },
];

const form = useForm({
    title: '',
    body: '',
});

function handleSubmit() {
    form.post(route('posts.store'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
}
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

            <form class="space-y-2" @submit.prevent="handleSubmit">
                <div class="grid gap-2">
                    <Label for="email">Title</Label>
                    <Input id="title" type="text" class="mt-1 block w-full" v-model="form.title" placeholder="Title" />
                    <InputError class="mt-2" :message="form.errors.title" />
                </div>
                <div class="grid gap-2">
                    <Label for="email">Body</Label>
                    <Input id="body" type="text" class="mt-1 block w-full" v-model="form.body" placeholder="Body" />
                    <InputError class="mt-2" :message="form.errors.body" />
                </div>
                <div class="flex items-center gap-4">
                    <Button
                        class="bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-none"
                        :disabled="form.processing"
                    >
                        Save
                    </Button>
                </div>
            </form>
        </div>
    </AppLayout>
</template>
