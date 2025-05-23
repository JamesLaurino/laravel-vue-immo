<script setup>

import NavigationBar from "@/Components/share/NavigationBar.vue";
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    title:'',
    price: 0,
    rooms: 0,
    surface: 0,
    description: '',
    city: '',
    country: '',
    street: '',
    code: '',
    bte:'',
    files: [],
})

function submit(event) {
    event.preventDefault();
    form.title = title.value;
    form.price = price.value;
    form.rooms = rooms.value;
    form.surface = surface.value;
    form.description = description.value;
    form.city = city.value;
    form.country = country.value;
    form.street = street.value;
    form.code = code.value;
    form.bte = bte.value
    form.post("/house")
}


function handleFiles(event) {
    const selectedFiles = event.target.files
    form.files.push(selectedFiles);
}

</script>

<template>
    <NavigationBar/>
    <div class="container d-flex justify-content-center mt-4">
        <h1 class="h1">Formulaire d'ajout d'une Maison</h1>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <form>
            <div class="mb-3">
                <input type="file" multiple @change="handleFiles" />
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input v-model="title" type="text" class="form-control" id="title" placeholder="Title"/>
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <textarea v-model="description" type="text" class="form-control" id="description"/>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="rooms">Rooms</label>
                    <input v-model="rooms" type="number" class="form-control" id="rooms" >
                </div>
                <div class="form-group col-md-4">
                    <label for="surface">Surface</label>
                    <input v-model="surface" type="number" class="form-control" id="surface">
                </div>
                <div class="form-group col-md-4">
                    <label for="price">Price</label>
                    <input v-model="price" type="number" class="form-control" id="price">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="city">City</label>
                    <input v-model="city"  type="text" class="form-control" id="city">
                </div>
                <div class="form-group col-md-2">
                    <label for="country">Country</label>
                    <input v-model="country"  type="text" class="form-control" id="country">
                </div>
                <div class="form-group col-md-3">
                    <label for="street">Street</label>
                    <input v-model="street"  type="text" class="form-control" id="street">
                </div>
                <div class="form-group col-md-2">
                    <label for="code">Code</label>
                    <input v-model="code"  type="text" class="form-control" id="code">
                </div>
                <div class="form-group col-md-2">
                    <label for="bte">Boite</label>
                    <input v-model="bte" type="text" class="form-control" id="bte">
                </div>
            </div>
            <button @click="submit" type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</template>

<style scoped>

</style>
