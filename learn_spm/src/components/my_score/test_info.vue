<template>
    <div :class="{bar:true,redBG:isRed}">
        <router-link to="/" tag="div" class="testname">{{testName}}</router-link>
<!--        <div class="testname">{{testName}}</div>-->
        <div class="clearfloat"></div>
        <div>
            <div class="leftinfo">
                <span class="iteminfo">{{warningLine}}</span>
            </div>
            <div class="rightinfo">
                <span class="iteminfo">{{myScore}}</span>
<!--                <router-link to="/editTest" tag="button">编辑测试</router-link>-->
<!--                <button>编辑测试</button>-->
            </div>
        </div></div>

</template>

<script>
    export default {
        name: "test_info",
        data(){
            return {
                isRed:false,
            };
        },
        props: ['testid','testName','warningLine','myScore'],
        methods:{
            changeBG(){
                if(this.myScore<this.warningLine){
                    this.isRed=true;
                }
            }
        },
        beforeMount() {
            this.changeBG();
        }
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
    .redBG{
        background:red;
    }
</style>