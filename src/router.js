import Vue from "vue";
import Router from "vue-router";

Vue.use(Router);

export default new Router({
  mode: "history",
  base: process.env.BASE_URL,
  routes: [
    {
      path: "/",
      component: () => import("./layouts/Layout.vue"),
      children: [
        //Components
        {
          name: "home",
          path: "/",
          component: () => import("./views/Home.vue"),
        },
        {
          name: "register",
          path: "register",
          component: () => import("./views/Register.vue"),
        },
        {
          name: "login",
          path: "login",
          component: () => import("./views/Login.vue"),
        },
        {
          name: "singlePost",
          path: "singlePost",
          component: () => import("./views/SinglePost.vue"),
        },
        {
          name: "category",
          path: "category",
          component: () => import("./views/Category.vue"),
        },

        // {
        //     name: 'Profile',
        //     path: 'pages/profile',
        //     component: () => import('@/views/pages/Profile'),
        // },

        // {
        //     name: 'Icons',
        //     path: 'pages/icons',
        //     component: () => import('@/views/pages/Icons'),
        // },

        // {
        //     name: 'TableSimple',
        //     path: 'pages/tables-simple',
        //     component: () => import('@/views/pages/TableSimple'),
        // },

        // {
        //     name: 'Dashboard',
        //     path: 'dashboard/basic-dashboard',
        //     component: () => import('@/views/dashboard/BasicDashboard'),
        // },
      ],
    },
    {
      path: "/dashboard",
      component: () => import("../dashboard/Layout.vue"),
      // children: [
      //     //Components
      //     {
      //         name: 'home',
      //         path: '/',
      //         component: () => import('./views/Home.vue'),
      //     },
      //     {
      //         name: 'register',
      //         path: 'register',
      //         component: () => import('./views/Register.vue'),
      //     },
      //     {
      //         name: 'login',
      //         path: 'login',
      //         component: () => import('./views/Login.vue'),
      //     },
      //     {
      //         name: 'singlePost',
      //         path: 'singlePost',
      //         component: () => import('./views/SinglePost.vue'),
      //     },
      //     {
      //         name: 'category',
      //         path: 'category',
      //         component: () => import('./views/Category.vue'),
      //     },

      // ]
    },
  ],
});
