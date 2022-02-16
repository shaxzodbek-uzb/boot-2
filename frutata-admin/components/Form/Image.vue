<template>
  <div class="w-1/2 p-2">
    <label class="block text-sm font-medium text-gray-700">{{ field.label }}</label>
    <input
      v-show="false"
      ref="file-picker"
      :value="value"
      type="file"
      class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
      @input="onInput"
    />
    <Button type="secondary" @click="openDialog">Fayl tanlash</Button>
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
      this.$emit('input', this.$refs['file-picker'].files[0])
    },
    openDialog () {
      this.$refs['file-picker'].click()
    }
  }
}
</script>

<style>
</style>
