<template>
    <div id="content">
        <div id="container">
            <span v-for="i in 3" :key="i" class="descText">
                this is description for content.this is description for content.
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "content"
    }
</script>

<style scoped>
    #content{
        width: 100%;
        min-height: 300px;
        background: rgba(98,23,133,0.78);
        position: relative;
    }

    #container{
        box-sizing: border-box;
        width: 100%;
        padding-top: 10%;
        display: flex;
        justify-content: center;
    }

    .descText{
        color: whitesmoke;
        font-family: Consolas;
        font-size: 25px;
        width: 25%;
        float: left;
        padding-left: 5%;
        padding-right: 5%;
    }
</style>