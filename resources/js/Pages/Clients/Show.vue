<template>
    <Head title="View Client" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl p-2 rounded-xl text-center text-gray-100 leading-tight mb-10" style="font-size: 30px;">{{ client.name }}</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div>
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

                                </div>

                            </div>
                        </div>
                            <div class="flex justify-center" style="font-size: 20px;">
                                <Link class="bg-slate-400 w-40 text-center m-10 shadow-lg p-3 rounded-2xl text-white hover:bg-slate-700 duration-75 mr-1 mb-2" :href="'/clients/' + client.id" method="delete" as="button">Delete</Link>
                                <a class="bg-slate-400 w-40 text-center m-10 shadow-lg p-3 rounded-2xl text-white hover:bg-slate-700 duration-75 mr-1 mb-2" :href="'/clients/edit/' + client.id" as="button">Edit</a>
                                <a :href="'/clients/email/' + client.id" class="bg-slate-500 w-40 text-center m-10 shadow-lg p-3 rounded-2xl text-white hover:bg-slate-700 duration-75 mr-1 mb-2" as="button">Send Email</a>
                                <a as="button" :href="'/clients/pdf/' + client.id" target="_blank" class="bg-slate-500 w-40 text-center m-10 shadow-lg p-3 rounded-2xl text-white hover:bg-slate-700 duration-75 mb-2">Export PDF</a>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue'

const page = usePage()
const user = computed(() => page.props.auth.user)

const props = defineProps({
    'client': Object
})
</script>
