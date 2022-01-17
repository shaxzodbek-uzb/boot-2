import auth from "@websanova/vue-auth/dist/v2/vue-auth.esm.js";
import { BootstrapVue, IconsPlugin } from "bootstrap-vue";
import "bootstrap-vue/dist/bootstrap-vue.css";
import "bootstrap/dist/css/bootstrap.css";
import camelCase from "lodash/camelCase";
import upperFirst from "lodash/upperFirst";
import Vue from "vue";
import VueAxios from "vue-axios";
import App from "./App.vue";
import "./assets/main.css";
import "./plugin/auth";
import authConfig from "./plugin/auth";
import axios from "./plugin/axios";
import "./plugin/filters";
import router from "./router";
import store from "./store";
Vue.config.productionTip = false;
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

Vue.use(VueAxios, axios);
Vue.use(auth, authConfig);

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
