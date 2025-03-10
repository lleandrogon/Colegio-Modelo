<template>
    <section class="contato d-flex justify-content-center px-5">
        <div class="conteudo row">
            <div class="form-container col-12 col-md-6">
                <h2 class="titulo-form mb-5">Transforme seu objetivo em realidade. Entre em contato!</h2>
                <form method="POST" class="px-4">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo do responsável:</label>
                        <input type="text" id="nome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Endereço email:</label>
                        <input type="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Endereço email:</label>
                        <input type="tel" id="telefone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="assunto" class="form-label">Assunto:</label>
                        <textarea id="assunto" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="iframe-container col-12 col-md-6 p-0">
                <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.1418241842903!2d-35.714250030769826!3d-9.668921123719015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x701450e8e289e4d%3A0x96e3565ae6187a56!2sPraia%20de%20Paju%C3%A7ara!5e0!3m2!1spt-BR!2sbr!4v1741622123992!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "AppContato"
}
</script>

<style scoped>
    .contato {
        padding: 100px 0;
    }

    .conteudo {
        color: var(--branco);
        border: none;
        border-radius: 25px;
        padding: 0;
        height: 500px;
        width: 1200px;
    }

    .form-container {
        background-color: var(--cinza-escuro);
        border-radius: 25px 0 0 25px;
        padding: 20px;
    }

    .row {
        padding: 0;
        margin: 0;
    }

    .titulo-form {
        font-size: 2.6em;
    }

    .iframe-container {
        padding: 20px;
    }

    .iframe {
        width: 100%;
        height: 100%;
        border-radius: 0 25px 25px 0;
    }
</style>