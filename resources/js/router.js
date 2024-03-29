import { createWebHistory, createRouter } from 'vue-router';

import Index from './pages/Index.vue';
const routes = [
    {
        path: '/',
        name: 'index',
        component: Index,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});
export { routes };
export default router;