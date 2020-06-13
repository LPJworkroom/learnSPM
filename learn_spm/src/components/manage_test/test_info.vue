<template>
    <div class="">
        <router-link to="/" tag="div" class="testname">{{testName}}</router-link>
<!--        <div class="testname">{{testName}}</div>-->
        <div class="clearfloat"></div>
        <div>
            <div class="leftinfo">
                <span class="iteminfo">{{createDate}}</span>
                <span class="iteminfo">{{completeNum}}</span>
            </div>
            <div class="rightinfo">
                <span class="iteminfo">{{warningLine}}</span>
                <span class="iteminfo">{{unPassNum}}</span>
                <router-link :to="{name:'scoreAnalyse',params:{testid:this.testid}}" tag="button" class="btn btn-info">分析成绩</router-link>
<!--                <button>编辑测试</button>-->
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        name: "test_info",
        props: ['testid','testName','createDate','completeNum','warningLine','unPassNum'],
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