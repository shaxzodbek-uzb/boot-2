<template>
  <div class="w-1/2 p-2">
    <label class="block text-sm font-medium text-gray-700">{{ field.label }}</label>
    <input
      :value="value"
      type="text"
      class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
      @input="onInput"
    />
  </div>
</template>

<script>
export default {
  props: {
    value: {
      type: null,
      default () {
        return {}
      }
    },
    field: {
      type: Object,
      default () {
        return {}
      }
    }
  },
  methods: {
    onInput (event) {
      this.$emit('input', event.target.value)
    }
  }
}
</script>

<style>
</style>
