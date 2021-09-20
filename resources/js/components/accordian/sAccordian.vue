<template>
  <fragment>
    <div class="s__accordian__content">
      <div class="s__accordians">
        <div class="s__accordians__header">
          <template v-if="isHeaderSlot">
            <header @click="selectAccordian(accordianIndex)">
              <slot name="header"></slot>
            </header>
          </template>
          <template v-else>
            <ul>
              <li
                @click="selectAccordian(accordianIndex)"
                :class="[activeAccordian ? 'isActive' : 'inActive']"
              >
                <span class="label">{{ label }}</span>
                <span class="icon">
                  <v-icon>mdi-chevron-down</v-icon>
                </span>
              </li>
            </ul>
          </template>
        </div>
        <article v-show="activeAccordian" class="s__accordians__content">
          <slot></slot>
        </article>
      </div>
    </div>
  </fragment>
</template>

<script>
import { Fragment } from "vue-fragment";
export default {
  name: "SAccordian",
  props: {
    label: {
      require: true,
      type: String,
    },
    badge: {
      type: Number,
      default: NaN,
    },
  },
  components: {
    Fragment,
  },
  created() {},
  beforeMount() {
    this.$nextTick(() => {
      if (this.$slots.header) {
        this.isHeaderSlot = true;
      }
    });
  },
  mounted() {
    // console.log(this.tabs);
  },
  data() {
    return {
      activeAccordian: false,
      accordianIndex: null,
      activeIndex: null,
      isHeaderSlot: false,
      selectAccordian: null,
    };
  },
  methods: {},
};
</script>

<style lang="scss" scoped>
$primary: #99001c;
$text: #26262693;
$active: #000000;
$white: #ffffff;
.s__accordians {
  width: 100%;

  &__header {
    width: 100%;
    & > ul {
      width: 100%;
      padding-left: 0 !important;
      list-style-type: none;
      & > li {
        width: 100%;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        cursor: pointer;
        font-size: 1.2rem;
        user-select: none;
        margin: 0.5rem 0;
        &:not(:last-child) {
          margin: 0.5 1rem 0.5 0;
        }
        color: $text;
        border-radius: 3px;
        display: flex;
        & > span {
          letter-spacing: 0.05rem;
          transition: color 0.2s ease-in;
          &.icon {
            margin-left: 1rem;
          }
        }
        &:hover > span {
          color: $active;
        }
      }
    }
  }
  &__content {
    width: 100%;
  }
}
li.isActive {
  & > .label {
    color: $active;
  }
  & > .icon {
    display: inline-block;
    animation: icon-rotate-up 0.2s ease-in-out forwards;
    & > i {
      color: $active;
    }
  }
}
li.inActive {
  & > .icon {
    animation: icon-rotate-down 0.2s ease-in-out forwards;
  }
}
@keyframes icon-rotate-up {
  0% {
    opacity: 0.5;
    transform: rotate(0deg);
  }
  100% {
    opacity: 1;
    transform: rotate(-180deg);
  }
}
@keyframes icon-rotate-down {
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