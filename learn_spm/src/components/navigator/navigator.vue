<template xmlns:v-for="http://www.w3.org/1999/xhtml">
    <div id="navigatorBar">
        <div v-for="link in links" :key="link">
            <router-link :to="{name:link.name}" class="link" >
                <div>{{link.text}}</div>
            </router-link>
        </div>

<!--        not logged in,show login button-->
        <div v-if="!userState.isLogged" class="userBar">
            <button v-on:click="this.openPopUp()" class="loginButton">登陆</button>
            <span>或</span>
            <button v-on:click="openPopUp()" class="registerButton">注册</button>
        </div>
<!--        logged in ,show user name and new link-->
        <div v-else>
            <div v-if="userState.userPosition==='student'">
                <router-link :to="{name:'myScore'}" class="link">
                    我的成绩
                </router-link>
            </div>
            <div v-if="userState.userPosition==='teacher'">
                <!--                should replace link from vuex store-->
                <router-link :to="{name:'manageTest'}" class="link">
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
                links:[
                    {name:'index',text: '首页',},
                    {name:'download',text: '下载区',},
                    {name:'bbs',text: '留言板',},
                    {name:'onlineTest',text: '在线测试',}
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
            openPopUp(){

            },
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