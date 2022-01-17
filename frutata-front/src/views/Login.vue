<template>
  <div>
    <input type="email" v-model="login.username" />
    <input type="password" v-model="login.password" />
    <button @click="submit">Submit</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      login: {
        username: "shaxzodbek@boot.uz",
        password: "123123123",
      },
    };
  },
  methods: {
    submit() {
      // this.$http
      //   .post("/login", { email: this.email, password: this.password })
      //   .then((data) => {
      //     //   console.log(data);
      //     localStorage.setItem("token", data.access_token);
      //     //   console.log(response);
      //   });
      this.$auth.login({
        body: this.login,
        data: this.login,
      });
    },
  },
};
</script>

<style></style>
