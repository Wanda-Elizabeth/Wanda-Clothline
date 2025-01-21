import { createApp } from 'vue';
import router from "./router/index.js";
import './assets/styles/tailwind.css';

import Home from "./components/Home.vue";

createApp(Home)
    .use(router)
    .mount('#app'); // Mounts your Vue app to the #app div
