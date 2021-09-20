import axios from "axios";

const state = {
    nominees: []
};

const getters = {
    getNominees: state => state.nominees
};

const actions = {
    async dispatchNominee({ commit, state }, { type = "", payload }) {
        try {
            switch (type) {
                default:
                    state.nominees = payload;
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
