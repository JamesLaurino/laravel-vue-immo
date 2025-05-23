<script setup>
import NavigationBar from "@/Components/share/NavigationBar.vue";
import {Link} from "@inertiajs/vue3";
import Carousel from "@/Components/house/Carousel.vue";

const props = defineProps({
    house:Object,
    address:Object
})

</script>

<template>

    <NavigationBar />

    <Carousel :house="house"/>
    <div class="container d-flex justify-content-center mt-3" style="max-width: 350px;">
        <div class="mr-5">
            <p class="lead">Info :</p>
            <br>
            <p> {{house.title}} </p>
            <p>Price : {{house.price}}</p>
            <p>Rooms : {{house.rooms}}</p>
            <p>surface : {{house.surface}}</p>
            <p>description : {{house.description}}</p>
        </div>
        <div>
            <p class="lead">Address : </p>
            <br>
            <p>Rue : {{address.street}}</p>
            <p>Boite : {{address.bte}}</p>
            <p>City : {{address.city}}</p>
            <p>code : {{address.code}}</p>
            <p>Country : {{address.country}}</p>
        </div>
    </div>
    <div class="container d-flex justify-content-center mt-3">
        <Link class="btn btn-dark" :href="route('house.index')"> back </Link>
    </div>
</template>

<style scoped>

</style>
