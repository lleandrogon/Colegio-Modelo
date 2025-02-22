import { createRouter, createWebHashHistory } from 'vue-router'
import Layout from '../views/MainLayout.vue'

const routes = [
  {
    path: '/',
    name: 'layout',
    component: Layout
  },
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
