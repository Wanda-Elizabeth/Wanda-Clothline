import { createApp } from 'vue';
import router from "./router/index.js";
import './assets/styles/tailwind.css';

import ImagePost from './ImagePost.vue'; // Import your Vue component

createApp(ImagePost).mount('#app'); // Mount the app on the <div id="app"></div>



import Home from "./components/Home.vue";

createApp(Home)
    .use(router)
    .mount('#app'); // Mounts your Vue app to the #app div
