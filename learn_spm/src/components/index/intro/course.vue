<template>
    <div id="course">
        <span class="descText">该课程介绍现代项目和项目管理的基本概念、定义和特征，和以项目生命周期为主线的项目全过程管理的基本原理、技术、工具和方法；


            有效管理软件项目的技能，讨论有效满足项目范围、时间、成本和质量的条件下实现项目目标的技术与方法；
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
        min-height: 500px;
        position: relative;
        background-image: url('~@/assets/index/desc(3).jpg');
        background-size:contain;
    }

    .descText{
        color: #2c3e50;
        font-family: Consolas;
        font-size: 25px;
        width: 50%;
        position: absolute;
        top:20%;
        left:50%;
    }
</style>