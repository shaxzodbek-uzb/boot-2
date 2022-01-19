<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<template>
  <div class="mt-5 md:mt-0 mt-10 sm:mt-0">
    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-3 bg-gray-50 text-left text-lg font-semibold text-gray-700 sm:px-6">
        Yangi mahsulot yaratish
      </div>
      <div class="px-4 py-5 bg-white sm:p-6">
        <div class="flex flex-wrap">
          <div class="w-1/2 p-2">
            <label for="first-name" class="block text-sm font-medium text-gray-700">Nomi</label>
            <input id="first-name" type="text" name="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
          <div class="w-1/2 p-2">
            <label for="first-name" class="block text-sm font-medium text-gray-700">Mahsulot haqida</label>
            <input id="first-name" type="text" name="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
          <div class="w-1/2 p-2">
            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
            <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>
      </div>
      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Save
        </button>
      </div>
    </div>
  </div>
</template>
