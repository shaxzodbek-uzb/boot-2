<template>
  <div class="w-1/2 p-2">
    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
    <select
      id="country"
      name="country"
      autocomplete="country-name"
      class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
    >
      <option>United States</option>
      <option>Canada</option>
      <option>Mexico</option>
    </select>
  </div>
</template>

<script>
export default {

}
</script>

<style>
</style>
