<template>
    <div :class="{redBG:isRed}">
<!--        <router-link to="/" tag="div" class="testname">{{testName}}</router-link>-->
        <div class="testname">{{testName}}</div>
        <div class="clearfloat"></div>
        <div>
            <div class="leftinfo">
                <span class="iteminfo">预警线：{{warningLine}}</span>
            </div>
            <div class="rightinfo">
                <span class="iteminfo">我的成绩：{{myScore}}</span>
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
                if(parseInt(this.myScore)<parseInt(this.warningLine)){
                    //console.log(typeof this.myScore);
                    //console.log(100<60);
                    //console.log(this.myScore<this.warningLine);
                    //console.log(this.myScore,this.warningLine);
                    //console.log("fffkfkfkfkfk");
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
        background:LavenderBlush;
    }
</style>