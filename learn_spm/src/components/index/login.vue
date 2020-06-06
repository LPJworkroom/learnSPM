<template>
    <div class="rightPart">
        <div v-if="!userInfo.isLogged" class="buttonArea">
            <button class="btn-block btn btn-info" @click="loginButtonClicked()">登录</button>
            <button class="btn-block btn btn-success" @click="registerButtonClicked()">注册</button>
        </div>
        <div v-else>
            <p style="font-size: 40px;font-family: Consolas;text-shadow: black 1px 1px 1px;">软件项目管理</p>
        </div>
        <ul class="list-group" style="width: 80%;margin-top:20px;margin-left: 15%">
            <li class="list-group-item active">了解更多</li>
            <li v-for="(link,ind) in links" :key="ind" @click="scrollTo(link.toId)" style="" class="list-group-item">
                {{link.text}}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "login",

        computed:{
            userInfo() {
                return this.$store.state.userInfo;
            }
        },


        data(){
            return{
                links:[
                    {text:'课程介绍',toId:'course'},
                    {text:'课程内容',toId:'content-desc'},
                    {text:'课程实践',toId:'practice'},
                    {text:'教学团队',toId:'team'},
                ],
                userAvatar:''
            }
        },

        methods:{
            scrollTo(elId){
                const el=document.getElementById(elId)
                el&&el.scrollIntoView({behavior:"smooth",block:"start"})
            },

            loginButtonClicked(){
                this.$emit('login-button-clicked');
            },

            registerButtonClicked(){
                this.$emit('register-button-clicked');
            },
        }
    }
</script>

<style scoped>
    .rightPart{
        float: left;
        width: 50%;
        position: relative;
        padding:15px 0 0 5%;
    }


    .listArea{
        width: 40%;
    }

    .listLink:hover{
        cursor: pointer;
    }

    .avatar-container{
        height: 30%;
    }
</style>