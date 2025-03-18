<template>
    <footer class="rodape mt-5">
        <div class="row">
            <div class="col-xl-4 d-flex flex-column justify-content-end align-items-center">
                <h3 class="titulo-footer mt-5 mb-5">Contatos</h3>
                <div v-for="contato in contatos" :key="contato.id">
                    <p class="contato-conteudo my-3"><i :class="contato.icon" class="contato-icone me-3"></i>{{ contato.descricao }}</p>
                </div>
            </div>
            <div class="col-xl-4 d-flex justify-content-center align-items-center">
                <img src="logo-escola.png" alt="Logo da Escola" class="logo img-fluid">
            </div>
            <div class="col-xl-4 d-flex flex-column justify-content-end align-items-center">
                <h3 class="titulo-footer mt-5 mb-5">Redes Sociais</h3>
                <div v-for="redeSocial in redesSociais" :key="redeSocial.id">
                    <a :href="redeSocial.link" target="blank" class="rede-social-link sem-sublinhado"><p class="rede-social-conteudo my-3"><i :class="redeSocial.icon" class="rede-social-icone me-3"></i>{{ redeSocial.descricao }}</p></a>
                </div>
            </div>
        </div>
    </footer>
    
</template>

<script>
export default {
    name: "AppFooter",

    data() {
        return {
            contatos: [
                {
                    id: 1,
                    tipo: "Telefone",
                    icon: "fa-solid fa-phone",
                    descricao: "+55 99 99999-9999"
                },
                {
                    id: 2,
                    tipo: "Email",
                    icon: "fa-solid fa-envelope",
                    descricao: "colmodelo@gmail.com"
                },
                {
                    id: 3,
                    tipo: "Atendimento",
                    icon: "fa-solid fa-clock",
                    descricao: "Das 08:00 as 17:00"
                }
            ],

            redesSociais: [
                {
                    id: 1,
                    redeSocial: "Whatsapp",
                    icon: "fa-brands fa-whatsapp",
                    descricao: "+55 99 9999-9999",
                    link: "https://www.whatsapp.com/"
                },
                {
                    id: 2,
                    redeSocial: "Instagram",
                    icon: "fa-brands fa-instagram",
                    descricao: "@colegiomodelo",
                    link: "https://www.instagram.com/"
                },
                {
                    id: 3,
                    redeSocial: "Facebook",
                    icon: "fa-brands fa-facebook",
                    descricao: "@colegiomodelo",
                    link: "https://www.facebook.com/"
                }
            ],
        } 
    }
}
</script>

<style scoped>
    .rodape {
        background: linear-gradient(135deg, var(--azul), var(--verde));
        color: var(--branco);
        padding: 100px 100px;
    }

    .row {
        margin: 0;
    }

    .titulo-footer {
        font-size: 1.8em;
        font-weight: bold;
        text-transform: uppercase;
    }

    .contato-conteudo {
        font-size: 1.2em;
        font-weight: 500;
    }

    .contato-icone {
        font-size: 1.3em;
    }

    .logo {
        width: 400px;
    }

    .rede-social-link {
        color: var(--branco);
    }

    .rede-social-link:hover {
        color: var(--azul);
    }

    .rede-social-conteudo {
        font-size: 1.2em;
        font-weight: 500;
    }

    .rede-social-icone {
        font-size: 1.3em;
    }
</style>