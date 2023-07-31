<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    owner: '',
    instrument: '',
    phone: '',
    email: '',
    description: '',
    pic: null
});

function submit() {
    form.post('/clients/');
}

</script>

<template>
    <Head title="Create Client" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl p-2 rounded-xl text-center text-gray-100 leading-tight mb-10" style="font-size: 30px;">Add Instrument</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div style="font-size: 20px; display: grid; place-content: center;">
                        <form @submit.prevent="submit" class="flex text-center" style="width: 600px;">
                            <div class="flex-1 pr-4">

                                <div class="form-field text-black " >
                                    <label for="name">Owner</label>
                                    <input required type="text" id="name" v-model="form.owner" class="border-0 text-white" style="background-color: transparent; border-bottom: 1px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="email">Instrument</label>
                                    <input required type="text" id="email" v-model="form.instrument" class="border-0 text-white" style="background-color: transparent; border-bottom: 1px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="address">Phone</label>
                                    <input required type="text" id="phone" v-model="form.phone" class="border-0 text-white" style="background-color: transparent; border-bottom: 1px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="phone">Email</label>
                                    <input required type="text" id="email" v-model="form.email" class="border-0 text-white" style="background-color: transparent; border-bottom: 1px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="balance">Description</label>
                                    <input required type="text" id="description" v-model="form.description" class="border-0 text-white" style="background-color: transparent; border-bottom: 1px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="pic">Instrument Picture</label>
                                    <input required type="file" @input="form.pic = $event.target.files[0]" class="h-full border-gray-400 rounded text-center" accept="image/png" />
                                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                        {{ form.progress.percentage }}%
                                    </progress>
                                </div>
                                <button class="mt-2 bg-green-700 text-white rounded-2xl p-5 hover:bg-green-500 hover:text-black duration-200" type="submit">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
