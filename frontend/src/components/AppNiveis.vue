<template>
    <section class="niveis">
        <h2 class="titulo text-center mb-5">Níveis de Ensino</h2>
        <div class="nivel-container row d-flex justify-content-center gap-3">
            <div class="nivel col-12 col-md-5 d-flex flex-column flex-md-row my-3" v-for="nivel in niveis" :key="nivel.id">
                <div class="nivel-img-container">
                    <img :src="nivel.imagem" :alt="nivel.nome" class="img-fluid">
                </div>
                <div class="conteudo mt-2">
                    <h3 class="subtitulo text-center mb-3">{{ nivel.nome }}</h3>
                    <p>{{ nivel.descricao }}</p>
                    <div class="d-flex justify-content-end">
                        <a href="#/matricula"><button class="botao-visita">Matricule-se!</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "AppNiveis",

    data() {
        return {
            niveis: [
                {
                    id: 1,
                    imagem: "https://escoladainteligencia.com.br/wp-content/uploads/2023/01/blogei.jpg",
                    nome: "Educação Infantil",
                    descricao: "A Educação Infantil é a primeira etapa da jornada e tem um papel fundamental no desenvolvimento das crianças. Nesta fase, o aprendizado ocorre por meio de brincadeiras e interações que estimulam a criatividade, a curiosidade e a socialização."
                },
                {
                    id: 2,
                    imagem: "https://colegioplanck.com.br/wp-content/uploads/2021/06/Colegio-Planck-Aprendizagem-baseada-em-projetos-para-formar-estudantes-protagonistas-GS2-Marketing-5.jpg",
                    nome: "Fundamental I",
                    descricao: "O Ensino Fundamental I é a etapa em que as crianças começam a consolidar suas habilidades de leitura, escrita e matemática. Nessa fase, o aprendizado é focado no desenvolvimento cognitivo, social e emocional, por meio de atividades que incentivam a criatividade."
                },
                {
                    id: 3,
                    imagem: "https://eif.com.br/wp-content/uploads/2020/10/img_fund_II-1024x576.jpg",
                    nome: "Fundamental II",
                    descricao: "O Ensino Fundamental II é uma fase de transição em que os alunos começam a aprofundar seus conhecimentos e a refletir sobre questões mais complexas. Além das matérias tradicionais, essa etapa busca desenvolver a capacidade crítica."
                },
                {
                    id: 4,
                    imagem: "https://www.intersaberes.com/wp-content/uploads/2022/01/AdobeStock_405751260-1024x683.jpg",
                    nome: "Ensino Médio",
                    descricao: "O Ensino Médio é a última etapa da educação básica, focada no desenvolvimento de uma visão crítica sobre o mundo. Os alunos se preparam para o mercado de trabalho e ingresso no ensino superior. Além de uma formação sólida em várias disciplinas."
                }
            ]
        }
    }
}
</script>

<style scoped>
    .niveis {
        padding: 50px 10px;
    }

    .row {
        margin: 0;
    }

    .nivel {
        background-color: var(--cinza-claro);
        border: 2px solid var(--dourado);
        border-radius: 20px;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        overflow: hidden;
    }

    .nivel-img-container {
        width: 100%;
        min-height: 200px;
        max-height: 200px;
        overflow: hidden;
    }

    .nivel img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px 20px 0 0;
    }

    .conteudo {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
    }

    .botao-visita {
        background-color: var(--verde);
        color: white;
        font-size: 1.1em;
        font-weight: 500;
        padding: 7px 15px;
        border: none;
        border-radius: 20px;
        margin-top: 10px;
    }

    .botao-visita:hover {
        transition: 0.3s ease, transform 0.3s ease;
        transform: scale(1.1);
        box-shadow: 0 4px 10px var(--dourado);
    }

    @media (min-width: 768px) {
        .nivel {
            flex-direction: row;
            height: auto;
        }

        .nivel-img-container {
            width: 40%;
            min-height: 100%;
            max-height: none;
        }

        .nivel img {
            border-radius: 20px 0 0 20px;
        }

        .conteudo {
            width: 60%;
            padding: 20px;
        }
    }

    @media (max-width: 767px) {
        .nivel-img-container {
            max-height: 200px;
        }

        .conteudo {
            padding: 15px;
        }

        .botao-visita {
            width: 100%;
        }
    }
</style>