<template>
            <div class="flex flex-col items-center ">
                <header class="bg-pink-300 w-full py-5 text-2xl text-white mx-auto p-5 flex flex-wrap justify-center">
                    <div class="flex  items-center">
                        <p class="ml-4">Wanda's Cute Clothing Line</p>
                        <div class="flex ">
                            <navbar></navbar>
                        </div>
                    </div>
                </header>
                <router-view class="mb-4"></router-view>


        <footer class="bg-pink-300 w-full py-3 text-sm text-white text-center fixed bottom-0">
            &copy; 2024 Wanda's Cute Clothing Line. All rights reserved.October
        </footer>
    </div>
</template>

<script>
import Navbar from "./Navmenu/Navbar.vue";

export default {
    name: 'Home',
    components: {Navbar},
    data() {
        return {

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
