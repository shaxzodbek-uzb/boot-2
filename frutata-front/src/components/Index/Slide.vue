<template>
  <div class="slide">
    <div class="container">
      <div class="slide__content row">
        <div class="slide__title col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
          Продукции <span class="ontheground">Frutata</span>
        </div>
        <a
          href="#"
          class="slide__more col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"
          >Все продукции</a
        >
      </div>
      <div style="padding: 10px 10px">
        <VueSlickCarousel :options="slickOptions">
          <ProductListItem
            v-for="(item, idx) in items"
            :key="idx"
            :item="item"
          />
        </VueSlickCarousel>
      </div>
    </div>
  </div>
</template>

<script>
import VueSlickCarousel from "slick-vuejs";
// optional style for arrows & dots
import "slick-vuejs/dist/slick-vuejs-theme.css";
import "slick-vuejs/dist/slick-vuejs.css";

export default {
  components: { VueSlickCarousel },
  data() {
    return {
      slickOptions: {
        slidesToShow: 3,
        // Any other options that can be got from plugin documentation
      },
      items: [
        {
          img: require("@/assets/img/2.png"),
          title: "В пакетная упаковка1",
          text: "Фруктовый микс «Слива, яблоко, абрикос»",
        },
        {
          img: require("@/assets/img/3.png"),
          title: "В пакетная упаковка2",
          text: "Фруктовый микс «Слива, яблоко, абрикос»",
        },
        {
          img: require("@/assets/img/2.png"),
          title: "В пакетная упаковка3",
          text: "Грушевые чипсы",
        },
        {
          img: require("@/assets/img/4.png"),
          title: "В пакетная упаковка",
          text: "Фруктовый микс «Слива, яблоко, абрикос»",
        },
      ],
    };
  },
};
</script>
