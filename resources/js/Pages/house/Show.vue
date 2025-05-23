<script setup>
import NavigationBar from "@/Components/share/NavigationBar.vue";
import {Link, router} from "@inertiajs/vue3";
import Carousel from "@/Components/house/Carousel.vue";

const props = defineProps({
    house:Object,
    address:Object
})

function deleteHouse() {
    if (confirm('Are you sure you want to delete this house?')) {
        router.delete(route('house.destroy', props.house.id))
    }
}
</script>


<template>

    <NavigationBar />

    <div class="container d-flex justify-content-center mb-3">
        <Link class="btn btn-dark mt-3 mr-2" :href="route('house.index')"> back </Link>
        <button class="btn btn-dark mt-3" @click="deleteHouse" > delete </button>
        <Link class="btn btn-warning mt-3 ml-2" :href="route('house.edit', house.id)"> update </Link>
    </div>

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
</template>
