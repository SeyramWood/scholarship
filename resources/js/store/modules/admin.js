import axios from "axios";

const state = {
    users: [],
    profile: {}
};

const getters = {
    getUsers: state => state.users,
    getProfile: state => state.profile,
};

const actions = {
    async dispatchUser({ commit, state }, { type = "", payload }) {
        try {
          switch (type) {
            case "ADD_PROFILE":
              state.profile = payload
              break
            default:
                state.users = payload;
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
