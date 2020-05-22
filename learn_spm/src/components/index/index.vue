<template>
    <div>
        <p>this is index component</p>
<!--        first page-->
        <leftPart></leftPart>
        <rightPart></rightPart>
    </div>
</template>

<script>
    import leftPart from "@/components/index/theme_picture";
    import rightPart from "@/components/index/login"

    export default {
        name: "index",
        components:{
            leftPart,rightPart
        },
    }
</script>

<style scoped>

</style>