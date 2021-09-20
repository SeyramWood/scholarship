import axios from "axios";

const state = {
    awardCategories: []
};

const getters = {
    getAwardCategories: state => state.awardCategories
};

const actions = {
    async dispatchAwardCategory({ commit, state }, { type = "", payload }) {
        try {
            switch (type) {
                default:
                    state.awardCategories = payload;
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
