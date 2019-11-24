import Vue from 'vue'
import Router from 'vue-router'

import ExampleComponent from '../components/ExampleComponent';
import DashboardComponent from '../components/DashboardComponent';

Vue.use(Router)

export default new Router({
    mode: 'history',
    linkActiveClass: 'open active',
    routes: [
        {
            path: '/',
            redirect: '/dashboard',
            name: 'Home',
            component: DashboardComponent,
            children: [
                {
                    path: 'dashboard',
                    name: 'Dashboard',
                    component: DashboardComponent,
                    meta: {
                        permission: 'public',
                        fail: '/error-public'
                    }
                }
            ]
        },
    ]
})