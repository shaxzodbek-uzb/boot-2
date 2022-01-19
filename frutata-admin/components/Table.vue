<template>
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th v-for="(header, idx) in headers" :key="idx" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  {{ header }}
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="(item, idx1) in items" :key="idx1">
                <td v-for="(header, idx) in headers" :key="idx" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <slot :name="header" :item="item" :value="item[header]">
                    {{ item[header] }}
                  </slot>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    headers: {
      type: Array,
      default: () => ['id']
    },
    items: {
      type: Array,
      default: () => []
    }
  }
}
</script>

<style>

</style>
