<script setup>
const props = defineProps({
    house: Array
})

</script>

<template>
    <div class="carousel-container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item"
                     v-for="(image, index) in house.images" :key="index" :class="{ active: index === 0 }">
                    <img :src="'/storage/upload/' + image.url" class="carousel-img" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</template>

<style scoped>
.carousel-container {
    max-width: 500px;
    margin: auto;
    position: relative;
}

.carousel {
    position: relative;
}

.carousel-inner {
    width: 100%;
    height: 250px; /* taille fixe */
    overflow: hidden;
}

.carousel-item {
    width: 100%;
    height: 100%;
}

.carousel-img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* ou "contain" si tu veux voir tout sans découper */
    display: block;
    margin: 0 auto;
}

/* Boutons */
.carousel-control-prev,
.carousel-control-next {
    width: 10%;
    top: 50%;
    transform: translateY(-50%);
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    background-size: 60% 60%;
    width: 40px;
    height: 40px;
}
</style>
