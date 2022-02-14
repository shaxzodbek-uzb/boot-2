<template>
  <div class="shadow overflow-hidden sm:rounded-md mb-4">
    <div class="px-4 py-3 text-left text-lg font-semibold text-gray-700 sm:px-6">{{ field.label }}</div>
    <div class="px-4 py-5 bg-white sm:p-6">
      <div class="flex flex-wrap">
        <component
          :is="f.fieldType"
          v-for="f in field.fields"
          :key="f.fieldName"
          v-model="itemClone"
          :field="f"
        />
        {{ itemClone }}
      </div>
    </div>
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
    },
    fields: {
      type: Array,
      default () {
        return []
      }
    },
    label: {
      type: String,
      default: 'Label'
    }
  },
  data () {
    return {
      itemClone: {
      }
    }
  },
  watch: {
    value (newValue) {
      this.itemClone = JSON.parse(JSON.stringify(newValue))
    }
  },
  mounted () {
    this.itemClone = JSON.parse(JSON.stringify(this.value))
  }
}
</script>

<style>
</style>
