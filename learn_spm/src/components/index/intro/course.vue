<template>
    <div id="course">
        <span class="descText">
            this is description for course.this is description for course.this is description for course.this is description for course.
        </span>
    </div>
</template>

<script>
    export default {
        name: "course"
    }
</script>

<style scoped>
    #course{
        width: 100%;
        min-height: 300px;
        background: #2c3e50;
        position: relative;
    }

    .descText{
        color: whitesmoke;
        font-family: Consolas;
        font-size: 25px;
        width: 35%;
        position: absolute;
        top:60%;
        left:50%;
    }
</style>