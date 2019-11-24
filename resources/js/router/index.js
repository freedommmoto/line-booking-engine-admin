import Vue from 'vue'
import Router from 'vue-router'

import Full from '../Full.vue'

import DashboardComponent from '../components/DashboardComponent';
import RoomtypeComponent from '../components/RoomtypeComponent';

Vue.use(Router)

export default new Router({
    mode: 'history',
    linkActiveClass: 'open active',
    routes: [
        {
            path: '/',
            redirect: '/dashboard',
            name: 'Home',
            component: Full,
            children: [
                {
                    path: 'dashboard',
                    name: 'Dashboard',
                    component: DashboardComponent,
                    meta: {
                        permission: 'public',
                        fail: '/error-public'
                    }
                },
                {
                    path: 'roomtype',
                    name: 'RoomType',
                    component: RoomtypeComponent,
                    meta: {
                        permission: 'public',
                        fail: '/error-public'
                    }
                }
            ]
        },
    ]
})