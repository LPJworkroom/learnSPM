<template>
    <div>
        <p>this is index component</p>
<!--        first page-->
        <div id="theme">
            <leftPart></leftPart>
            <rightPart></rightPart>
            <div style="clear: both"></div>
        </div>
        <div id="descriptions">
            <course></course>
            <content-desc></content-desc>
            <practice></practice>
            <team></team>
        </div>
    </div>
</template>

<script>
    import leftPart from "@/components/index/theme_picture";
    import rightPart from "@/components/index/login"
    import course from "@/components/index/intro/course";
    import contentDesc from "@/components/index/intro/content";
    import practice from "@/components/index/intro/practice";
    import team from "@/components/index/intro/team";

    export default {
        name: "index",
        components:{
            // eslint-disable-next-line vue/no-unused-components
            leftPart,rightPart,course,contentDesc,practice,team
        },
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