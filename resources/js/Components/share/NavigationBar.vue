<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    user:Object
})

</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand p-1">
            <img src="/storage/upload/logo.jpg" width="30" height="30" class="d-inline-block rounded align-top" alt=""></img>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <Link class="nav-link" :href="route('house.index')"> Accueil </Link>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Actions
                    </a>
                    <div class="dropdown-menu">
                        <Link v-if="user != null" class="dropdown-item" :href="route('house.create')"> Create </Link>
                        <a class="dropdown-item" href="#">Update</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </li>
            </ul>
            <div v-if="user == null" class="my-2 my-lg-0 mr-3">
                <Link class="text-white" :href="route('login')"> Login </Link>
            </div>
            <div v-else class="my-2 my-lg-0 mr-3">
                <Link class="text-white" :href="route('house.index')"> Déconnection </Link>
            </div>
        </div>
    </nav>
</template>

<style scoped>

</style>
