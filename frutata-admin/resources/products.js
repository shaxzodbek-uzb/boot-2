export default {
  name: 'products',
  headers: ['id', 'image', 'name', 'description'],
  api: {
    list: '/products',
    show: '/products',
    create: '/products',
    edit: '/products',
    delete: '/products'
  }
}
