import driverHttpAxios from "@websanova/vue-auth/dist/drivers/http/axios.1.x.esm.js";
import driverRouterVueRouter from "@websanova/vue-auth/dist/drivers/router/vue-router.2.x.esm.js";
import router from "../router";
import axios from "./axios";
export default {
  plugins: {
    http: axios,
    router: router,
  },
  drivers: {
    http: driverHttpAxios,
    auth: {
      request: function (req, token) {
        this.drivers.http.setHeaders.call(this, req, {
          Authorization: "Bearer " + token,
        });
      },

      response: function (res) {
        return res.data.access_token;
      },
    },
    router: driverRouterVueRouter,
  },
  options: {
    authRedirect: { path: "/auth/login" },
    forbiddenRedirect: { path: "/403" },
    notFoundRedirect: { path: "/404" },
    tokenDefaultKey: "access_token",
    // tokenImpersonateKey: 'access_token',
    rolesKey: "type",
    registerData: {
      url: "auth/register",
      method: "POST",
      redirect: "/auth/login",
      autoLogin: true,
    },
    loginData: {
      url: "auth/login",
      method: "POST",
      redirect: "/",
      fetchUser: true,
      staySignedIn: true,
    },
    logoutData: {
      url: "auth/logout",
      method: "POST",
      redirect: "/",
      makeRequest: false,
    },
    fetchData: { url: "auth/me", method: "POST", enabled: true },
    refreshData: {
      url: "auth/refresh",
      method: "GET",
      enabled: false,
      interval: 30,
    },
    impersonateData: {
      url: "auth/impersonate",
      method: "POST",
      redirect: "/",
      fetchUser: true,
    },
    unimpersonateData: {
      url: "auth/unimpersonate",
      method: "POST",
      redirect: "/admin",
      fetchUser: true,
      makeRequest: false,
    },
    oauth2Data: {
      url: "auth/social",
      method: "POST",
      redirect: "/",
      fetchUser: true,
    },
    parseUserData: (data) => {
      return data.user || {};
    },
  },
};
