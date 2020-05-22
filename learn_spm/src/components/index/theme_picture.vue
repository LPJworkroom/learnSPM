<template>
    <div class="themePicture">
        <img class="themePic" src="../../assets/KK-Odyssey.png" width="1200" alt="KK-Odyssey">
        <span class="slogan">learn SPM slogan!</span>
    </div>
</template>

<script>
    export default {
        name: "themePicture"
    }
</script>

<style scoped>
    .themePicture{
        padding: 10px 5% 10px 5%;
        height: 300px;
        width: 50%;
        float: left;
    }

    .themePic{
        width: 70%;
    }

    .slogan{
        position:absolute;
        left: 20%;
        top:85%;
        font-family: Consolas;
        color: whitesmoke;
        text-shadow: black 1px 1px 5px ;
        font-size: 35px;
    }
</style>