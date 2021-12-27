<template>
  <div id="app">
    <Navbar />
    <router-view />
    <Footer />
    <input v-model="value" />
    <!-- <img src="@/assets/img/1.png" alt="" /> -->
  </div>
</template>
<script>
import Footer from "./components/Footer";
import Navbar from "./components/Navbar";
export default {
  data() {
    return {
      value: "",
    };
  },
  components: { Footer, Navbar },
  // beforeCreate() {
  //   console.log("before create");
  // },
  // created() {
  //   console.log("created");
  // },
  // beforeUpdate() {
  //   console.log("before update");
  // },
  // updated() {
  //   console.log("updated");
  // },
};
</script>
