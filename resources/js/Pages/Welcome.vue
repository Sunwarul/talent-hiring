<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});

</script>

<template>
    <Head title="Hello world" />
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Hello card header
                </div>
            </div>
        </div>
    </div>
</template>
