<template>
  <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://img.freepik.com/premium-photo/smiling-school-girl-reading-book-sitting-near-white-board-classroom_123211-2139.jpg" class="imagem d-block" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="https://affinityworkforce.com/wp-content/uploads/2024/05/2149272223.jpg" class="imagem d-block" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="https://epe.brightspotcdn.com/dims4/default/121ca6d/2147483647/strip/true/crop/3467x1950+0+249/resize/1200x675!/quality/90/?url=https%3A%2F%2Fepe-brightspot.s3.us-east-1.amazonaws.com%2F53%2F66%2Fb17323e84e668e02e25d5b4a7a93%2Fteacher-students-classroom.jpg" class="imagem d-block" alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</template>

<script>
import { Carousel } from "bootstrap";

export default {
    name: "AppHome",

    mounted() {
        const carouselElement = document.querySelector("#homeCarousel");
        if (carouselElement) {
            new Carousel(carouselElement);
        }
    }
}
</script>

<style scoped>
    .imagem {
        width: 100%;
        height: 600px;
    }

    @media (min-width: 768px) {
        .imagem {
            height: 800px;
        }

        .carousel-control-prev-icon {
            margin-right: 100px;
        }

        .carousel-control-next-icon {
            margin-left: 100px;
        }
    }

    @media (min-width: 1200px) {
        
    }
</style>