import Vue from "vue";
Vue.filter("numberFormat", function (value, formating = "ru-RU") {
    return new Intl.NumberFormat(formating).format(value);
});
Vue.filter("fullName", function (user, formating = "ru-RU") {
    return user.name + user.surename;
});
