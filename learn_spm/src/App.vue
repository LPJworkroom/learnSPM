<template>
  <div id="app">
    <navigator></navigator>
    <div style="margin-top:20px">
      <router-view style="margin:0 auto"></router-view>
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
  font-family: "微软雅黑",Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
</style>
