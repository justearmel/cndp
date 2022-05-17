
require('./bootstrap');

import { createApp } from 'vue';
import router from "./router/Index";
import App from './components/App.vue';


createApp({
    components: {
        App
    }
})
.use(router)
.mount('#app');
