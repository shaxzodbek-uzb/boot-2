<template>
  <ResourceTable v-bind="{resource}" />
</template>

<script>
import productCategories from '@/resources/product-categories'
export default {
  name: 'IndexPage',
  data () {
    return {
      resource: productCategories
    }
  }

}
</script>
