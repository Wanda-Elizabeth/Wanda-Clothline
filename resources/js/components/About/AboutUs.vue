<template>
    <div class="bg-white text-black min-h-screen w-full">

        <section class="relative w-full h-96 flex justify-center items-center">
            <img src="/assets/images/our-strory.jpeg" alt="Hero" class="absolute inset-0 w-full h-full object-cover" />
            <div class="relative z-10 text-white text-center">
                <h2 class="text-6xl font-bold">Welcome to Closelfy</h2>
                <p class="text-2xl mt-4">Where Fashion Meets Elegance</p>
            </div>
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 px-6 py-20 max-w-6xl mx-auto">
            <div>
                <img src="/assets/images/img_6.png" alt="Our Story" class="w-full rounded-lg shadow-lg" />
            </div>
            <div class="space-y-4">
                <h2 class="text-3xl font-semibold">Our Story</h2>
                <p class="text-gray-600">We started with a vision to innovate and bring the best solutions to our clients. Our journey has been filled with dedication, hard work, and a passion for excellence.</p>
            </div>
        </section>
        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 px-6 py-20 max-w-6xl mx-auto">
            <div class="space-y-4">
                <h2 class="text-3xl font-semibold">Our Vision</h2>
                <p class="text-gray-600">
                    Our team is dedicated to ensuring that you find exactly what you're looking for,
                    whether it's casual wear, formal attire, or accessories.

                </p>
            </div>
            <div>
                <img src="/assets/images/mission.webp" alt="Our Story" class="w-full rounded-lg shadow-lg" />
            </div>
        </section>
        <section class="grid grid-cols-1 md:grid-cols-2 gap-12 px-6 py-20 max-w-6xl mx-auto">
            <div>
                <img src="/assets/images/img_5.png" alt="Our Story" class="w-full rounded-lg shadow-lg" />
            </div>
            <div class="space-y-4">
                <h2 class="text-3xl font-semibold">Our Mission</h2>
                <p class="text-gray-600">
                    Wanda's Cute Clothesline aims to bring joy and confidence to every wardrobe.
                    Our curated selection of stylish clothing and accessories ensures you’ll find
                    something perfect for any occasion.
                    </p>
            </div>
        </section>

        <section class="text-center py-20">
            <h2 class="text-3xl font-bold text-center mb-8">Meet the Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 max-w-6xl mx-auto">
                <div class="space-y-4">
                    <img src="/assets/images/ceo.png" alt="Expert 1" class="w-40 h-40 rounded-full shadow-lg object-cover mx-auto" />
                    <h3 class="text-xl font-semibold">Wanda Lisa</h3>
                    <p class="text-gray-500">Founder & CEO</p>
                </div>
                <div class="space-y-4">
                    <img src="/assets/images/ceo.png" alt="Expert 1" class="w-40 h-40 rounded-full shadow-lg object-cover mx-auto" />
                    <h3 class="text-xl font-semibold">Wanda Lisa</h3>
                    <p class="text-gray-500">Creative Director</p>
                </div>
                <div class="space-y-4">
                    <img src="/assets/images/ceo.png" alt="Expert 1" class="w-40 h-40 rounded-full shadow-lg object-cover mx-auto" />
                    <h3 class="text-xl font-semibold">Wanda Lisa</h3>
                    <p class="text-gray-500">Fashion Consultant</p>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-20">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-8">Join Our Fashion Community</h2>
                <p class="text-gray-600 mb-8">Stay updated with the latest trends, exclusive offers, and behind-the-scenes content. Subscribe to our newsletter and follow us on social media.</p>
                <div class="flex justify-center space-x-4">
                    <input type="email" placeholder="Enter your email" class="px-4 py-2 rounded-lg border border-gray-300" />
                    <button class="px-6 py-2 bg-black text-white rounded-lg">Subscribe</button>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
};
</script>

<style scoped>
</style>
