export default {
  label: 'Partners',
  name: 'partners',
  name_cebab: 'partners',
  headers: ['id', 'name'],
  api: {
    list: '/partners',
    show: '/partners',
    create: '/partners',
    edit: '/partners',
    delete: '/partners'
  },
  routes: {
    list: '/partners'
  }
}
