export default {
  label: 'Product categories',
  name: 'productCategories',
  name_cebab: 'product-categories',
  headers: ['id', 'name'],
  api: {
    list: '/product-categories',
    show: '/product-categories',
    create: '/product-categories',
    edit: '/product-categories',
    delete: '/product-categories'
  },
  routes: {
    list: '/product-categories'
  }
}
