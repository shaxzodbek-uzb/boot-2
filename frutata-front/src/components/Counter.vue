<template>
  <div>
    <button @click="$emit('input', value - 1)">-</button>
    <div>{{ value }}</div>
    <button @click="$emit('input', value + 1)">+</button>
  </div>
</template>

<script>
export default {
  props: {
    value: {
      type: Number,
      required: true,
    },
  },
};
</script>

<style></style>
