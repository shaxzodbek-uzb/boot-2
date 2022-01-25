export default {
  label: 'Products',
  name: 'products',
  name_cebab: 'products',
  headers: ['id', 'image', 'name', 'description'],
  api: {
    list: '/products',
    show: '/products',
    create: '/products',
    edit: '/products',
    delete: '/products'
  },
  routes: {
    list: '/products'
  }
}
