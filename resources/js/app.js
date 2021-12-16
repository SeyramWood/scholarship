require("./bootstrap");
import Vue from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue";
import { InertiaProgress } from "@inertiajs/progress";

import vuetify from "@/plugins/vuetify";
import JsonExcel from "vue-json-excel";
import VueSmoothScroll from "vue2-smooth-scroll";
import { DateTime, Interval, Duration } from "luxon";

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
Vue.use(VueSmoothScroll, {
    duration: 1500, // animation duration in ms
    offset: 0, // offset in px from scroll element, can be positive or negative
    updateHistory: true // whether to push hash to history
});
Vue.component("downloadExcel", JsonExcel);
Object.defineProperty(Vue.prototype, "$luxon", { value: DateTime });
Object.defineProperty(Vue.prototype, "$axios", { value: axios });

Vue.mixin({
    computed: {},
    beforeMount() {
        this.$nextTick(() => this.isAdmin = this.$page.props.role === 'admin')
    },
    data() {
        return {
            snackOpen: false,
            snackMessage: "",
            isAdmin: null
        
        };
    },
    methods: {
        isNull(el) {
            if (el === "null" || el === null) {
                return "";
            }
            return el;
        },
        showSnackMessage(message) {
            this.snackMessage = message;
            this.snackOpen = true;
        },

        formatDate(str) {
            const date = this.$luxon.fromISO(str).toFormat("MMMM dd, y");
            if (date === "Invalid DateTime") return "";
            return date;
        },
        formatDate2(str) {
            const date = this.$luxon.fromISO(str).toFormat("MMM dd, y");
            if (date === "Invalid DateTime") return "";
            return date;
        },
    }
});

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
