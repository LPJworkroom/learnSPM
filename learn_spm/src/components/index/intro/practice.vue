<template>
    <div id="practice">
        <div id="container">
            <span class="descText">
                本课程关注在如何在日常的软件过程中做好项目管理，尤其聚焦team leader所关注的：风险管理、进度管理、团队协作管理、项目范围管理、需求管理、开发质量管理、采用真实的案例讲解
            </span>
            <span class="descText">
                把历史项目作为案例，每个环节首先讲解案例的实施方法和技巧，然后请学员进行重构管理，达到有效的实践性和接受度。
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
        min-height: 500px;
        position: relative;
        background-image: url('~@/assets/index/desc(2).jpg');
        background-size: cover;
    }

    #container{
        box-sizing: border-box;
        width: 100%;
        padding-top:10%;
        display: flex;
        padding-left: 10%;
    }

    .descText{
        color: black;
        font-family: Consolas;
        font-size: 25px;
        width: 80%;
        float: left;
        padding: 0 10% 0 10%;
    }
</style>