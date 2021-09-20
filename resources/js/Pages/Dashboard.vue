<template>
  <section class="dashboard">
    <section class="dashboard__top">
      <div class="s__row">
        <div class="s__col c--3">
          <div class="dashboard__card__top">
            <div class="dashboard__card__top__left">
              <div class="dashboard__card__top__left__icon icon--info">
                <v-icon>mdi-finance</v-icon>
              </div>
              <div class="dashboard__card__top__left__content">
                <p>Total Applications</p>
                <p>34</p>
              </div>
            </div>
            <div class="dashboard__card__top__right text--danger">
              <p>-25%</p>
            </div>
          </div>
        </div>
        <div class="s__col c--3">
          <div class="dashboard__card__top">
            <div class="dashboard__card__top__left">
              <div class="dashboard__card__top__left__icon icon--warnning">
                <v-icon>mdi-finance</v-icon>
              </div>
              <div class="dashboard__card__top__left__content">
                <p>In-progress Applications</p>
                <p>34</p>
              </div>
            </div>
            <div class="dashboard__card__top__right text--success">
              <p>+20%</p>
            </div>
          </div>
        </div>
        <div class="s__col c--3">
          <div class="dashboard__card__top">
            <div class="dashboard__card__top__left">
              <div class="dashboard__card__top__left__icon icon--danger">
                <v-icon>mdi-finance</v-icon>
              </div>
              <div class="dashboard__card__top__left__content">
                <p>Finished Applications</p>
                <p>34</p>
              </div>
            </div>
            <div class="dashboard__card__top__right text--warnning">
              <p>-10%</p>
            </div>
          </div>
        </div>
        <div class="s__col c--3">
          <div class="dashboard__card__top">
            <div class="dashboard__card__top__left">
              <div class="dashboard__card__top__left__icon icon--success">
                <v-icon>mdi-finance</v-icon>
              </div>
              <div class="dashboard__card__top__left__content">
                <p>Reviewed Applications</p>
                <p>34</p>
              </div>
            </div>
            <div class="dashboard__card__top__right text--info">
              <p>-75%</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <s-accordians :defaultIndex="0">
      <s-accordian label="Accordian">
        <template #header>
          <section class="collapse__header">
            <div class="collapse__header__left">
              <div class="icon-left">
                <div class="icon-arch"></div>
                <div class="icon-circle"></div>
              </div>
              <div class="title">
                <h4>Recent Applicants</h4>
              </div>
            </div>
            <div class="collapse__header__right">
              <div class="progress">
                <v-progress-circular
                  :value="65"
                  color="primary"
                  :size="70"
                  :width="10"
                >
                  65%
                </v-progress-circular>
              </div>
              <div class="fat__arrow">
                <div class="arrow"></div>
              </div>
            </div>
          </section>
        </template>
        <section class="collapse__content">
          <div class="collapse__content__timeline">
            <div class="line"></div>
            <div class="dot"></div>
            <div class="title">
              <span>Project Management</span>
            </div>
            <div class="user">
              <div class="sperator"></div>
              <div class="details">
                <span>Seyram Wood</span>
                <div class="avatar">
                  <img src="" alt="av" srcset="" />
                </div>
              </div>
              <div class="sperator"></div>
            </div>
            <div class="date">
              <span>Jan 01 - Mar 12</span>
            </div>
          </div>
          <div class="collapse__content__timeline">
            <div class="line"></div>
            <div class="dot"></div>
            <div class="title">
              <span>Law</span>
            </div>
            <div class="user">
              <div class="sperator"></div>
              <div class="details">
                <span>Seyram Wood</span>
                <div class="avatar">
                  <img src="" alt="av" srcset="" />
                </div>
              </div>
              <div class="sperator"></div>
            </div>
            <div class="date">
              <span>Jan 01 - Mar 12</span>
            </div>
          </div>
          <div class="collapse__content__btn">
            <Link
              href="/dashboard/applicants"
              class="
                v-btn v-btn--is-elevated v-btn--has-bg
                theme--light
                v-size--large
                secondary
              "
            >
              View applicants
            </Link>
          </div>
        </section>
      </s-accordian>
      <s-accordian label="Accordian">
        <template #header>
          <section class="collapse__header">
            <div class="collapse__header__left">
              <div class="icon-left">
                <div class="icon-arch"></div>
                <div class="icon-circle"></div>
              </div>
              <div class="title">
                <h4>Recent Reviewed Applicants</h4>
              </div>
            </div>
            <div class="collapse__header__right">
              <div class="progress">
                <v-progress-circular
                  :value="65"
                  color="primary"
                  :size="70"
                  :width="10"
                >
                  65%
                </v-progress-circular>
              </div>
              <div class="fat__arrow">
                <div class="arrow"></div>
              </div>
            </div>
          </section>
        </template>
        <section class="collapse__content">
          <div class="collapse__content__timeline">
            <div class="line"></div>
            <div class="dot"></div>
            <div class="title">
              <span>Project Management</span>
            </div>
            <div class="user">
              <div class="sperator"></div>
              <div class="details">
                <span>Seyram Wood</span>
                <div class="avatar">
                  <img src="" alt="av" srcset="" />
                </div>
              </div>
              <div class="sperator"></div>
            </div>
            <div class="date">
              <span>Jan 01 - Mar 12</span>
            </div>
          </div>
          <div class="collapse__content__timeline">
            <div class="line"></div>
            <div class="dot"></div>
            <div class="title">
              <span>Law</span>
            </div>
            <div class="user">
              <div class="sperator"></div>
              <div class="details">
                <span>Seyram Wood</span>
                <div class="avatar">
                  <img src="" alt="av" srcset="" />
                </div>
              </div>
              <div class="sperator"></div>
            </div>
            <div class="date">
              <span>Jan 01 - Mar 12</span>
            </div>
          </div>
          <div class="collapse__content__btn">
            <Link
              href="/dashboard/reviewed-applicants"
              class="
                v-btn v-btn--is-elevated v-btn--has-bg
                theme--light
                v-size--large
                secondary
              "
            >
              View reviewed applicants
            </Link>
          </div>
        </section>
      </s-accordian>
    </s-accordians>
  </section>
</template>

<script>
import Layout from "../components/Layout";
import SAccordians from "../components/accordian/sAccordians";
import SAccordian from "../components/accordian/sAccordian";
import SRange from "../components/SRange";
import { Link } from "@inertiajs/inertia-vue";

export default {
  name: "Dashboard",
  components: { SAccordians, SAccordian, SRange, Link },
  layout: Layout,

  methods: {
    clickMe() {
      console.log("click me");
    },
  },
};
</script>

<style lang="scss" scoped>
</style>