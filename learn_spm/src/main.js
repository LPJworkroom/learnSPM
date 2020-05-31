import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import index from "@/components/index/index";
import bbs from "@/components/bbs/bbs"
import my_score from "@/components/my_score/my_score";
import manage_test from "@/components/manage_test/manage_test";
import download from "@/components/download/download";
import edit_test from "@/components/edit_test/edit_test";
import about from "@/components/about/about";
import post from "./components/post/post";
import show_test from "@/components/show_test/show_test";
import online_test from "@/components/online_test/online_test";

Vue.use(VueRouter)
const router=new VueRouter({
  mode:'history',
  routes:[
    {
      name:'index',
      path:'/',
      component:index
    },
    {
      name:'showTest',
      path:'/showTest',
      component: show_test
    },
    {
      name:'bbs',
      path:'/bbs',
      component: bbs
    },
    {
      name:'myScore',
      path:'/myScore',
      component: my_score
    },
    {
      name:'manageTest',
      path:'/manageTest',
      component: manage_test
    },
    {
      name:'download',
      path:'/download',
      component: download
    },
    {
      name:'editTest',
      path: '/editTest',
      component: edit_test
    },
    {
      name:'about',
      path: '/about',
      component: about
    },
    {
      name:'post',
      path:'/post',
      component: post
    },
    {
      name:'onlineTest',
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
