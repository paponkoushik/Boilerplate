import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "login",
        component: () => import("../views/Auth/Login")
    },
    {
        path: "/my-profile",
        name: "my-profile",
        component: () => import("../views/UserProfile")
    },
    {
        path: "/unsubscribed",
        name: "unsubscribed",
        component: () => import("../views/UnsubscribedPage")
    },
    {
        path: "/dashboard",
        name: "dashboard",
        component: () => import("../views/Layouts/AdminLayoutMaster")
    },
    {
        path: "/tables",
        name: "tables",
        component: () => import("../views/Components/Tables")
    },
    {
        path: "/tabs",
        name: "tabs",
        component: () => import("../views/Components/Tabs")
    },
    {
        path: "/breadcumbs",
        name: "breadcumbs",
        component: () => import("../views/Components/Breadcumbs")
    },
    {
        path: "/modals",
        name: "modals",
        component: () => import("../views/Components/Modals")
    },
    {
        path: "/buttons",
        name: "buttons",
        component: () => import("../views/Components/Buttons")
    },
    {
        path: "/badges",
        name: "badges",
        component: () => import("../views/Components/Badges")

    },
    {
        path: "/forms",
        name: "forms",
        component: () => import("../views/Components/Forms")
    },
    {
        path: "/avatars",
        name: "avatars",
        component: () => import("../views/Components/Avatars")
    },
    {
        path: "/charts",
        name: "charts",
        component: () => import("../views/Components/Chart")
    },
    {
        path: "/users-roles",
        name: "users-roles",
        component: () => import("../views/UsersRoles")
    },
    {
        path: "/cards",
        name: "cards",
        component: () => import("../views/Components/Cards")
    },
    {
        path: "/tag-manager",
        name: "tag-manager",
        component: () => import("../views/Components/TagManager")
    },
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
