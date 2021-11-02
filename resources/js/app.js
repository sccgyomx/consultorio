require("./bootstrap");

import Vuex from "vuex";

// importar axios

import VueAxios from "vue-axios";
import axios from "axios";

// importar y configurar vue-router

import VueRouter from "vue-router";
import { routes } from "./routes";
import StoreData from "./store";
import { initialize } from "./helpers/general";

import Vue from "vue";

window.Vue = Vue;

import App from "./components/App.vue";

const store = new Vuex.Store(StoreData);
Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: "history",
    routes: routes,
});

initialize(store, router);

new Vue({
    router: router,
    store,
    render: (h) => h(App),
}).$mount("#app");
