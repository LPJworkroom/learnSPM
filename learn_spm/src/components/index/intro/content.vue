<template>
    <div id="content-desc" style="">
        <div id="container">
            <span class="descText">
                本课程的通过学习项目管理的基本理论、技术和方法，提高学员分析和解决软件项目管理问题的能力。
            </span>
            <span class="descText">
                主要包括：项目及项目管理的概念、项目定义、范围管理、项目组织、项目计划、
            </span>
            <span class="descText">
                进度管理、成本控制、项目跟踪、交流沟通、风险管理、项目结束等.
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "contentDesc"
    }
</script>

<style scoped>
    #content-desc{
        width: 100%;
        height: 500px;
        position: relative;
        background:linear-gradient(
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)
        ),url('~@/assets/index/desc(1).jpg');
        background-size: cover;
        background-blend-mode: darken;
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