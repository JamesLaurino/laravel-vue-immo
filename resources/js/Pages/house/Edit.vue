<script setup>
import NavigationBar from "@/Components/share/NavigationBar.vue";
import {router, useForm} from "@inertiajs/vue3";

const props = defineProps({
    house: Object,
    address: Object
})

const form = useForm({
    id: '',
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
    form.id = props.house.id;
    form.title = props.house.title;
    form.price = props.house.price;
    form.rooms = props.house.rooms;
    form.surface = props.house.surface;
    form.description = props.house.description;
    form.city = props.address.city;
    form.country = props.address.country;
    form.street = props.address.street;
    form.code = props.address.code;
    form.bte = props.address.bte;

    form.submit('post', '/house/update', {
        method: 'put',
        forceFormData: true,
        onSuccess: () => {
            console.log("Success !");
        },
        onError: (errors) => {
            console.error("Erreur dans le formulaire :", errors);
        }
    });


}

function handleFiles(event) {
    const selectedFiles = event.target.files
    form.files.push(selectedFiles);
}

function deleteHouse(id) {
    if (confirm('Are you sure you want to delete this house?')) {
        router.delete(route('image.destroy', id))
    }
}

</script>

<template>
    <NavigationBar/>
    <div class="container d-flex justify-content-center mt-3">
        <h1 class="h3">Formulaire d'édition pour la {{house.title}}</h1>
    </div>
    <div class="container d-flex justify-content-center mt-5">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input v-model="house.title" type="text" class="form-control" id="title" placeholder="Title"/>
                    <div class="text-danger" v-if="form.errors.title">{{ form.errors.title }}</div>
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <textarea v-model="house.description" type="text" class="form-control" id="description"/>
                    <div class="text-danger"  v-if="form.errors.description">{{ form.errors.description }}</div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="rooms">Rooms</label>
                    <input v-model="house.rooms" type="number" class="form-control" id="rooms" >
                    <div class="text-danger"  v-if="form.errors.rooms">{{ form.errors.rooms }}</div>
                </div>
                <div class="form-group col-md-4">
                    <label for="surface">Surface</label>
                    <input v-model="house.surface" type="number" class="form-control" id="surface">
                    <div class="text-danger" v-if="form.errors.surface">{{ form.errors.surface }}</div>

                </div>
                <div class="form-group col-md-4">
                    <label for="price">Price</label>
                    <input v-model="house.price" type="number" class="form-control" id="price">
                    <div class="text-danger"  v-if="form.errors.price">{{ form.errors.price }}</div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="city">City</label>
                    <input v-model="address.city" type="text" class="form-control" id="city">
                    <div class="text-danger"  v-if="form.errors.price">{{ form.errors.price }}</div>
                </div>
                <div class="form-group col-md-2">
                    <label for="country">Country</label>
                    <input v-model="address.country" maxlength="2"  type="text" class="form-control" id="country">
                    <div class="text-danger"  v-if="form.errors.country">{{ form.errors.country }}</div>
                </div>
                <div class="form-group col-md-3">
                    <label for="street">Street</label>
                    <input v-model="address.street"  type="text" class="form-control" id="street">
                    <div class="text-danger"  v-if="form.errors.street">{{ form.errors.street }}</div>
                </div>
                <div class="form-group col-md-2">
                    <label for="code">Code</label>
                    <input v-model="address.code"  type="text" class="form-control" id="code">
                    <div class="text-danger"  v-if="form.errors.code">{{ form.errors.code }}</div>
                </div>
                <div class="form-group col-md-2">
                    <label for="bte">Boite</label>
                    <input v-model="address.bte" type="text" class="form-control" id="bte">
                    <div class="text-danger"  v-if="form.errors.bte">{{ form.errors.bte }}</div>
                </div>
            </div>
                <div class="container d-flex mb-3">
                    <div class="mr-3" v-for="(image, index) in house.images" :key="index">
                        <img :src="'/storage/upload/' + image.url"
                             style="width: 200px; height: 150px; object-fit: cover;" />
                        <div class="text-danger"  v-if="form.errors.files">{{ form.errors.files }}</div>

                        <a class="btn btn-danger mt-1
                            rounded-pill d-flex justify-content-center align-items-center p-0"
                            style="width: 25px; height: 25px;"
                            @click="deleteHouse(image.id)"
                        >- </a>
                    </div>
                    <div class="container d-flex flex-column">
                        <input type="file" multiple @change="handleFiles" />
                        <div class="mt-3">
                            <button @click="submit" type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</template>

<style scoped>

</style>
