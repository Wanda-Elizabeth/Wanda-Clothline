<template>
    <div class="h-screen w-full flex flex-col">
        <!-- Top Section with Contact Title and Breadcrumb -->
        <div class="flex flex-col items-center bg-gray-900 py-8 text-white">
            <h2 class="text-4xl font-bold">Contact Us</h2>
            <p class="text-sm text-gray-400 mt-2">We’d love to hear from you! Let’s connect.</p>
        </div>

        <div class="flex h-full w-full">
            <div class="relative w-full lg:w-1/2 flex items-center justify-center">
                <img src="/assets/images/pink-outfit.jpg" class="h-full w-full object-cover rounded-lg shadow-md" alt="Contact Wand Clothline">
                <div class="bg-black opacity-70 inset-0 absolute"></div>
                <div class="absolute inset-0 flex items-center justify-center text-center p-8">
                    <div class="text-white max-w-md">
                        <h2 class="text-4xl font-bold mb-4">Stay Connected with Us</h2>
                        <p class="text-lg leading-relaxed mb-4">
                            At Wanda Clothline, we cherish our connection with you. Whether you're interested in personalized styling advice, have questions about our collections, or want assistance, we're here to help. Simply fill out the form, and we’ll get back to you soon!
                        </p>
                        <a href="#contact-form" class="px-4 py-2 bg-pink-500 hover:bg-pink-700 rounded-md shadow text-white">Fill Out Our Contact Form</a>
                    </div>
                </div>
            </div>
            <div id="contact-form" class="w-full lg:w-1/2 flex items-center justify-center bg-gray-100 px-8">
                <form class="max-w-md w-full space-y-4 py-12" @submit.prevent="submitFormDetails">
                    <h4>First name</h4>
                    <input
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="First name"
                        type="text"
                        name="name"
                    />

                    <h4>Last name</h4>
                    <input
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="Last name"
                        type="text"
                        name="last_name"
                    />

                    <h4>Email</h4>
                    <input
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="you@example.com"
                        type="email"
                        name="email"
                    />

                    <h4>Phone number</h4>
                    <input
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="Phone Number"
                        type="tel"
                        name="phone"
                    />

                    <h4>Subject</h4>
                    <input
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="Subject"
                        type="text"
                        name="subject"
                    />

                    <h4>Message</h4>
                    <textarea
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                        placeholder="Write Message"
                        rows="4"
                        name="message"
                    ></textarea>

                    <button type="submit" class="w-full py-3 bg-pink-500 text-white font-semibold rounded-lg hover:bg-pink-700">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        submitFormDetails() {
        }
    }
}
</script>

<style scoped>
.bg-black {
    background-color: #111;
}
</style>
