<template>
    <AppHeader />
    <AppHome />
    <AppConvite />
    <AppContato />
    <AppNiveis />
    <AppEventos />
    <AppDepoimentos />
    <AppFooter />
    <AppCopyright />
</template>

<script>
import AppHeader from '@/components/AppHeader.vue';
import AppHome from '@/components/AppHome.vue';
import AppConvite from '@/components/AppConvite.vue';
import AppContato from '@/components/AppContato.vue';
import AppNiveis from '@/components/AppNiveis.vue';
import AppDepoimentos from '@/components/AppDepoimentos.vue';
import AppEventos from '@/components/AppEventos.vue';
import AppFooter from '@/components/AppFooter.vue';
import AppCopyright from '@/components/AppCopyright.vue';

export default {
    components: {
        AppHeader,
        AppHome,
        AppConvite,
        AppContato,
        AppNiveis,
        AppEventos,
        AppDepoimentos,
        AppFooter,
        AppCopyright
    }
}
</script>

<style>

</style>