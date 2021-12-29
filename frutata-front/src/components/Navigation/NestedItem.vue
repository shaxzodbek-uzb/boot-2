<template>
  <b-nav-item-dropdown :text="item.title" right>
    <b-dropdown-item
      href="#"
      v-for="(child, idx1) in item.children"
      :key="idx1"
      >{{ child.title }}</b-dropdown-item
    >
  </b-nav-item-dropdown>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true,
    },
  },
};
</script>
<style></style>
