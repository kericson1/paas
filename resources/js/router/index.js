import { createRouter,createWebHistory } from "vue-router";
import PersonnelIndex from '../components/accueil.vue';

const routes = [
    {
        path:'/admin_2023/administration',
        name:'personnels.index',
        component: PersonnelIndex
    },
    {
        path:'/customers/create',
        name:'customers.create',
        component: CustomerCreate
    }
];
export default createRouter({
    history:createWebHistory(),
    routes
});
