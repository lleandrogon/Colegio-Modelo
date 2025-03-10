<template>
    <AppHeader />
    <AppHome />
    <AppConvite />
    <AppContato />
</template>

<script>
import AppHeader from '@/components/AppHeader.vue';
import AppHome from '@/components/AppHome.vue';
import AppConvite from '@/components/AppConvite.vue';
import AppContato from '@/components/AppContato.vue';

export default {
    components: {
        AppHeader,
        AppHome,
        AppConvite,
        AppContato
    }
}
</script>

<style>

</style>