import { createWebHistory, createRouter } from "vue-router";
import Contactus from "../components/Contacts/Contactus.vue";
import Products from "../components/Products/Products.vue";
import LandingPage from "../components/Landing/LandingPage.vue";

const Home = () => import("../components/Home.vue")

const AboutUs = () => import("../components/About/AboutUs.vue")



 const routes = [



     {
         path:"/home",
         name:"Home",
         component: Home,
     },

     {
         path:"/landing-page",
         name:"Landing-Page",
         component: LandingPage,
     },

     {
         path:"/about-us",
         name:"About",
         component: AboutUs,
     },

     {
         path:"/products",
         name:"Product",
         component: Products,
     },
     {
         path:"/contactus",
         name:"Contactus",
         component: Contactus,
     }

 ]

const router = createRouter({
    history: createWebHistory(),
    routes,
});
export default router;

