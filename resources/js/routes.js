import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router ({
    mode: 'history',
    routes:[
                {
                    path:'/home',
                    component: () => import ('./components/Layout.vue'),
                },
                {
                    path:'/aluno',
                    component: () => import ('./components/Aluno.vue'),
                },
                {
                    path:'/tela2',
                    component: () => import ('./components/Tela2.vue'),
                },
                {
                    path:'/',
                    component: () => import ('./components/Login.vue'),
                }

    
    
 
            ]
});