<script setup>
 import NavigationBar from "@/Components/share/NavigationBar.vue";

 const props = defineProps({
     houses: Array
 })
</script>

<template>
    <NavigationBar/>
    <div class="d-flex justify-content-center mt-3 mb-1">
        <h1 class="h3"> James Immo</h1>
    </div>
    <div class="container d-flex justify-content-center">
        <div v-for="house in houses" :key="house.id">
            <p>Price : {{house.price}}</p>
            <p>Name : {{house.title}}</p>
            <p>Surface : {{house.surface}}</p>
            <p>Description : {{house.description}}</p>
            <p>Rooms : {{house.rooms}}</p>
        </div>
    </div>
</template>

<style scoped>

</style>
