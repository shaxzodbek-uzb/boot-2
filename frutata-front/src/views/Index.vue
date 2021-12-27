<template>
  <div>
    <button @click="showItems(4)">4</button>
    <button @click="showItems(3)">3</button>
    <button @click="showItems(5)">5</button>
    <div>
      <div v-for="(item, idx) in items" :key="idx">{{ item }}</div>
    </div>
    <!-- intro -->
    <IndexIntro />
    <!-- about -->
    <About />
    <IndexSlide />

    <IndexTalk />

    <IndexPack />

    <IndexPartners />

    <IndexContacts />
  </div>
</template>
<script>
export default {
  data() {
    return {
      countItems: 6,
    };
  },
  computed: {
    items() {
      let arr = [];
      for (let index = 1; index <= this.countItems; index++) {
        arr.push(index);
      }
      return arr;
    },
  },
  methods: {
    showItems(count) {
      this.countItems = count;
    },
  },
};
</script>
