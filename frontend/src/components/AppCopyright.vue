<template>
    <div class="copyright d-flex justify-content-center align-items-center">
         <span>&copy; {{ anoAtual }} Colégio Modelo. Todos os direitos reservados. Desenvolvido por <a :href="linkedinLeandro" target="_blank" class="sem-sublinhado"><span class="leandro">Leandro Gonçalves Crisóstomo</span></a></span>
    </div>
</template>

<script>
export default {
    name: "AppCopyright",

    data() {
        return {
            anoAtual: new Date().getFullYear(),
            linkedinLeandro: "https://www.linkedin.com/in/leandro-gon%C3%A7alves-cris%C3%B3stomo-9936422b0/"
        }
    }
}
</script>

<style scoped>
    .copyright {
        background: linear-gradient(135deg, var(--azul-escuro), var(--verde-escuro));
        color: var(--branco);
        font-size: 1.1em;
        padding: 15px 0;
        font-weight: 400;
    }

    .leandro {
        font-weight: 600;
        color: var(--branco);
    }

    .leandro:hover {
        color: var(--dourado);
    }
</style>