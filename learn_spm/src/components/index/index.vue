<template>
    <div >
        <p>this is index component</p>
<!--        first page-->
        <div id="theme">
            <leftPart ></leftPart>
            <rightPart @login-button-clicked="$refs['login-pop-up'].open()"
                       @register-button-clicked="$refs['register-pop-up'].open()"></rightPart>
            <div style="clear: both"></div>
        </div>
        <div id="descriptions">
            <course></course>
            <content-desc></content-desc>
            <practice></practice>
            <team></team>
        </div>

        <login_pop_up ref="login-pop-up" @login="login"></login_pop_up>
        <register_pop_up ref="register-pop-up" @register="register"></register_pop_up>



    </div>
</template>

<script>
    import leftPart from "@/components/index/theme_picture";
    import rightPart from "@/components/index/login"
    import course from "@/components/index/intro/course";
    import contentDesc from "@/components/index/intro/content";
    import practice from "@/components/index/intro/practice";
    import team from "@/components/index/intro/team";
    import login_pop_up from "@/components/index/pop_up/login"
    import register_pop_up from "@/components/index/pop_up/register";

    export default {
        name: "index",
        components:{
            // eslint-disable-next-line vue/no-unused-components
            leftPart,rightPart,course,contentDesc,practice,team,login_pop_up,register_pop_up
        },
        
        data:function() {
        },

        methods:{
            login(){
                console.log("login now!");
            },
            register(){
                console.log("register now!");
            }
        }
    }
</script>

<style scoped>
    #theme{
        width: 100%;
        height: auto;
        padding:0 15% 0 15%
    }

    #descriptions{
        width: 100%;
    }

    div{
        box-sizing: border-box;
    }
</style>