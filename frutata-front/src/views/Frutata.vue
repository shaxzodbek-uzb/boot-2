<template>
  <div>
    <CounterComponent v-model="pickedNumber" />
    <input type="text" v-model="pickedNumber" />
    <span v-if="pickedNumber < 0">Notify!</span>
    <span v-else>OK!</span>
  </div>
</template>

<script>
import CounterComponent from "@/components/Counter";

export default {
  components: { CounterComponent },
  data() {
    return {
      pickedNumber: 11,
    };
  },
  methods: {
    handleChanges(newValue) {
      console.log(newValue);
      if (newValue < 0) this.showNotification = true;
      else this.showNotification = false;
    },
  },
};
</script>
