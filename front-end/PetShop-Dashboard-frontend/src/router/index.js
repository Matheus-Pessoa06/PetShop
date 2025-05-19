import { createRouter, createWebHistory} from 'vue-router'
import LoginView from '@/views/LoginView.vue'
import SideBar from '@/components/SideBar.vue'

const routes = [
    {
        path: '/',
        name: 'Login',
        component: LoginView
    },

    {
        path: '/sidebar',
        name: 'sidebar',
        component: SideBar

    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router