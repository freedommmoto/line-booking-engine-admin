import Vue from 'vue'
import Router from 'vue-router'

import ExampleComponent from '../components/ExampleComponent';

Vue.use(Router)

export default new Router({
    mode: 'history',
    linkActiveClass: 'open active',
    routes: [
        {
            path: '/',
            redirect: '/dashboard',
            name: 'Home',
            component: ExampleComponent,
            children: [
                {
                    path: 'dashboard',
                    name: 'Dashboard',
                    component: ExampleComponent,
                    meta: {
                        permission: 'public',
                        fail: '/error-public'
                    }
                }
            ]
        },
    ]
})