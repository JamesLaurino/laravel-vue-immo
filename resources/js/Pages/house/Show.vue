<script setup>
import NavigationBar from "@/Components/share/NavigationBar.vue";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    house:Object,
    address:Object
})

</script>

<template>
    <NavigationBar/>
    <div class="container d-flex justify-content-center mt-3" style="max-width: 350px;">
        <div class="container d-flex justify-content-center">
            <div class="card p-3" style="width: 15rem; height: 32rem;">
                <img :src="'/storage/upload/' + house.images[0].url"  width="50px" height="50px" class="card-img-top bg-dark" alt="...">
                <div class="card-body">
                    <p class="card-text"> {{house.title}} </p>
                    <p>Price : {{house.price}}</p>
                    <p>Rooms : {{house.rooms}}</p>
                    <p>surface : {{house.surface}}</p>
                    <p>description : {{house.description}}</p>
                    <br>
                    <p>Address : </p>
                    <p>Rue : {{address.street}}</p>
                    <p>Boite : {{address.bte}}</p>
                    <p>City : {{address.city}}</p>
                    <p>code : {{address.code}}</p>
                    <p>Country : {{address.country}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mt-3">
        <Link class="btn btn-dark" :href="route('house.index')"> back </Link>
    </div>
</template>

<style scoped>

</style>
