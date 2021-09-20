import axios from "axios";

const state = {
    transactions: []
};

const getters = {
    getTransactions: state => state.transactions
};

const actions = {
    async dispatchTransaction({ commit, state }, { type = "", payload }) {
        try {
            switch (type) {
                default:
                    state.transactions = payload;
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
