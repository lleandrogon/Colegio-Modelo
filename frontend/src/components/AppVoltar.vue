<template>
    <header class="cabecalho">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <a href="/">
                    <i class="seta fa-solid fa-arrow-left"></i>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <img src="logo-escola.png" alt="logo" class="logo img-fluid">
            </div>
        </div>
    </header>
</template>

<script>
export default {

}
</script>

<style scoped>
    .cabecalho {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        padding: 10px 5px;
    }

    .row {
        margin: 0;
    }

    .seta {
        background-color: var(--azul);
        color: var(--branco);
        font-size: 1.8em;
        padding: 15px;
        margin-left: 15px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .seta:hover {
        background-color: var(--verde);
        transform: scale(1.2);
        box-shadow: 2px 4px 8px var(--dourado);
    }

    .logo {
        width: 140px;
    }

    @media (min-width: 768px) {
        .seta {
            margin-left: 35px;
        }

        .logo {
            margin-right: 35px;
        }
    }
</style>