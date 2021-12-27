import { BootstrapVue, IconsPlugin } from "bootstrap-vue";
import "bootstrap-vue/dist/bootstrap-vue.css";
import "bootstrap/dist/css/bootstrap.css";
import camelCase from "lodash/camelCase";
import upperFirst from "lodash/upperFirst";
import Vue from "vue";
import App from "./App.vue";
import "./assets/main.css";
import router from "./router";
import store from "./store";
Vue.config.productionTip = false;

Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

const requireComponent = require.context(
  "./components",
  true,
  /[A-Z]\w+\.(vue|js)$/
);
requireComponent.keys().forEach((fileName) => {
  const componentConfig = requireComponent(fileName);
  let path_list = fileName.split("/");
  let componentName = path_list.pop();
  path_list.shift();

  componentName = upperFirst(
    camelCase(path_list.join("") + componentName.replace(/\.\w+$/, ""))
  );
  Vue.component(componentName, componentConfig.default || componentConfig);
});

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount("#app");
