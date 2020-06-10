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
  },
  created() {
    if(this.$cookies.isKey('isLogged')){
      let uinfo={};
      uinfo.isLogged=this.$cookies.get("isLogged");
      uinfo.uid=this.$cookies.get("uid");
      uinfo.account=this.$cookies.get("account");
      uinfo.position=this.$cookies.get("position");
      this.$store.state.userInfo=uinfo;
    }
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
