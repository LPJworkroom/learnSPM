import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import index from "@/components/index/index";
import online_test from "@/components/online_test/online_test";

Vue.use(VueRouter)
const router=new VueRouter({
  mode:'history',
  routes:[
    {
      path:'/',
      component:index
    },
    {
      path:'/onlineTest',
      component: online_test
    }
  ]
})

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  router:router
}).$mount('#app')
