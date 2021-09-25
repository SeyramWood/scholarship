<template>
  <v-app>
    <div class="d__wrapper">
      <aside
        :class="`d__side__nav ${getMiniBarContent ? 'hide-nav-content' : ''}`"
      >
        <nav class="d__side__nav__mini">
          <section class="d__side__nav__mini__top">
            <span
              :class="[getMiniBarContent ? 'open' : 'close']"
              @click="showMiniBarContent()"
              ><v-icon>mdi-menu-open</v-icon></span
            >
          </section>
          <section class="d__side__nav__mini__middle">
            <v-tooltip right>
              <template v-slot:activator="{ on, attrs }">
                <span class="mini-nav-active" v-bind="attrs" v-on="on">
                  <Link href="/dashboard">
                    <v-icon>mdi-home-outline</v-icon>
                  </Link>
                </span>
              </template>
              <span>Dashboard</span>
            </v-tooltip>
            <v-tooltip right>
              <template v-slot:activator="{ on, attrs }">
                <span class="mini-nav-active" v-bind="attrs" v-on="on">
                  <Link href="/dashboard/applicants">
                    <v-icon>mdi-account-multiple-outline</v-icon>
                  </Link>
                </span>
              </template>
              <span>Applicants</span>
            </v-tooltip>
            <v-tooltip right>
              <template v-slot:activator="{ on, attrs }">
                <span class="mini-nav-active" v-bind="attrs" v-on="on">
                  <Link href="/dashboard/reviewed-applicants">
                    <v-icon>mdi-account-multiple-check-outline</v-icon>
                  </Link>
                </span>
              </template>
              <span>Reviewed Applicants</span>
            </v-tooltip>

            <v-tooltip right>
              <template v-slot:activator="{ on, attrs }">
                <span class="mini-nav-active" v-bind="attrs" v-on="on">
                  <Link href="/dashboard">
                    <v-icon>mdi-cog-outline</v-icon>
                  </Link>
                </span>
              </template>
              <span>Settings</span>
            </v-tooltip>
          </section>
          <section class="d__side__nav__mini__bottom">
            <div class="d__side__nav__mini__bottom__avatar">
              <img src="" alt="av" srcset="" />
            </div>
          </section>
        </nav>
        <main class="d__side__nav__content">
          <div class="d__side__nav__content__brand">
            <div class="d__side__nav__content__brand__logo">
              <img src="/storage/logo-1.png" alt="Brand Logo" srcset="" />
            </div>
          </div>
          <div class="d__side__nav__content__tab">
            <!-- <s-tabs mb="mb-3">
              <s-tab label="Activity">
                <s-accordians :defaultIndex="0">
                  <s-accordian label="Today">
                    <section class="notification">
                      <article class="notification__container">
                        <div class="notification__avatar">
                          <img src="" alt="av" />
                        </div>
                        <div class="notification__content">
                          <h5 class="notification__content__title">
                            Project Name
                          </h5>
                          <span class="notification__content__time"
                            >29 minutes ago</span
                          >
                        </div>
                      </article>
                      <article class="notification__container">
                        <div class="notification__avatar">
                          <img src="" alt="av" />
                        </div>
                        <div class="notification__content">
                          <h5 class="notification__content__title">
                            Income Calculation
                          </h5>
                          <span class="notification__content__time"
                            >29 minutes ago</span
                          >
                        </div>
                      </article>
                      <article class="notification__container">
                        <div class="notification__avatar">
                          <img src="" alt="av" />
                        </div>
                        <div class="notification__content">
                          <h5 class="notification__content__title">
                            New members on payment project
                          </h5>
                          <span class="notification__content__time"
                            >29 minutes ago New members on payment project</span
                          >
                        </div>
                      </article>
                    </section>
                  </s-accordian>
                </s-accordians>
              </s-tab>
              <s-tab label="Notifications" :badge="80">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                similique saepe doloribus illo distinctio voluptatum dicta nam
                et? Accusantium odit fugit voluptatum aperiam rem aliquid libero
                cumque ex quidem asperiores.Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Ut similique saepe doloribus illo
                distinctio voluptatum dicta nam et? Accusantium odit fugit
                voluptatum aperiam rem aliquid libero cumque ex quidem
                asperiores.Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ut similique saepe doloribus illo distinctio voluptatum
                dicta nam et? Accusantium odit fugit voluptatum aperiam rem
                aliquid libero cumque ex quidem asperiores.Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Ut similique saepe doloribus
                illo distinctio voluptatum dicta nam et? Accusantium odit fugit
                voluptatum aperiam rem aliquid libero cumque ex quidem
                asperiores.Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ut similique saepe doloribus illo distinctio voluptatum
                dicta nam et? Accusantium odit fugit voluptatum aperiam rem
                aliquid libero cumque ex quidem asperiores.Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Ut similique saepe doloribus
                illo distinctio voluptatum dicta nam et? Accusantium odit fugit
                voluptatum aperiam rem aliquid libero cumque ex quidem
                asperiores.Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ut similique saepe doloribus illo distinctio voluptatum
                dicta nam et? Accusantium odit fugit voluptatum aperiam rem
                aliquid libero cumque ex quidem asperiores.Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Ut similique saepe doloribus
                illo distinctio voluptatum dicta nam et? Accusantium odit fugit
                voluptatum aperiam rem aliquid libero cumque ex quidem
                asperiores.Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ut similique saepe doloribus illo distinctio voluptatum
                dicta nam et? Accusantium odit fugit voluptatum aperiam rem
                aliquid libero cumque ex quidem asperiores.
              </s-tab>
            </s-tabs> -->
          </div>
        </main>
      </aside>
      <main class="d__main">
        <header class="d__main__header">
          <section class="top__bar__nav__wrapper">
            <nav class="top__bar__nav">
              <ul class="top__bar__nav__links">
                <li class="top__bar__nav__links__link is-link-active">
                  <Link href="/dashboard">
                    <v-menu
                      open-on-hover
                      bottom
                      transition="slide-y-transition"
                      offset-y
                    >
                      <template v-slot:activator="{ on, attrs }">
                        <v-btn v-bind="attrs" v-on="on">
                          ADU
                          <span class=""
                            ><v-icon>mdi-chevron-down</v-icon>
                          </span>
                        </v-btn>
                      </template>

                      <v-list>
                        <v-list-item
                          v-for="(item, index) in items"
                          :key="index"
                        >
                          <v-list-item-title>{{
                            item.title
                          }}</v-list-item-title>
                        </v-list-item>
                      </v-list>
                    </v-menu>
                  </Link>
                </li>
                <!-- <li class="top__bar__nav__links__link">
                  <Link href="/dashboard"> Team </Link>
                </li>
                <li class="top__bar__nav__links__link">
                  <Link href="/dashboard"> People </Link>
                </li> -->
              </ul>
            </nav>
            <div class="search__bar">
              <label class="search__input">
                <input type="search" placeholder="Search..." />
                <span class="search__input__icon">
                  <v-icon>mdi-magnify</v-icon>
                </span>
              </label>
            </div>
          </section>
        </header>
        <article class="d__main__content">
          <slot></slot>
        </article>
      </main>
    </div>
  </v-app>
</template>

<script>
import STabs from "./tab/STabs";
import STab from "./tab/STab";
import SAccordians from "./accordian/sAccordians";
import SAccordian from "./accordian/sAccordian";
import { Link } from "@inertiajs/inertia-vue";
export default {
  name: "Layout",
  components: {
    STabs,
    STab,
    Link,
    SAccordians,
    SAccordian,
  },
  computed: {
    getMiniBarContent() {
      return this.miniBarContent;
    },
  },
  data() {
    return {
      tabIndex: 0,
      miniBarContent: false,
      items: [
        { title: "Click Me" },
        { title: "Click Me" },
        { title: "Click Me" },
        { title: "Click Me 23" },
      ],
    };
  },
  methods: {
    showMiniBarContent() {
      this.miniBarContent = !this.miniBarContent;
    },
  },
};
</script>

<style lang="scss" scoped>
.d__side__nav__mini__top > span.open > i {
  animation: icon-rotate-open 0.2s ease-in-out forwards;
}
.d__side__nav__mini__top > span.close > i {
  animation: icon-rotate-close 0.2s ease-in-out forwards;
}
@keyframes icon-rotate-open {
  0% {
    opacity: 0.5;
    transform: rotate(0deg);
  }
  100% {
    opacity: 1;
    transform: rotate(-180deg);
  }
}
@keyframes icon-rotate-close {
  0% {
    opacity: 0.5;
    transform: rotate(-180deg);
  }
  100% {
    opacity: 1;
    transform: rotate(0deg);
  }
}
</style>