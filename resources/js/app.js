require("./bootstrap");
import Vue from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue";
import { InertiaProgress } from "@inertiajs/progress";

import vuetify from "@/plugins/vuetify";
import JsonExcel from "vue-json-excel";

// import dropper from 'dropper.mood';
// import 'dropper.mood/dist/dropper.css';
// import "../sass/app.scss";
import VueMeta from "vue-meta";
import store from "./store";
import axios from "axios";

InertiaProgress.init();

// Vue.use(plugin);
Vue.use(VueMeta, {
    // optional pluginOptions
    refreshOnceOnNavigation: true
});
Vue.component("downloadExcel", JsonExcel);
Object.defineProperty(Vue.prototype, "$axios", { value: axios });

createInertiaApp({
    resolve: name => import(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            vuetify,
            store,
            render: h => h(App, props)
        }).$mount(el);
    }
});
