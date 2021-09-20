<template>
  <fragment>
    <slot></slot>
  </fragment>
</template>

<script>
import { Fragment } from "vue-fragment";
export default {
  name: "SAccordians",
  components: {
    Fragment,
  },
  props: {
    defaultIndex: {
      type: Number,
      default: null,
    },
  },
  created() {
    this.tabs = this.$children;
  },

  mounted() {
    if (this.defaultIndex === 0 || this.defaultIndex) {
      this.selectAccordian(this.defaultIndex);
    }
    this.$nextTick(() => {
      this.tabs.forEach((tab, idx) => {
        tab.accordianIndex = idx;
        tab.selectAccordian = this.selectAccordian;
      });
    });
  },
  data() {
    return {
      tabs: [],
    };
  },
  methods: {
    selectAccordian(index) {
      this.tabs.forEach((tab, idx) => {
        if (idx === index) {
          tab.activeAccordian = !tab.activeAccordian;
        } else {
          tab.activeAccordian = idx === index;
        }
        tab.activeIndex = index;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
</style>