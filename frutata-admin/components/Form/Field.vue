<template>
  <Panel :label="field.label">
    <component
      :is="f.fieldType"
      v-for="f in field.fields"
      :key="f.fieldName"
      v-model="itemClone"
      :field="f"
    />
  </Panel>
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
