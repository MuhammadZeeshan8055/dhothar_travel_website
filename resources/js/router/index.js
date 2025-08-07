import { createRouter, createWebHistory } from 'vue-router'

import Home from '../pages/Home.vue'
import Our_services from '../pages/Our_services.vue'
import Mission from '../pages/Mission.vue'
import Vision from '../pages/Vision.vue'
import More_about_us from '../pages/More_about_us.vue'
import Introduction from '../pages/Introduction.vue'
import Visit_visa from '../pages/Visit_visa.vue'
import Visa_file_processing from '../pages/Visa_file_processing.vue'
import Travel_insurance from '../pages/Travel_insurance.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', name: 'Home', component: Home },
    { path: '/our_services', name: 'Our_services', component: Our_services },
    { path: '/mission', name: 'Mission', component: Mission },
    { path: '/vision', name: 'Vision', component: Vision },
    { path: '/more_about_us', name: 'More_about_us', component: More_about_us },
    { path: '/introduction', name: 'Introduction', component: Introduction },
    { path: '/visit_visa', name: 'Visit_visa', component: Visit_visa },
    { path: '/visa_file_processing', name: 'Visa_file_processing', component: Visa_file_processing },
    { path: '/travel_insurance', name: 'Travel_insurance', component: Travel_insurance },
  ],
  scrollBehavior(to, from, savedPosition) {
    return { top: 0 };
  }
});

export default router;
