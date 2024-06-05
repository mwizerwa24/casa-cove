import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import ForRent from '../views/ForRent.vue'
import ForSale from '../views/ForSale.vue'
import Housepage from '../views/HousePage.vue'
import AboutUs from '../views/AboutUs.vue'
import ContactUs from '../views/ContactUs.vue'
import SignIn from '../views/SignIn.vue'
import SignUp from '../views/SignUp.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/forsale',
    name: 'forsale',
    component: ForSale
  },
  {
    path: '/forsale/house/id',
    name: 'house',
    component: Housepage
  },
  {
    path: '/forrent',
    name: 'forrent',
    component: ForRent
  },
  {
    path: '/aboutus',
    name: 'aobutus',
    component: AboutUs
  },
  {
    path: '/contactus',
    name: 'contactus',
    component: ContactUs
  },
  {
    path: '/signin',
    name: 'signin',
    component: SignIn
  },
  {
    path: '/signup',
    name: 'signup',
    component: SignUp
  },
  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
