<script setup lang="ts">
import { ref } from 'vue';

const clickCount = ref(0);

const handleClick = () => {
    clickCount.value += 1;
};
</script>

<template>
    <div class="flex min-h-screen flex-col items-center justify-center p-4">
        <h1 class="mb-4 text-2xl font-bold">Test Page</h1>
        <button
            @click="handleClick"
            class="rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none"
        >
            Click Me
        </button>
        <p v-if="clickCount > 0" class="mt-2 text-gray-600">Clicked {{ clickCount }} times.</p>
    </div>
</template>
