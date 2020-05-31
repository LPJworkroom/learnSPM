<template>
    <div class="bar">
        <router-link :to="info.url" tag="div" class="testname">{{info.name}}</router-link>
        <div class="clearfloat"></div>
        <div>
            <div class="leftinfo">
                <div class="desc">
                    <span>{{info.desc}}</span>
                </div>
                <span class="iteminfo">{{info.createDate}}</span>
            </div>
            <div class="rightinfo">
                <span class="iteminfo">{{info.dlCount}} 次下载</span>
            </div>
        </div></div>

</template>

<script>
    export default {
        name: "download-info",
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