<template>
    <div class="flex flex-col items-center">
        <header class="bg-pink-300  w-full py-5 text-2xl text-white mx-auto p-5 flex flex-wrap justify-between items-center">
            <div class="flex items-center">
                <p>Wanda's</p>
            </div>

            <div class="flex items-center">
                <button @click="toggleMenu" class="lg:hidden text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

                <nav class="hidden lg:flex navbar navbar-expand-lg w-full relative px-md-5">
                    <router-link to="/" class="text-white hover:text-pink-700 mx-2">Home</router-link>
                    <router-link to="/about-us" class="text-white hover:text-pink-700 mx-2">About Us</router-link>
                    <router-link to="/products" class="text-white hover:text-pink-700 mx-2">Products</router-link>
                    <router-link to="/contactus" class="text-white hover:text-pink-700 mx-2">Contact Us</router-link>
                </nav>
            </div>
        </header>

        <div v-if="isMenuOpen" class="lg:hidden w-full py-2 transition-all duration-300 relative">
            <div class="absolute inset-0 bg-pink-300 blur-2xl"></div>
            <div class="relative z-10 navbar-collapse">
                <nav class="flex flex-col items-start">
                    <router-link to="/" class="text-white hover:text-pink-700 py-2">Home</router-link>
                    <router-link to="/about-us" class="text-white hover:text-pink-700 py-2">About Us</router-link>
                    <router-link to="/products" class="text-white hover:text-pink-700 py-2">Products</router-link>
                    <router-link to="/contactus" class="text-white hover:text-pink-700 py-2">Contact Us</router-link>
                </nav>
            </div>
        </div>

        <footer class="bg-pink-300 w-full py-3 text-sm text-white text-center fixed bottom-0">
            &copy; 2024 Wanda's Cute Clothing Line. All rights reserved.
        </footer>
        <router-view class="mb-4"></router-view>

<!--        <footer class="bg-pink-300 w-full py-3 text-sm text-white text-center fixed bottom-0">-->
<!--            &copy; 2024 Wanda's Cute Clothing Line. All rights reserved. October-->
<!--        </footer>-->
    </div>
</template>

<script>
import Navbar from "./Navmenu/Navbar.vue";
import AboutUs from "./About/AboutUs.vue";
import Products from "./Products/Products.vue";
import Contactus from "./Contacts/Contactus.vue";

export default {
    name: 'Home',
    components: { Navbar, AboutUs, Products, Contactus },
    data() {
        return {
            isMenuOpen: false,
        };
    },
    methods: {
        toggleMenu() {
            this.isMenuOpen = !this.isMenuOpen;
        }
    }
}
</script>

<style>
.item img {
    max-width: 100%;
    border-radius: 10px;
}

/* Optional: Smooth transition for the collapsible menu */
.navbar-collapse {
    transition: max-height 0.5s ease, opacity 0.5s ease;
}
</style>
