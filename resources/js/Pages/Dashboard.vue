<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
import NavLink from '@/Components/NavLink.vue';

const props = defineProps({
    clients: Array,
    users: Array
})

const clientCount = computed(() => props.clients ? props.clients.length : 0);
const userCount = computed(() => props.users ? props.users.length : 0);

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl p-2 rounded-xl text-center text-gray-100 leading-tight mb-10" style="font-size: 30px;">Dashboard</h2>
                <div class="overflow-hidden shadow-sm sm:rounded-lg text-white" style="font-size: 40px;">
                    <div style="font-size: 30px;" class="text-center">
                        Music instrument records provide valuable insights into the diverse world of music and its evolution over time. These records document the vast array of instruments used across various cultures and periods, shedding light on the creativity and ingenuity of human expression through music. From ancient artifacts like bone flutes and drums to the complex orchestral instruments of the classical era and the revolutionary electronic synthesizers of the modern age, music instrument records trace the journey of human musical exploration and innovation.
 <br> <br> <br>
Through meticulous cataloging and preservation efforts, music instrument records also serve as essential resources for musicians, scholars, and historians. They offer a window into the technical specifications, design nuances, and historical context of each instrument, enriching our understanding of musical traditions and performance practices. Additionally, these records aid in the restoration of antique instruments and inspire contemporary instrument makers to draw inspiration from the past while pushing the boundaries of musical instrument design. By safeguarding these records, we ensure that the legacy of music and its diverse instruments continues to resonate with future generations, fostering a deeper appreciation for the artistry and cultural significance of music worldwide.
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
