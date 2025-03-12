<template>
    <AppHeader />
    <AppHome />
    <AppConvite />
    <AppContato />
    <AppNiveis />
    <AppDepoimentos />
</template>

<script>
import AppHeader from '@/components/AppHeader.vue';
import AppHome from '@/components/AppHome.vue';
import AppConvite from '@/components/AppConvite.vue';
import AppContato from '@/components/AppContato.vue';
import AppNiveis from '@/components/AppNiveis.vue';
import AppDepoimentos from '@/components/AppDepoimentos.vue';

export default {
    components: {
        AppHeader,
        AppHome,
        AppConvite,
        AppContato,
        AppNiveis,
        AppDepoimentos
    }
}
</script>

<style>

</style>