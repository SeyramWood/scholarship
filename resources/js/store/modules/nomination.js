import axios from "axios";

const state = {
    nominations: []
};

const getters = {
    getNominations: state => state.nominations
};

const actions = {
    async dispatchNomination({ commit, state }, { type = "", payload }) {
        try {
            switch (type) {
                default:
                    state.nominations = payload;
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
