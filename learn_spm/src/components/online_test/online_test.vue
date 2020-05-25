<template>
    <div>
<!--        <p>this is online_test component</p>-->
        <test_problem
                v-for = "(prob,index) in probList"
                :title = "prob.title"
                :options = "prob.options"
                :key = "index"
                :ref = "index"
                :answer.sync = "answer[index]"
        ></test_problem>
        <button
                @click="submit"
        >提交</button>
    </div>
</template>

<script>
    // eslint-disable-next-line no-unused-vars
    import test_problem from "./test_problem";
    export default {
        name: "online_test",
        // eslint-disable-next-line vue/no-unused-components
        components:{test_problem},
        data(){
            return {
                probList:[
                    {
                        title:"哪个游戏要凉",
                        options:[
                            "ow",
                            "overwatch",
                            "守望先锋",
                            "斗阵特攻",
                        ]
                    },
                    {
                        title:"1+1=?",
                        options:[
                            "1",
                            "2",
                            "3",
                            "4",
                        ]
                    },
                ],
                answer:[
                    undefined,
                    undefined
                ],
            };
        },
        methods:{
            submit:function(){
                this.probList.forEach((item,index)=>{
                    let refVal = index.toString();
                    this.answer[index]=this.$refs[refVal][0].answer;
                    if(this.answer[index] === undefined){
                        alert("有题目未答，请答完再提交");
                        return;
                    }
                    //alert(this.$refs[refVal].answer);
                    //console.log(this.$refs[refVal][0].answer);
                });
                console.log(this.answer);
                //console.log(this.$refs);
            },
        }
    }
</script>

<style scoped>

</style>