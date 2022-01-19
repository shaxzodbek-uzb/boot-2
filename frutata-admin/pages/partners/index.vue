<template>
  <ResourceTable v-bind="{resource}" />
</template>

<script>
import partners from '@/resources/partners'
export default {
  name: 'IndexPage',
  data () {
    return {
      resource: partners
    }
  }

}
</script>
