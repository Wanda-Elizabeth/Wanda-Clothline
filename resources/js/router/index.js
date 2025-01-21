import { createWebHistory, createRouter } from "vue-router";
import Contactus from "../components/Contacts/Contactus.vue";
import Products from "../components/Products/Products.vue";
import LandingPage from "../components/Landing/LandingPage.vue";
import ImagePost from "../ImagePost.vue";


const Home = () => import("../components/Home.vue");
const AboutUs = () => import("../components/About/AboutUs.vue");

const routes = [
    {
        path: "/home",
        name: "Home",
        component: Home,
    },
    {
        path: "/",
        name: "Landing-Page",
        component: LandingPage,
    },
    {
        path: "/about-us",
        name: "About",
        component: AboutUs,
    },
    {
        path: "/products",
        name: "Products",
        component: Products,
        props: true,

    },
    { path: '/products/:category',
        component: Products
    },

    {
        path: "/contactus",
        name: "Contactus",
        component: Contactus,
    },
    {
        path: '/image-upload',
        name: 'ImageUpload',
        component: ImagePost,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
