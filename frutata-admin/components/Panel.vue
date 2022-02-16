<template>
  <div class="shadow overflow-hidden sm:rounded-md mb-4">
    <div class="px-4 py-3 text-left text-lg font-semibold text-gray-700 sm:px-6">{{ label }}</div>
    <div class="px-4 py-5 bg-white sm:p-6">
      <div class="flex flex-wrap">
        <slot></slot>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    label: {
      default: 'Label',
      type: String
    }
  }
}
</script>
