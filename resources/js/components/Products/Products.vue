<template>
    <div class="flex flex-col items-center bg-gray-100">
        <h4 class="text-xl font-semibold mb-4">Products</h4>
        <div v-if="items.length === 0" class="text-center text-gray-500">
            <p>No products found for this category.</p>
        </div>
        <div class="container mx-auto p-5 flex flex-wrap justify-center">
            <div
                v-for="item in items"
                :key="item.id"
                class="item border border-gray-300 rounded-lg bg-white shadow-md m-5 p-4 w-64"
            >
                <img :src="item.path" :alt="item.name" class="max-w-full rounded-lg mb-2">
                <h3 class="text-pink-500 text-lg">{{ item.name }}</h3>
                <p class="text-gray-600">{{ item.category }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'Products',
    data() {
        return {
            items: [], // Holds product data
        };
    },
    watch: {
        // Re-fetch data when route changes
        '$route.params.category': 'fetchProducts',
    },
    mounted() {
        this.fetchProducts();
    },
    methods: {
        async fetchProducts() {
            try {
                const category = this.$route.params.category;
                const response = await axios.get(category ? `/api/products/${category}` : '/api/images');
                this.items = response.data;
            } catch (error) {
                console.error('Error fetching products:', error);
                this.items = []; // Clear items if there's an error
            }
        },
    },
};
</script>

<style>
.item img {
    max-width: 100%;
    border-radius: 10px;
}
</style>
