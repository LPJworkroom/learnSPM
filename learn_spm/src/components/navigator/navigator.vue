<template xmlns:v-for="http://www.w3.org/1999/xhtml">
    <div id="navigatorBar">
        <div v-for="link in links" :key="link">
            <router-link :to="link.route" class="link" >
                <div>{{link.text}}</div>
            </router-link>
        </div>

<!--        not logged in,show login button-->
        <div v-if="!userState.isLogged" class="userBar">
            <button v-on:click="dsf()" class="loginButton">登陆</button>
            <span>或</span>
            <button v-on:click="dsf()" class="registerButton">注册</button>
        </div>
        <div v-else>
            <div v-if="userState.userPosition==='student'">
<!--                should replace link from vuex store-->
                <router-link :to="'/myScore'" class="link">
                    我的成绩
                </router-link>
            </div>
            <div v-if="userState.userPosition==='teacher'">
                <!--                should replace link from vuex store-->
                <router-link :to="'/manageTest'" class="link">
                    管理测试
                </router-link>
            </div>
            <span>欢迎，{{userState.userName}}</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "navigator",
        props:{
        },

        data() {
            return {
                /*should replace link from vuex store*/
                links:[
                    {name:'index',text: '首页', route: '/',},
                    {name:'download',text: '下载区', route: '/download',},
                    {name:'bbs',text: '留言板', route: '/bbs',},
                    {name:'onlineTest',text: '在线测试', route: '/onlineTest'}
                ],
                /*should replace with vuex store*/
                userState:{
                    isLogged:true,
                    userName:'19170101',
                    userPosition:'student',
                }
            }
        },

        methods:{

        }
    }





</script>

<style scoped>
    div{
        border: black 1px solid;
    }

    #navigatorBar{
        margin: auto;
        width:60%;
        height:80px;
        border: black 1px solid;
    }

    .link{
        float:left;
        margin-right:5%;
        width: 10%;
        height:50px;
        display: flex;
        align-items: center;
        background: #42b983;
    }

    .userBar{
        float: right;
        width: 20%;
    }

    .loginButton{

    }
    .registerButton{

    }
</style>