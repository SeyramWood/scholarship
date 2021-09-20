<template>
  <input
    type="range"
    step="1"
    :min="minValue"
    :max="maxValue"
    :value="customValue"
    :class="['range__slider', getColor]"
    @input="dragRange($event)"
    ref="range"
  />
</template>

<script>
export default {
  name: "SRange",

  props: {
    color: {
      require: true,
      type: String,
    },
    min: {
      type: String,
      default: "0",
    },
    max: {
      type: String,
      default: "100",
    },
    value: {
      type: String,
      default: "100",
    },
  },
  computed: {
    getColor() {
      switch (this.color) {
        case "r-success":
          return "r-success";
        case "r-warning":
          return "r-warning";
        default:
          return "";
      }
    },
  },
  beforeMount() {
    this.$nextTick(() => {
      this.maxValue = this.max;
      this.minValue = this.min;
      this.customValue = this.value;
    });
  },
  data() {
    return {
      minValue: null,
      maxValue: null,
      customValue: 0,
    };
  },
  methods: {
    dragRange(e) {
      this.updateSlider(e.target);
    },
    generateBackground(el) {
      if (el.value === this.minValue) {
        return;
      }
      let percentage =
        ((el.value - this.minValue) / (this.maxValue - this.minValue)) * 100;
      switch (this.color) {
        case "r-success":
          return `background: linear-gradient(to right, #4caf50, #4caf50 ${percentage}%, #4caf4f65 ${percentage}%, #4caf4f65 100%)`;
        case "r-warning":
          return `background: linear-gradient(to right, #fdc408, #fdc408 ${percentage}%, #f7ca0248 ${percentage}%, #f7ca0248 100%)`;
      }
    },
    updateSlider(el) {
      el.style = this.generateBackground(el);
    },
  },
};
</script>

<style lang="scss" scoped>
[type="range"].range__slider {
  &.r-success {
    background: rgba(76, 175, 79, 0.286);
  }
  &.r-warning {
    background: rgba(253, 196, 8, 0.308);
  }
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 999px;
  outline: none;
  padding: 0;
  margin: 0;
  // color: #4caf4f65;
  // color: #4caf50;

  &::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 12px;
    height: 22px;
    border-radius: 9999px;
    background: #c7c7c7;
    cursor: pointer;
    -webkit-transition: background 0.15s ease-in-out;
    transition: background 0.15s ease-in-out;
  }
  &::-moz-range-thumb {
    width: 15px;
    height: 25px;
    border-radius: 9999px;
    background: #c7c7c7;
    cursor: pointer;
    -webkit-transition: background 0.15s ease-in-out;
    transition: background 0.15s ease-in-out;
  }
}

/* custom thumb */

.range__slider [type="range"]::-webkit-slider-thumb:hover {
  // background: #f7ca02bd;
}

.range__slider [type="range"]::-moz-range-thumb:hover {
  // background: #f9ca24;
}

/* remove border */
input::-moz-focus-inner,
input::-moz-focus-outer {
  border: 0;
}
</style>