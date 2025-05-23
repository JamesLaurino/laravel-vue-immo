<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    HouseList: Array
})
</script>

<template>
    <div
         class="col-md-4 mb-4 shadow mr-3 pokemon-card" style="max-width: 350px;"
         v-for="house in HouseList" :key="house.id">
        <div class="container d-flex justify-content-center">
            <div class="card p-3" style="width: 15rem; height: 15rem;">
                <img :src="'/storage/upload/' + house.images[0].url"  width="50px" height="50px" class="card-img-top bg-dark" alt="...">
                <div class="card-body">
                    <p class="card-text"> {{house.title}} </p>
                    <p>Price : {{house.price}}</p>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center m-3">
            <Link class="btn btn-dark" :href="route('house.show',house.id)"> Detail </Link>
        </div>
    </div>
</template>

<style scoped>

</style>
