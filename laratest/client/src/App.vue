<template>
  <div id="app">
    {{ results }}
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "App",
  data() {
    return {
      results: []
    };
  },
  async mounted() {
    let response = await axios.get("http://0.0.0.0:8000/api/test");
    this.results = response.data;
  }
};
</script>

<style></style>
