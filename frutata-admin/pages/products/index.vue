<template>
  <ResourceTable v-bind="{resource}" />
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
