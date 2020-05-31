<template>
    <div class="rightPart">
        <div class="buttonArea">
            <button class="loginButton" style="background: #42b983" @click="loginButtonClicked()"><div class="buttonText">登录</div></button>
            <button class="loginButton" style="background: #d2691e" @click="registerButtonClicked()"><div class="buttonText">注册</div></button>
        </div>
        <div class="listArea">
            <span>了解更多</span>
            <ul v-for="link in links" :key="link">
                <li class="listLink" @click="scrollTo(link.toId)">{{link.text}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "login",
        data(){
            return{
                links:[
                    {text:'课程介绍',toId:'course'},
                    {text:'课程内容',toId:'content'},
                    {text:'课程实践',toId:'practice'},
                    {text:'教学团队',toId:'team'},
                ]
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
        width: 40%;
        position: relative;
    }

    .buttonArea{
        height: ;
    }

    .loginButton{
        width:40%;
        padding-top: 40%;
        position: relative;
    }

    .buttonText{
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .listArea{
        width: 40%;
    }

    .listLink:hover{
        cursor: pointer;
    }
</style>