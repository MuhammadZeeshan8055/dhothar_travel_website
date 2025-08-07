<template>
  <Carousel
    :autoplay="5000"
    :wrap-around="true"
    :transition="800"
  >
    <Slide v-for="(image, index) in images" :key="index">
      <img :src="image" alt="Slide Image" class="carousel-img" />
    </Slide>
  </Carousel>
</template>

<script>
import { Carousel, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'

export default {
  name: 'ImageSlider',
  components: { Carousel, Slide },
  data() {
    return {
      images: [
        '/assets/img/rev-slider/1/traveling_7.jpg',
        '/assets/img/rev-slider/1/dubai1.jpg',
        '/assets/img/rev-slider/1/elephant1.jpeg',
        '/assets/img/rev-slider/1/trav.jpg',
        '/assets/img/rev-slider/1/sea.jpeg',
        '/assets/img/rev-slider/1/um.jpeg',
        '/assets/img/rev-slider/1/park.jpeg',
        '/assets/img/rev-slider/1/snow_1.jpeg',
        '/assets/img/rev-slider/1/snow_1.jpg',
        '/assets/img/rev-slider/1/traveling_8.jpg',
        '/assets/img/rev-slider/1/traveling.jpg',
      ]
    }
  }
}
</script>

<style scoped>
.carousel-img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  border-radius: 8px;
}
</style>
