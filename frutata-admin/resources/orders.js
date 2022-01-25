export default {
  label: 'Orders',
  name: 'orders',
  name_cebab: 'orders',
  headers: ['id', 'name'],
  api: {
    list: '/orders',
    show: '/orders',
    create: '/orders',
    edit: '/orders',
    delete: '/orders'
  },
  routes: {
    list: '/orders'
  }
}
