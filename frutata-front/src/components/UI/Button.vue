<template>
  <div :class="[size]">
    <button
      type="button"
      class="btn shadow-sm"
      :class="[buttonType, buttonSize]"
      @click="$emit('click')"
    >
      <slot>
        <div class="border">1</div>
      </slot>
    </button>
    <slot name="append">
      <div @click="log2()">Bu tugmani bosma!</div>
    </slot>
  </div>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: "default",
    },
    size: {
      type: String,
      default: "md",
    },
    title: {
      type: String,
      default: "Tugmacha",
    },
    icon: {
      type: String,
      default: "",
    },
  },
  computed: {
    buttonType() {
      return this.types[this.type] ?? this.types.primary;
    },
    buttonSize() {
      return this.sizes[this.size] ?? this.sizes.md;
    },
  },
  data() {
    return {
      types: {
        default: "btn-default",
        primary: "btn-primary",
        info: "btn-info",
        danger: "btn-danger",
        success: "btn-success",
        warning: "btn-warning",
        link: "btn-link",
        dark: "btn-dark",
        light: "btn-light",
      },
      sizes: {
        lg: "btn-lg",
        md: "btn-md",
        sm: "btn-sm",
      },
    };
  },
  methods: {
    log2() {
      console.log("bekor bosding!");
    },
  },
};
</script>
