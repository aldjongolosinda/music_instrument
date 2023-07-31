<template>
<div style="width: 1216px; cursor: pointer;" @click="open(client)">
    <div class="flex">
        <div class="">
            <img class="rounded-lg" style=" width: 1216px; height: 600px;" :src="client.picUrl" alt="Product photo">
            <div style="box-shadow: 30px 0px 20px 5px rgba(0, 0, 0, 0.519); height: 585px; margin-bottom: -550px; font-size: 30px; background-color: rgba(0, 0, 0, 0.656); width: 600px; transform: translateY(-600px); z-index: 1;" class="p-5 rounded-lg m-2">
                <b>Owner:</b> {{ client.owner }} <br> <br>
                <b>Instrument:</b> {{ client.instrument }} <br> <br>
                <b>Phone:</b> {{ client.phone }} <br> <br>
                <b>Email:</b> {{ client.email }} <br> <br>
                <b>Description:</b>
                <textarea name="" id="" cols="40" rows="5" class="border-0" style="font-size: 25px; background-color: transparent; ">{{ client.description }}</textarea>
            </div>
            <div style="transform: translateY(-120px); margin-bottom: -125px; " class="p-5 rounded-xl flex justify-center ms-80">
                    <label :for="'enabled' + '-' + client.id" class="switch">
                        <input type="checkbox" :id="'enabled' + '-' + client.id" :checked="client.enabled" @change.prevent="toggleEnabled(client)">
                        <span class="slider round"></span>
                    </label> <br>
                    <h1 class="p-2 rounded-lg" style="transform: translateY(-15px); font-size: 20px; margin-left: 15px; background-color: rgba(0, 0, 0, 0.553);">
                        <b>{{ client.enabled ? 'Not Available' : 'Available' }}</b>
                    </h1>
            </div>
        </div>

    </div>
</div>
</template>
<style scoped>
    .switch {
    position: relative;
    display: inline-block;
    width: 100px;
    height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    /* The slider */
    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #000000;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 5px;
    bottom: 4px;
    background-color: rgb(255, 255, 255);
    -webkit-transition: .4s;
    transition: .4s;
    }


    input:checked + .slider {
    background-color: #000000;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px hsl(0, 0%, 0%);
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26spx);
    -ms-transform: translateX(26px);
    transform: translateX(64px);
    }


    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    }
</style>

<script setup>
import { router } from '@inertiajs/vue3';


const props = defineProps({
    client: Object
})

function open(client) {
    router.visit('/clients/' + client.id)
}


function toggleEnabled(client) {
    router.visit('/clients/toggle/' + client.id,{
        method: 'post',
        preserveScroll: true
    })
}

</script>
