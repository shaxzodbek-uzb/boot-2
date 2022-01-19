<template>
  <Table
    v-bind="{items, headers}"
  >
    <template #image="{value}">
      <div :style="{backgroundImage: `url(http://frutata.test/storage/${value}`, backgroundSize: 'cover', backgroundPosition: 'center'}" class="rounded-full w-14 h-14 shadow" />
    </template>
  </Table>
</template>

<script>
export default {
  props: {
    resource: {
      type: Object,
      require: true,
      default: () => {}
    }
  },
  data () {
    return {
      items: []
    }
  },
  computed: {
    headers () {
      return this.resource.headers
    }
  },
  mounted () {
    this.$axios.$get(this.resource.api.list).then((res) => {
      this.items = res.items
    })
  }
}
</script>

<style>

</style>
