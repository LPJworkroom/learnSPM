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
        width: 40%;
        float: left;
    }

    .themePic{
        width: 100%;
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