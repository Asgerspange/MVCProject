import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import Primevue from 'primevue/config';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import Dialog from 'primevue/dialog';

import 'primevue/resources/themes/aura-dark-blue/theme.css';

const app = createApp(App)
    .use(router)
    .use(Primevue)
    .component('Button', Button)
    .component('InputText', InputText)
    .component('Dialog', Dialog);

app.mount('#app');