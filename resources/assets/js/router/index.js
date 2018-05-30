import Vue from 'vue';
import Router from 'vue-router';

// Containers
import Full from '../containers/Full.vue';

// Views
import Home from '../views/Home.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        redirect: '/home',
        name: 'Home',
        component: Full,
        children: [
            {
                path: '/home',
                name: 'home',
                component: Home,
                meta: {
                    label: 'Início'
                }
            }
        ]
    }
];

export default new Router({
    mode: 'hash', // hash or hash = Demo is living in GitHub.io, so required!
    linkActiveClass: 'open active',
    scrollBehavior: () => ({ y: 0 }),
    routes: routes
});
