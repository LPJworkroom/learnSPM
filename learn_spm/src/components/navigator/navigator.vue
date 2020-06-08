<template xmlns:v-for="http://www.w3.org/1999/xhtml">

    <div style="background-color: #e3f2fd;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">LearnSPM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">dfsd</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li v-for="(link,ind) in links" :key="ind" class="nav-item active">
                        <router-link :to="{name:link.name}" class="nav-link">{{link.text}}</router-link>
                    </li>
                </ul>
            </div>
            <div v-if="!userState.isLogged" class="userBar">
                <button v-on:click="parent.parent.$emit('login-button-clicked')" class="btn btn-primary">登陆</button>
                <span> 或 </span>
                <button v-on:click="parent.$emit('register-button-clicked')" class="btn btn-secondary">注册</button>
            </div>
            <div v-else class="userBar">
                <span>欢迎，{{userState.account}}</span>
                <span style="width: 10px"></span>
                <div v-if="userState.position==='1'">
                    <router-link :to="{name:'myScore'}" class="btn btn-info" style="float:right">
                        我的成绩
                    </router-link>
                </div>
                <div v-if="userState.position==='0'">
                    <!--                should replace link from vuex store-->
                    <router-link :to="{name:'manageTest'}" class="btn btn-info" style="float:right">
                        管理测试
                    </router-link>
                </div>
                <span style="width: 10px"></span>
                <div>
                    <button class="btn btn-danger" style="float:right" @click="logout">注销</button>
                </div>
            </div>
        </nav>


        <!--        not logged in,show login button-->
<!--        logged in ,show user name and new link-->

    </div>
</template>

<script>

    export default {
        name: "navigator",
        props:{
        },

        data() {
            return {
                links:[
                    {name:'index',text: '首页',},
                    {name:'download',text: '下载区',},
                    {name:'bbs',text: '留言板',},
                    {name:'showTest',text: '在线测试',}
                ],
            }
        },

        computed:{
            userState(){
                return this.$store.state.userInfo;
            }
        },

        methods:{
            logout(){
                this.$store.state.userInfo.isLogged=false;
                window.location.href='/';
            },
        }
    }





</script>

<style scoped>
    .userBar{
        float: right;
        /*width: 40%;*/
        display: flex;
        align-items: center;
    }

    span{
        color:white
    }
</style>