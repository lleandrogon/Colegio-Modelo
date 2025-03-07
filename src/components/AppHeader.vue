<template>
    <header class="cabecalho container-fluid">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <img src="logo-escola.png" alt="logo" class="logo img-fluid">
                <span class="nome-colegio d-none d-lg-inline-block ms-3">Colégio Modelo</span>
            </div>
            <div class="col-6 d-flex d-lg-none justify-content-end align-items-center">
                <i class="menu-burger fa-solid fa-bars me-3" @click="showNav()"></i>
            </div>
            <div v-if="navResponsivo" class="navResponsivo text-center d-lg-none">
                <ul class="lista-responsiva ms-4">
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Cursos</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Matricula</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Parceria</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Acadêmico</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Perguntas</a></li>
                </ul>
            </div>
            <div class="col-6 d-none d-lg-flex justify-content-end align-items-center">
                <ul class="lista d-flex">
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Cursos</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Matricula</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Parceria</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Acadêmico</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado">Perguntas</a></li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "AppHeader",

    data() {
        return {
            navResponsivo: false
        }
    },

    methods: {
        showNav() {
            this.navResponsivo = !this.navResponsivo;
        }
    }
}
</script>

<style scoped>
    .cabecalho {
        padding: 0 5px;
        background-color: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        padding: 10px 0;
    }

    .row {
        padding: 0;
        margin: 0;
    }

    .logo {
        width: 140px;

    }

    .nome-colegio {
        font-size: 1.3em;
        font-weight: bold;
    }

    .menu-burger {
        font-size: 3.5em;
        transition: transform 0.3s ease;
        color: var(--azul);
    }

    .menu-burger:hover {
        cursor: pointer;
        transform: rotate(90deg);
        color: var(--verde);
    }

    .lista-responsiva {
        padding: 10px 0;
    }

    .lista-responsiva li {
        padding: 20px 0;
    }

    .lista-responsiva li a {
        font-size: 1.6em;
        color: var(--azul);
        font-weight: 500;
    }

    .lista-responsiva li a:hover {
        color: var(--verde);
    }

    .lista li {
        margin: 15px 20px 0 20px;
    }

    .lista li a {
        font-size: 1.3em;
        color: var(--azul);
        font-weight: 500;
    }

    .lista li a:hover {
        color: var(--verde);
    }

    @media (min-width: 768px) {
        .cabecalho {
            padding: 10px 10px;
        }
    }

    @media (min-width: 1200px) {
        .nome-colegio {
            font-size: 1.6em;
        }
    }
</style>