import axios from "axios";

const state = {
    awards: []
};

const getters = {
    getAwards: state => state.awards
};

const actions = {
    async dispatchAward({ commit, state }, { type = "", payload }) {
        try {
            switch (type) {
                default:
                    state.awards = payload;
                    break;
            }
        } catch (err) {
            console.error(err);
        }
    }
};

const mutations = {};

export default {
    namespaced: false,
    state,
    getters,
    actions,
    mutations
};
