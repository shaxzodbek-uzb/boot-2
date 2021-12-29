<template>
  <div>
    <div id="bp" class="card">
      <div class="kimlip">
        <img class="card__img" :src="require('@/assets/img/2.png')" alt="" />
      </div>
      <div class="card__cont">
        <div class="card__title">{{ item.title }}</div>
        <div class="card__txt">{{ item.text }}</div>
        <div class="card__more">Подробнее</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: false,
      default() {
        return {};
      },
    },
  },
};
</script>

<style></style>
