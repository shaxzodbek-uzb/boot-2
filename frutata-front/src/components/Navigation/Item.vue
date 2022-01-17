<template>
  <li class="nav-item" @click="$emit('active')">
    <router-link
      class="nav-link"
      :class="{ 'btn btn-info': item.isActive }"
      aria-current="page"
      to="/support"
    >
      {{ item.title }}
    </router-link>
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
