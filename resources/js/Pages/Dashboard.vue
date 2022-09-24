<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in! welcome here
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolor sit numquam consequuntur? Explicabo esse cupiditate molestiae dolore sit, magnam iure est quidem accusantium, nisi laborum aliquam? Commodi, suscipit tempora.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
