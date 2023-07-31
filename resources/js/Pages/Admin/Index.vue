<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
// import MailCard from '@/Components/MailCard.vue';

const form = useForm({
    subject: '',
    message: ''
})

const submit = () => {
    form.post('/admin/send-mail')

    form.subject = ''
    form.message = ''
}

const props = defineProps({
    message: Object
})


</script>

<template>


    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl  p-2 rounded-xl text-center text-gray-100 leading-tight mb-10" style="font-size: 30px;">Send Message To All Owners</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div style="font-size: 20px; display: grid; place-content: center;">
                        <form @submit.prevent="submit" class="flex text-center" style="width: 600px;">
                            <div class="flex-1 pr-4">

                                <div class="form-field text-black " >
                                    <label for="name">Notification</label>
                                    <input required type="text" id="name" v-model="form.subject" class="border-0 text-white" style="background-color: transparent; border-bottom: 1px solid white;">
                                </div>

                                <div class="form-field text-black">
                                    <label for="email">Message</label>
                                    <input required type="text" id="email" v-model="form.message" class="border-0 text-white" style="background-color: transparent; border-bottom: 1px solid white;">
                                </div>

                                <button class="mt-2 bg-green-700 text-white rounded-2xl p-5 hover:bg-green-500 hover:text-black duration-200" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
