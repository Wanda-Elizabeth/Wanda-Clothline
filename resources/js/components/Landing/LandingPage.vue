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


        <div class="flex flex-col justify-center items-center h-full relative z-10 px-4 mb-20">
            <h4 class="text-white text-3xl md:text-4xl lg:text-5xl font-bold font-nunito text-center mb-4">
                Elegance, Redefined for Modern Living
            </h4>
            <button @click="readmore" class="text-pink-400 bg-white p-5 border-gray-300 border">EXPLORE COLLECTION</button>

    </div>

            <div class="mb-12 p-90">

                <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-4">Discover Our Latest Styles</h2>
                <p class="text-center text-gray-600 mb-6 text-sm md:text-base">
                    Handpicked collections to elevate your wardrobe – from chic denim to bold patterns.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="relative cursor-pointer" @click="$router.push('/products/shorts')">
                        <img
                            src="/assets/images/denim.png"
                            alt="Shop Denim Shorts"
                            class="w-full h-56 md:h-64 object-cover rounded-lg"
                        />
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
                            <h3 class="text-white text-xl md:text-2xl font-semibold">Shop Denim Shorts</h3>
                        </div>
                    </div>
                    <div class="relative cursor-pointer" @click="$router.push('/products/dresses')">
                        <img
                            src="/assets/images/floral.png"
                            alt="Shop Floral Dress"
                            class="w-full h-56 md:h-64 object-cover rounded-lg"
                        />
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
                            <h3 class="text-white text-xl md:text-2xl font-semibold">Shop Floral Dress</h3>
                        </div>
                    </div>
                    <div class="relative cursor-pointer" @click="$router.push('/products/tops')">
                        <img
                            src="/assets/images/stripped.png"
                            alt="Shop Striped Top"
                            class="w-full h-56 md:h-64 object-cover rounded-lg"
                        />
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg">
                            <h3 class="text-white text-xl md:text-2xl font-semibold">Shop Striped Top</h3>
                        </div>
                    </div>

            </div>
            </div>

            <div class="flex items-center justify-between bg-gray-100 p-6 md:p-20 rounded-lg shadow-lg mb-20">
                <div class="flex-1 text-left pr-10 mb-6 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Bold. Comfortable. Confident. Stylish.</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        At Wanda Clothline, we believe in creating fashion that empowers you to feel your best—bold, confident, and comfortable every day. Our pieces are designed to make a statement and fit perfectly into your lifestyle.
                    </p>
                    <button class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-700">
                        Explore
                    </button>
                </div>



                <div class="flex-1 relative">
                    <div class="relative mt-6 md:mt-0 flex flex-col md:flex-row items-center justify-between">
                        <img src="/assets/images/img_3.png" class="w-80 md:w-80 h-60 object-cover rounded-lg shadow-md mb-4 md:mr-10 md:ml-0 ml-0" alt="Bold Image 1">
                        <img src="/assets/images/comfort.png" class="w-80 md:w-80 h-60 object-cover rounded-lg shadow-md mb-10 md:ml-10 ml-0" alt="Bold Image 2">
                        <img src="/assets/images/confident.png" class="absolute top-20 left-0 w-80 md:w-80 h-60 object-cover rounded-lg shadow-md mb-4 md:mr-10 ml-0" alt="Confident Image 1">
                        <img src="/assets/images/comfortable.png" class="absolute top-20 right-0 w-80 md:w-80 h-60 object-cover rounded-lg shadow-md mb-10 md:ml-10 ml-0" alt="Confident Image 2">
                    </div>

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
