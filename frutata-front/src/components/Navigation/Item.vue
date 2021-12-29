<template>
  <li class="nav-item" @click="$emit('active')">
    <a
      class="nav-link"
      :class="{ 'btn btn-info': item.isActive }"
      aria-current="page"
      href="#"
    >
      {{ item.title }}
    </a>
  </li>
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
