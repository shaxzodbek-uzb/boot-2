
<template>
  <div class="mt-5 md:mt-0 mt-10 sm:mt-0">
    <component
      :is="field.fieldType"
      v-for="field in fields"
      :key="field.fieldName"
      v-model="item"
      :field="field"
    />
    {{ item }}
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
      <button
        type="submit"
        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
      >Save</button>
    </div>
  </div>
</template>

<script>
import FormField from '~/components/Fields/Form/Field'
import InputField from '~/components/Fields/Form/InputField'
export default {
  data () {
    return {
      item: {
        name: 'iPhone',
        description: '',
        price: 0,
        image: ''
      },
      fields: [
        FormField('main', 'Asosiy ma\'lumotlar', [
          InputField('name', 'Nomi'),
          InputField('price', 'Narxi')
        ]),
        FormField('main', 'Qo\'shimcha ma\'lumotlar', [
          InputField('description', 'Tasnifi'),
          InputField('picture', 'Rasm')
        ])
      ]
    }
  }
}
</script>
