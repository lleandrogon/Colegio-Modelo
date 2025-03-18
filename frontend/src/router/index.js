import { createRouter, createWebHashHistory } from 'vue-router'
import MainLayout from '../views/MainLayout.vue'
import MatriculaLayout from '../views/MatriculaLayout.vue'

const routes = [
  {
    path: '/',
    name: 'MainLayout',
    component: MainLayout
  },
  {
    path: '/matricula',
    name: 'matricula',
    component: MatriculaLayout
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
