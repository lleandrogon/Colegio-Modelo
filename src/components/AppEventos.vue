<template>
    <section class="eventos">
        <h2 class="titulo text-center mb-5">Eventos da Escola</h2>

        <div id="carouselExampleIndicators" class="carousel slide px-5">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://static.todamateria.com.br/upload/fe/ir/feira-de-ciencias-og.jpg" class="imagem" alt="Feira de Ciências">
                </div>
                <div class="carousel-item">
                <img src="https://www.aguasdelindoia.sp.gov.br/admin/globalarq/noticia/noticia/651_366/f373942fb2c4e99422d194dcc0de130b.jpeg" class="imagem" alt="Semana Cultural">
                </div>
                <div class="carousel-item">
                <img src="https://galois.com.br/wp-content/uploads/2022/03/App-Torneio-Interno-Galois-1.png" class="imagem" alt="Jogos Internos">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</template>

<script>
export default {
    name: "AppEventos",
};
</script>

<style scoped>
    .eventos {
        background: linear-gradient(135deg, var(--azul), var(--verde));
        color: var(--branco);
        padding: 40px 0;
    }

    .imagem {
        display: block;
        width: 370px;
        height: 450px;
        margin: 0 auto;
        border: 5px solid var(--azul);
        border-radius: 20px;
    }

    @media (min-width: 768px) {
        .imagem {
            width: 700px;
            height: 550px;
        }
    }

    @media (min-width: 1200px) {
        .imagem {
            width: 800px;
        }
    }
</style>
