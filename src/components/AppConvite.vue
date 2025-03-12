<template>
    <section class="convite">
        <h2 class="titulo">Venha estudar conosco</h2>
        <div class="row justify-content-center">
            <div v-for="destaque in destaques" :key="destaque.id" class="col-12 col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="destaque">
                    <i :class="destaque.icon" class="icone me-4"></i>
                    <span class="span-titulo">{{ destaque.titulo }}</span>
                    <p class="descricao mt-4">{{ destaque.descricao }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "AppConvite",

    data() {
        return {
            destaques: [
                {
                    id: 1,
                    icon: "fa-solid fa-graduation-cap",
                    titulo: "1º lugar no ENEM",
                    descricao: "Conquistamos o 1º lugar no ENEM, resultado do nosso compromisso com a excelência educacional e um ensino que prepara os alunos para desafios acadêmicos e profissionais."
                },
                {
                    id: 2,
                    icon: "fa-solid fa-chalkboard-teacher",
                    titulo: "Professores Qualificados",
                    descricao: "Nossos professores são altamente qualificados e experientes, dedicados a formar cidadãos críticos e preparados para o mercado de trabalho e a vida acadêmica."
                },
                {
                    id: 3,
                    icon: "fa-solid fa-book-open",
                    titulo: "Biblioteca Moderna",
                    descricao: "Nossa biblioteca oferece um acervo atualizado e espaços de estudo colaborativos, com recursos digitais e workshops para enriquecer o aprendizado."
                },
                {
                    id: 4,
                    icon: "fa-solid fa-users",
                    titulo: "Ambiente Escolar Inclusivo",
                    descricao: "Promovemos um ambiente inclusivo e colaborativo, onde a diversidade é valorizada e todos os alunos se sentem acolhidos e respeitados."
                },
                {
                    id: 5,
                    icon: "fa-solid fa-laptop-code",
                    titulo: "Tecnologia de Ponta",
                    descricao: "Utilizamos tecnologias modernas, como quadros interativos e plataformas online, para oferecer uma experiência educacional inovadora e de alta qualidade."
                },
                {
                    id: 6,
                    icon: "fa-solid fa-network-wired",
                    titulo: "Parcerias com Universidades",
                    descricao: "Parcerias com universidades e empresas renomadas proporcionam estágios, intercâmbios e programas de capacitação para nossos alunos."
                },
            ]
        }
    }
}
</script>

<style scoped>
    .convite {
        padding: 50px 30px;
        text-align: center;
        border-radius: 15px;
    }

    .titulo {
        font-size: 2.5em;
        font-weight: bold;
        color: var(--azul);
        margin-bottom: 40px;
        text-transform: uppercase;
    }

    .row {
        padding: 0;
        margin: 0;
    }

    .destaque {
        width: 100%;
        height: auto;
        border: 2px solid var(--dourado);
        border-radius: 20px;
        padding: 20px;
        margin: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .destaque:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .icone {
        font-size: 3em;
        color: var(--verde);
        margin-bottom: 20px;
    }

    .span-titulo {
        font-size: 1.9em;
        font-weight: 600;
        color: var(--azul);
    }

    .descricao {
        font-size: 1.2em;
        color: #666;
        line-height: 1.5;
        margin-top: 15px;
    }

    @media (min-width> 786px) {
        .convite {
            padding: 70px 50px;
        }
    }
</style>