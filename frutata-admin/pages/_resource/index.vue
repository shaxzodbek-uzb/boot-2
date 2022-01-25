<template>
  <ResourceTable v-bind="{resource}" />
</template>

<script>
import resources from '@/resources'

export default {
  name: 'IndexPage',
  data () {
    return {
      resource: resources[this.$route.params.resource]
    }
  }

}
</script>
