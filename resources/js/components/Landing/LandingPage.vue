<template>
    <div class="relative flex  h-screen w-full">

        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/assets/images/bg.jpeg');">
            <div class="bg-black opacity-60 inset-0 absolute">
                <div class="absolute top-20 right-20 w-6 h-6 bg-blue-400 rounded-lg"></div>
                <div class="absolute top-1/3 left-1/3 w-10 h-4 bg-yellow-400 skew-x-12"></div>
                <div class="absolute bottom-20 left-40 w-6 h-10 bg-green-400 rounded-md rotate-12"></div>
                <div class="absolute top-1/2 right-1/4 w-8 h-8 bg-pink-400 rounded-full rotate-6"></div>
                <div class="absolute top-2/3 right-10 w-6 h-10 bg-teal-400 rounded-lg"></div>
                <div class="absolute bottom-10 left-20 w-4 h-4 bg-orange-400 rounded-full"></div>
                <div class="absolute  top-20  left-20 w-8 h-8 bg-pink-400 rounded-full rotate-6"></div>
                <div class="absolute top-1/4 right-1/4 w-6 h-6 bg-teal-500 rounded-lg"></div>
                <div class="absolute bottom-1/3 left-1/3 w-6 h-6 bg-orange-400 rounded-lg"></div>
            </div>


        <div class="flex flex-col justify-center items-center h-full relative z-10 px-4 mb-40">
            <h4 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold font-nunito text-center mb-4">
                Elegance, Redefined for Modern Living
            </h4>
            <button @click="readmore" class="text-pink-400 bg-white p-5 border-gray-300 border">EXPLORE COLLECTION</button>

    </div>

<!--            <div class="flex flex-row-reverse  justify-between bg-gray-100 p-10 rounded-lg shadow-lg mb-60">-->
            <div class="flex flex-row-reverse mb-60">
                <!-- Image on the Right -->
                <div class="flex-1  ml-auto">
                    <img src="/assets/images/bg.jpeg" class="border border-gray-300 rounded-lg h-80 w-64 object-cover shadow-md " alt="Elegant Fashion">
                </div>

                <!-- Text on the Left -->
                <div class="flex-1 text-center md:text-left">
                    <h4 class="text-pink-400 text-3xl md:text-4xl lg:text-5xl font-bold font-nunito mb-4">
                        Elegance
                    </h4>
                    <p class="text-gray-600 text-lg mb-4">
                        Discover elegance with our exclusive collection!
                    </p>
                    <button class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800">
                        SHOP NOW
                    </button>
                </div>
            </div>

            <div class="flex items-center justify-between bg-gray-100 p-10 rounded-lg shadow-lg">
                <div class="flex-1">
                    <img src="/assets/images/bg.jpeg" class="border border-gray-300 rounded-lg h-80 w-64 object-cover shadow-md" alt="Elegant Fashion">
                </div>

                <div class="flex-1 text-center md:text-left">
                    <h4 class="text-pink-400 text-3xl md:text-4xl lg:text-5xl font-bold font-nunito mb-4">
                        Elegance
                    </h4>
                    <p class="text-gray-600 text-lg mb-4">
                        Uncover timeless styles and elevate your fashion sense.
                    </p>
                    <button class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800">
                        EXPLORE COLLECTION
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
export default {



methods: {
    readmore() {
        window.location.href = '/products';
    }
}
}

</script>

<style scoped>


</style>
