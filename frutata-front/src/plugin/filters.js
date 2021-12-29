import Vue from "vue";
Vue.filter("numberFormat", function (value, formating = "ru-RU") {
  return new Intl.NumberFormat(formating).format(value);
});
Vue.filter("fullName", function (user) {
  return user.name + user.surename;
});
