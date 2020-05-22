<template>
    <div id="practice">
        <div id="container">
            <span v-for="i in 2" :key="i" class="descText">
                this is description for practice.this is description for practice
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
    #practice{
        width: 100%;
        min-height: 300px;
        background: rgba(61,140,248,0.78);
        position: relative;
    }

    #container{
        box-sizing: border-box;
        width: 100%;
        padding-top:10%;
        display: flex;
        padding-left: 10%;
    }

    .descText{
        color: whitesmoke;
        font-family: Consolas;
        font-size: 25px;
        width: 25%;
        float: left;
        padding: 0 10% 0 10%;
    }
</style>