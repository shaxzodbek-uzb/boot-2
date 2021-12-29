// import hello from "@/functions/hello";
export default {
  data() {
    return {
      loading: true,
    };
  },
  mounted() {
    this.loadData().then(() => {
      console.log("data loaded in mixins");
    });
  },
  methods: {
    // hello,
    async loadData() {
      // return new Promise();
      console.log("loading data from server in mixin");
    },
  },
};
