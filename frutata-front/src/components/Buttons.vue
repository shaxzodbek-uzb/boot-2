<template>
  <div>
    <button
      type="button"
      class="btn btn-primary p-1 m-1 shadow-sm"
      @click="log()"
    >
      Primary
    </button>
    <button type="button" class="btn btn-secondary p-1 m-1 shadow-sm">
      Secondary
    </button>
    <button type="button" class="btn btn-success p-1 m-1 shadow-sm">
      Success
    </button>
    <button type="button" class="btn btn-danger p-1 m-1 shadow-sm">
      Danger
    </button>
    <button type="button" class="btn btn-warning p-1 m-1 shadow-sm">
      Warning
    </button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>

    <button type="button" class="btn btn-link">Link</button>
  </div>
</template>

<script>
export default {
  methods: {
    log() {
      console.log("Button clicked");
    },
  },
};
</script>

<style></style>
