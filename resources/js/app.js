require('./bootstrap');
import Vue from "vue";
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'

import vuetify from "@/plugins/vuetify";

// import dropper from 'dropper.mood';
// import 'dropper.mood/dist/dropper.css';
// import "../sass/app.scss";
import VueMeta from "vue-meta";
import store from "./store";

InertiaProgress.init();

// Vue.use(plugin);
Vue.use(VueMeta, {
    // optional pluginOptions
    refreshOnceOnNavigation: true
});

createInertiaApp({
  resolve: name => import(`./Pages/${name}`),
  setup({ el, App, props }) {
    new Vue({
      vuetify,
      store,
      render: h => h(App, props),
    }).$mount(el)
  },
})