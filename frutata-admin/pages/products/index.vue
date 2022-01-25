<template>
  <div>
    <div>Diagramma</div>
    <ResourceTable v-bind="{resource}" />
  </div>
</template>

<script>
import products from '@/resources/products'

export default {
  name: 'IndexPage',
  data () {
    return {
      resource: products
    }
  }

}
</script>
