import { createRouter, createWebHistory } from 'vue-router'

import Home from '../pages/Home.vue'
import Our_services from '../pages/Our_services.vue'

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/our_services', name: 'Our_services', component: Our_services }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
