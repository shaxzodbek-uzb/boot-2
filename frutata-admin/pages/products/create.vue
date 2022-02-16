
<template>
  <div class="mt-5 md:mt-0 mt-10 sm:mt-0">
    <Panel label="Asosiy ma'lumotlar">
      <component
        :is="field.fieldType"
        v-for="field in fields"
        :key="field.fieldName"
        v-model="item[field.fieldName]"
        :field="field"
      />
    </Panel>
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
      <Button label="Saqlash" @click="submitForm()">Saqlash</Button>
    </div>
  </div>
</template>

<script>
import products from '~/resources/products'
import InputField from '~/components/Fields/Form/InputField'
import ImageField from '~/components/Fields/Form/ImageField'
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
        InputField('name', 'Nomi'),
        InputField('price', 'Narxi'),
        InputField('description', 'Tasnifi'),
        ImageField('image', 'Rasm')
      ]
    }
  },
  methods: {
    // submitForm () {
    //   this.$axios.$post(products.api.create, this.item).then((res) => {
    //     console.log(res)
    //   })
    // },
    convertModelToFormData (model, form, namespace = '') {
      const formData = form || new FormData()
      if (model instanceof File) {
        formData.append(namespace, model)
        return
      }
      if (!(model instanceof Array) && typeof model !== 'object') {
        if (model instanceof Date) {
          formData.append(namespace, model.toISOString())
        } else {
          formData.append(namespace, model.toString())
        }
      } else {
        for (const propertyName in model) {
          const formKey = namespace
            ? `${namespace}[${propertyName}]`
            : propertyName
          if (model[propertyName] instanceof Array) {
            model[propertyName].forEach((element, index) => {
              const tempFormKey = `${formKey}[${index}]`
              this.convertModelToFormData(element, formData, tempFormKey)
            })
          } else {
            this.convertModelToFormData(model[propertyName], formData, formKey)
          }
        }
      }
      return formData
    },
    submitForm () {
      const formData = this.convertModelToFormData(this.item)
      this.$axios.$post(products.api.create, formData).then((res) => {
        // this.$router.push(this.resource.routes.index)
        console.log(res)
      })
    }
  }
}
</script>
