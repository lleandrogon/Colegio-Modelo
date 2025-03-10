<template>
    <section class="convite">
        <h2 class="titulo">Venha estudar conosco</h2>
        <div class="row justify-content-center mt-5">
            <div v-for="destaque in destaques" :key="destaque.id" class="col-12 col-md-6 col-xl-4 d-flex justify-content-center my-2">
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
                    descricao: "Nosso compromisso com a excelência educacional é refletido na conquista do 1º lugar no ENEM. Este resultado é fruto de um ensino de qualidade, que prepara nossos alunos para enfrentar os maiores desafios acadêmicos e alcançar o sucesso em suas vidas profissionais. Além disso, nossa abordagem pedagógica foca no desenvolvimento integral do estudante, incentivando habilidades críticas. Com um corpo docente altamente qualificado e recursos modernos, garantimos que nossos alunos estejam sempre um passo à frente."
                },
                {
                    id: 2,
                    icon: "fa-solid fa-chalkboard-teacher",
                    titulo: "Professores Qualificados",
                    descricao: "Nosso corpo docente é composto por professores altamente qualificados, com vasta experiência no ensino e com constante atualização sobre as melhores práticas pedagógicas. Acreditamos que um bom professor é essencial para formar cidadãos críticos, preparados para enfrentar desafios no mercado de trabalho e na vida acadêmica. A dedicação de nossos professores é um dos pilares que sustentam o nosso sucesso educacional, e sua constante busca por novas metodologias e inovações pedagógicas torna o aprendizado mais eficaz e dinâmico."
                },
                {
                    id: 3,
                    icon: "fa-solid fa-book-open",
                    titulo: "Biblioteca Moderna",
                    descricao: "Nossa biblioteca é um ambiente de aprendizagem dinâmico, com um acervo atualizado e diversificado, incluindo livros, revistas e recursos digitais que atendem às necessidades de todos os alunos. Além disso, oferecemos espaços de estudo individuais e colaborativos, onde os estudantes podem se concentrar ou trabalhar em grupo, acessando tecnologias de ponta e materiais complementares ao conteúdo curricular. A biblioteca também oferece workshops e palestras sobre temas acadêmicos e culturais."
                },
                {
                    id: 4,
                    icon: "fa-solid fa-users",
                    titulo: "Ambiente Escolar Inclusivo",
                    descricao: "Nosso ambiente escolar é projetado para promover a inclusão e a colaboração entre alunos de diferentes origens e habilidades. Acreditamos na importância da diversidade para o desenvolvimento humano, e por isso, incentivamos o trabalho em equipe, o respeito às diferenças e a construção de um ambiente onde todos se sintam acolhidos e respeitados. Criamos um espaço que favorece o aprendizado, o crescimento pessoal e o desenvolvimento social."
                },
                {
                    id: 5,
                    icon: "fa-solid fa-laptop-code",
                    titulo: "Tecnologia de Ponta",
                    descricao: "Utilizamos tecnologias de ponta para proporcionar aos nossos alunos uma experiência educacional imersiva e de alta qualidade. Nossas salas de aula são equipadas com ferramentas digitais modernas, como quadros interativos, tablets e plataformas de ensino online, garantindo que os alunos tenham acesso aos recursos mais inovadores para o aprendizado. Além disso, oferecemos cursos de programação, robótica e outras áreas tecnológicas, permitindo que os estudantes desenvolvam habilidades práticas que os preparem para o mercado de trabalho."
                },
                {
                    id: 6,
                    icon: "fa-solid fa-network-wired",
                    titulo: "Parcerias com Universidades",
                    descricao: "Nossa escola mantém parcerias estratégicas com empresas e universidades renomadas, proporcionando aos nossos alunos estágios, intercâmbios e programas de capacitação. Essas parcerias abrem portas para novas oportunidades, ajudando os estudantes a expandir suas redes profissionais e a estarem preparados para os desafios do mercado de trabalho."
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
        padding: 30px;
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