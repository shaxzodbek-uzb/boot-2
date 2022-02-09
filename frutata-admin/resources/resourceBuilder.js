// get cameCase and cababCase from lodash
import cababCase from 'lodash/cababCase'
import camelCase from 'lodash/camelCase'

export default function (resourceName, headers) {
  // resource name to cabab case
  const resourceCabab = cababCase(resourceName)

  // resource name to camel case
  const resourceCamel = camelCase(resourceName)

  return {
    label: resourceName,
    name: resourceCamel,
    name_cebab: resourceCabab,
    headers,
    api: {
      list: `/${resourceCabab}`,
      show: `/${resourceCabab}`,
      create: `/${resourceCabab}`,
      edit: `/${resourceCabab}`,
      delete: `/${resourceCabab}`
    },
    routes: {
      list: `/${resourceCabab}`
    }
  }
}
