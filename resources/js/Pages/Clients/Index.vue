<template>

    <Head title="Clients" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl p-2 rounded-xl text-center text-gray-100 leading-tight mb-10" style="font-size: 30px;">Instrument</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div>
                        <div>
                            <input style="width: 600px;" type="text" @keydown.enter="search($event)" name="" id="" class="mb-10 rounded-xl shadow-lg text-white bg-green-800 border-green-500" placeholder="Search Instrument">
                            <Link href="/clients/create" class="bg-green-800 shadow-lg mt-2 text-dark rounded-xl hover:bg-green-900 duration-100 hover:shadow-none p-5 border-green-500 border-2 float-right" style="font-size: 20px;">Create Instrument</Link>
                        </div>
                        <div class="w-[49%] mb-4" v-for="client in clients" :key="client.id">
                            <ClientCard :client="client" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

</template>

<script setup>
import { computed } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClientCard from '@/Components/ClientCard.vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    clients: Array
})

function search(e) {
    router.visit('/clients/search/' + e.target.value, {
        only: ['clients']
    })
}

const clientCount = computed(() => props.clients.length);

</script>

<style>
    .res_btn{
        background-color: green;
        color: white;
        border-radius: 20px;
        padding: 10px;

    }
</style>
