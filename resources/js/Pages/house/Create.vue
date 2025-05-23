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
    form.bte = bte.value;
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
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input v-model="title" type="text" class="form-control" id="title" placeholder="Title"/>
                    <div class="text-danger" v-if="form.errors.title">{{ form.errors.title }}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <textarea v-model="description" type="text" class="form-control" id="description"/>
                    <div class="text-danger"  v-if="form.errors.description">{{ form.errors.description }}</div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="rooms">Rooms</label>
                    <input v-model="rooms" type="number" class="form-control" id="rooms" >
                    <div class="text-danger"  v-if="form.errors.rooms">{{ form.errors.rooms }}</div>
                </div>
                <div class="form-group col-md-4">
                    <label for="surface">Surface</label>
                    <input v-model="surface" type="number" class="form-control" id="surface">
                    <div class="text-danger" v-if="form.errors.surface">{{ form.errors.surface }}</div>

                </div>
                <div class="form-group col-md-4">
                    <label for="price">Price</label>
                    <input v-model="price" type="number" class="form-control" id="price">
                    <div class="text-danger"  v-if="form.errors.price">{{ form.errors.price }}</div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="city">City</label>
                    <input v-model="city"  type="text" class="form-control" id="city">
                    <div class="text-danger"  v-if="form.errors.price">{{ form.errors.price }}</div>
                </div>
                <div class="form-group col-md-2">
                    <label for="country">Country</label>
                    <input v-model="country" maxlength="2"  type="text" class="form-control" id="country">
                    <div class="text-danger"  v-if="form.errors.country">{{ form.errors.country }}</div>
                </div>
                <div class="form-group col-md-3">
                    <label for="street">Street</label>
                    <input v-model="street"  type="text" class="form-control" id="street">
                    <div class="text-danger"  v-if="form.errors.street">{{ form.errors.street }}</div>
                </div>
                <div class="form-group col-md-2">
                    <label for="code">Code</label>
                    <input v-model="code"  type="text" class="form-control" id="code">
                    <div class="text-danger"  v-if="form.errors.code">{{ form.errors.code }}</div>
                </div>
                <div class="form-group col-md-2">
                    <label for="bte">Boite</label>
                    <input v-model="bte" type="text" class="form-control" id="bte">
                    <div class="text-danger"  v-if="form.errors.bte">{{ form.errors.bte }}</div>
                </div>
            </div>
            <div class="mb-3">
                <input type="file" multiple @change="handleFiles" />
            </div>
            <button @click="submit" type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</template>

<style scoped>

</style>
