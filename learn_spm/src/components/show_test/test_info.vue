<template>
    <div class="bar">
        <router-link :to="{name:'onlineTest'}" tag="div" class="testname">{{info.name}}</router-link>
        <div class="clearfloat"></div>
        <div>
            <div class="leftinfo">
                <span class="iteminfo">{{info.createDate}}</span>
            </div>
            <div class="rightinfo">
                <span class="iteminfo">{{info.completeNum}} 人完成</span>
                <span class="iteminfo"> 预警线：{{info.warningLine}} 分</span>
                <span class="iteminfo"> {{info.unPassNum}} 人未通过</span>
            </div>
        </div></div>

</template>

<script>
    export default {
        name: "test_info",
        props:{
            info: {type:Object}
        },
    }
</script>

<style scoped>
    .clearfloat{
        clear: both;
    }

    .bar{
        width:60%;
        overflow: auto;
        border:1px solid black;
        margin:10px auto 10px;
    }

    .testname{
        float: left;
        padding: 0 5px 0 5px;
        cursor: pointer;
    }

    .leftinfo{
        float: left;
    }

    .rightinfo{
        float: right;
    }

    .iteminfo{
        padding: 0 5px 0 5px;
    }
</style>