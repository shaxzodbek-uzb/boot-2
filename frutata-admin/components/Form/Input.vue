<template>
  <div class="w-1/2 p-2">
    <label class="block text-sm font-medium text-gray-700">{{ field.label }}</label>
    <input
      :value="value[field.fieldName]"
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
      type: Object || Array,
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
  data () {
    return {
      itemClone: {}
    }
  },
  watch: {
    value (newValue) {
      this.itemClone = JSON.parse(JSON.stringify(newValue))
    }
  },
  methods: {
    onInput (event) {
      this.itemClone[this.field.fieldName] = event.target.value
      this.$emit('input', this.itemClone)
    }
  }
}
</script>

<style>
</style>
