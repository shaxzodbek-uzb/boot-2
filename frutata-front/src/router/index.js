import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "MainPage",
    component: () => import("../views/Index"),
  },
  {
    path: "/support",
    name: "SupportPage",
    meta: {
      middleware: "auth",
    },
    component: () => import("../views/Support"),
  },
  {
    path: "/login",
    name: "LoginPage",
    component: () => import("../views/Login"),
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});
router.beforeEach((to, from, next) => {
  console.log(to, from, next);
  const matched = to.matched;
  const middlewares = [];
  matched.forEach((element) => {
    middlewares.push(element.meta.middleware);
  });
  console.log(middlewares);
  // auth middleware logic
  if (middlewares.pop() == "auth") {
    if (!localStorage.getItem("token")) {
      if (to.name != "LoginPage") next("login");
    }
  }
  //necessary logic to resolve the hook
  //   next("login");
  // }
  next();
});
export default router;
