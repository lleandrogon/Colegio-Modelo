<template>
    <section class="depoimentos">
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-center">
                <h2 class="titulo">Depoimentos</h2>
                <p class="resumo mt-4">No Colégio Modelo, nós damos o melhor para cada aluno alcançar seus resultados, acreditando que essa dedicação é um dos diferenciais que nos destacam no mercado. Nossos profissionais são comprometidos em criar um ambiente motivador, com aulas que atendem os objetivos individuais.</p>
            </div>
            <div>
                <img :src="imagemTitulo" alt="balão de pensamento" class="balao img-fluid align-self-start pe-5">
            </div>
        </div>

        <div class="row">
            <div v-for="depoimento in depoimentos" :key="depoimento.id" class="col-md-6 col-xl-3 d-flex justify-content-center">
                <div class="container-card text-center my-2">
                    <img :src="depoimento.foto" class="perfil img-fluid mx-auto" :alt="depoimento.nome">
                    <div class="card-body">
                        <h4 class="card-title mb-3">{{ depoimento.nome }}</h4>
                        <p class="card-text">{{ depoimento.depoimento }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "AppDepoimentos",

    data() {
        return {
            imagemTitulo: "https://i.pinimg.com/originals/0e/1c/44/0e1c4487030a88bb06be433d78cfca67.png",
            
            depoimentos: [
                {
                    id: 1,
                    nome: "Lucas Ferreira",
                    foto: "https://cdn-icons-png.flaticon.com/512/2716/2716238.png",
                    depoimento: "Estudar aqui foi uma experiência transformadora! Os professores são incríveis, sempre dispostos a tirar dúvidas e incentivar o nosso aprendizado. Além disso, o ambiente do colégio é muito motivador, o que me ajudou a manter o foco."
                },
                {
                    id: 2,
                    nome: "Mariana Souza",
                    foto: "https://cdn-icons-png.flaticon.com/512/4128/4128359.png",
                    depoimento: "A metodologia do Colégio Modelo foi essencial para minha aprovação no vestibular! Os materiais são muito bem estruturados, e o suporte dos professores faz toda a diferença. Sou muito grata pelo ensino de qualidade e pela dedicação de toda a equipe escolar."
                },
                {
                    id: 3,
                    nome: "Gustavo Oliveira",
                    foto: "https://cdn-icons-png.flaticon.com/512/4323/4323015.png",
                    depoimento: "Nunca imaginei que estudar poderia ser tão envolvente! O ambiente do colégio me inspira a aprender mais a cada dia, e os professores sempre trazem novas formas de ensinar que tornam as aulas dinâmicas. Me sinto muito mais preparado para o futuro!"
                },
                {
                    id: 4,
                    nome: "Raiane Martins",
                    foto: "https://cdn-icons-png.flaticon.com/512/4128/4128314.png",
                    depoimento: "Aqui no Colégio Modelo me sinto acolhida e segura para desenvolver meu aprendizado. O suporte dos professores é incrível, e eles realmente se preocupam com o nosso crescimento. Além disso, as atividades extracurriculares me ajudaram a explorar novas habilidades e interesses!"
                }
            ]
        }
    }
}
</script>

<style scoped>
    .depoimentos {
        padding: 30px 0;
        overflow-x: hidden;
    }

    .resumo {
        padding: 0 60px;
        font-size: 1.2em;
        font-weight: 400;
        color: var(--cinza);
        line-height: 1.6;
    }

    .row {
        margin: 0;
        padding: 0;
    }

    .container-card {
        width: 350px;
        padding-top: 15px;
        padding: 15px 0;
        border: 4px solid var(--azul);
        border-radius: 25px;
        background: linear-gradient(135deg, var(--verde), var(--azul));
        color: var(--branco);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }
    
    .perfil {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin-bottom: 20px;
        border: 3px solid var(--branco);
    }

    .card-title {
        font-size: 1.5em;
    }

    .card-text {
        padding: 0 50px;
        font-size: 1.1em;
    }

    @media (max-width: 768px) {
        .balao {
            display: none;
        }
    }
</style>