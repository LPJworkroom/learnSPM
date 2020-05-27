<template>
  <div id="app">
    <navigator></navigator>
    <div style="width: 70%;margin-left: 15%">
      <router-view ></router-view>
    </div>
  </div>
</template>

<script>
import navigator from "@/components/navigator/navigator";

export default {
  name: 'App',
  components: {
    navigator
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
