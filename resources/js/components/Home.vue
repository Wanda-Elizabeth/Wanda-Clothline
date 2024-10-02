<template>
    <div class="flex flex-col items-center bg-gray-100">
        <header class="bg-pink-300 w-full py-5 text-2xl text-white text-center">
            Wanda's Cute Clothing Line
        </header>

        <div class="container mx-auto p-5 flex flex-wrap justify-center">
            <div v-for="item in items" :key="item.name" class="item border border-gray-300 rounded-lg bg-white shadow-md m-5 p-4 w-64">
                <img :src="item.image" :alt="item.name" class="max-w-full rounded-lg mb-2">
                <h3 class="text-pink-500 text-lg">{{ item.name }}</h3>
                <p class="text-gray-600">{{ item.description }}</p>
            </div>
        </div>

        <footer class="bg-pink-300 w-full py-3 text-sm text-white text-center fixed bottom-0">
            &copy; 2024 Wanda's Cute Clothing Line. All rights reserved.October
        </footer>
    </div>
</template>

<script>
export default {
    name: 'Home',
    data() {
        return {
            items: [
                {
                    name: "Floral Dress",
                    image: "https://images.pexels.com/photos/970393/pexels-photo-970393.jpeg?auto=compress&cs=tinysrgb&w=300",
                    description: "A beautiful floral dress perfect for sunny days.",
                },
                {
                    name: "Striped Top",
                    image: "https://images.pexels.com/photos/5405652/pexels-photo-5405652.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                    description: "A cute and comfy striped top for casual wear.",
                },
                {
                    name: "Denim Shorts",
                    image: "https://images.pexels.com/photos/17135740/pexels-photo-17135740/free-photo-of-new-women-s-shorts.jpeg?auto=compress&cs=tinysrgb&w=300",
                    description: "Stylish denim shorts for a relaxed look.",
                },
            ]
        };
    }
}
</script>

<style>
.item img {
    max-width: 100%;
    border-radius: 10px;
}
</style>
