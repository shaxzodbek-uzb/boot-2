<template>
  <div>
    <Button type="success" size="sm" icon="menu" @click="log()">
      <template #default>
        <div></div>
        <p class="border p-1 m-2">2</p>
      </template>
      <template #append>
        <div>Bu tugmani bos!</div>
      </template>
    </Button>
    <Buttons />
    <!-- intro -->
    <IndexIntro />
    <!-- about -->
    <About />
    <IndexSlide />

    <IndexTalk />

    <IndexPack />
    <!-- <IndexPartners /> -->

    <IndexContacts />
  </div>
</template>
<script>
import Buttons from "../components/Buttons.vue";
import Button from "../components/UI/Button.vue";
const serverData = [
  { id: 1, name: "Iphone", price: 20082736 },
  { id: 2, name: "Iphone 2", price: 30082736 },
  { id: 3, name: "Iphone 3", price: 40082736 },
  { id: 4, name: "Iphone 4", price: 50082736 },
  { id: 5, name: "Iphone 5", price: 60082736 },
  { id: 6, name: "Iphone 6", price: 70082736 },
];
//
export default {
  data() {
    return {
      items: [],
      loading: true,
    };
  },
  mounted() {
    setTimeout(() => {
      this.items = serverData;
      this.loading = false;
    }, 2000);
  },
  components: { Buttons, Button },
  methods: {
    log() {
      console.log("Button clicked");
    },
  },
};
</script>
