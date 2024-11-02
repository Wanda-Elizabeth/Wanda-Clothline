<template xmlns="http://www.w3.org/1999/html">
    <div class="flex   ">
        <nav class="navbar navbar-expand-lg position-absolute w-100 relative px-md-5 styl ">
            <router-link to="/" class="text-white hover:text-pink-700">Home</router-link>
            <router-link to="/about-us" class="text-white hover:text-pink-700">About Us</router-link>
            <router-link to="/products" class="text-white hover:text-pink-700">Products</router-link>
            <router-link to="/contactus" class="text-white hover:text-pink-700">Contact Us</router-link>
        </nav>
    </div>

</template>

<script>

import AboutUs from "../About/AboutUs.vue";
import Products from "../Products/Products.vue";
import Contactus from "../Contacts/Contactus.vue";

export default  {

    components : {
        AboutUs,
        Products,
        Contactus
    }
}

</script>



<style scoped>
nav {
    padding: 0.5rem; /* Optional: adjust padding if needed */
}
</style>
