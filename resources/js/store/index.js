import Vue from "vue";
import Vuex from "vuex";

import Award from "./modules/award";
import Admin from "./modules/admin";
import AwardCategory from "./modules/awardCategory";
import Nominee from "./modules/nominee";
import Nomination from "./modules/nomination";
import Transactions from "./modules/transaction";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: { Admin, Award, AwardCategory, Nominee, Nomination, Transactions }
});
