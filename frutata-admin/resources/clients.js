export default {
  label: 'Clients',
  name: 'clients',
  name_cebab: 'clients',
  headers: ['id', 'name'],
  api: {
    list: '/clients',
    show: '/clients',
    create: '/clients',
    edit: '/clients',
    delete: '/clients'
  },
  routes: {
    list: '/clients'
  }
}
