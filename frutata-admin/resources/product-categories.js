export default {
  name: 'productCategories',
  headers: ['id', 'name'],
  api: {
    list: '/product-categories',
    show: '/product-categories',
    create: '/product-categories',
    edit: '/product-categories',
    delete: '/product-categories'
  }
}
