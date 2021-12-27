<template>
  <div>
    <div v-if="loading">Loading ...</div>
    <div v-else v-for="item in items" :key="item.id">
      {{ item.name }}:
      {{ item.price | numberFormat(item.id & 1 ? "de-DE" : "ru-RU") }}
    </div>
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
};
</script>
