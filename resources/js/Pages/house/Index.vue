<script setup>
 import NavigationBar from "@/Components/share/NavigationBar.vue";
 import HouseCard from "@/Components/HouseCard.vue";

 const props = defineProps({
     houses: Array
 })
</script>

<template>
    <NavigationBar/>
    <div class="d-flex justify-content-center mt-3 mb-1">
        <h1 class="h3"> James Immo</h1>
    </div>

    <div class="container my-4 mt-5">
        <div class="row">
            <HouseCard :HouseList="houses"/>
        </div>
    </div>
</template>

<style scoped>

</style>
