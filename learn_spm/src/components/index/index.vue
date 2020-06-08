<template>
    <div style="">
        <div id="theme" style="padding-top: 20px;padding-bottom: 20px">
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

        computed:{
            userInfo(){
                return this.$store.state.userInfo;
            }
        },

        methods:{
            // eslint-disable-next-line no-unused-vars
            async login(acc,pw){
                // console.log("login now!");
                // let post=new URLSearchParams();
                // post.append('account', acc);
                // post.append('account', pw);
                // let userInfo=await this.axios.post('/api/php/login.php',post);
                // userInfo=JSON.parse(userInfo.data);
                if(acc === "teacher" && pw === "123456"){
                    this.$store.state.userInfo={
                        isLogged:true,
                            account: 'teacher',
                            position: '0',
                            avatar:''
                    }
                }
                else if(acc === "student" && pw ==="123456"){
                    this.$store.state.userInfo={
                        isLogged:true,
                        account: 'student',
                        position: '1',
                        avatar:''
                    }
                }
                //this.$store.state.userInfo=userInfo;
            },
            register(){
                console.log("register now!");
            }
        }
    }
</script>

<style scoped>
    #theme{
        width: 70%;
        margin:0 auto;
    }

    #descriptions{
        width: 100%;
    }

    div{
        box-sizing: border-box;
    }
</style>+