<template>
    <div class="list-group" style="width: 70%;">
<!--        <p>this is online_test component</p>-->
        <test_problem class="list-group-item" style="border-left:none;border-right:none"
                v-for = "(prob,index) in probList"
                :title = "prob.title"
                :options = "prob.options"
                :key = "index"
                :ref = "index"
                :answer.sync = "answer[index]"
                :index="index"
        ></test_problem>
        <button
                @click="submit" class="btn btn-info btn-lg"
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
                        title:"'OW'的意思是?",
                        options:[
                            "ow",
                            "overwatch",
                            "overweight",
                            "orbitwave",
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
                    {
                        title: "你很少出于纯粹的好奇心做什么事。",
                        options: [
                            "同意",
                            "反对"
                        ]
                    },
                    {
                        title: "下列哪一种学习方式比较适合你？",
                        options: [
                            "丰富的学术依据，详尽的解析",
                            "听老师讲课就足够，不需要其他辅助材料",
                            "有其他辅助材料",
                            "体验式的学习方式"
                        ]
                    }
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
            getProblems(){
                let tid = this.$route.params.testid;
                let url = process.env.VUE_APP_BASE_URL+"/php/getProblems.php";
                let params = new URLSearchParams();
                params.append('testid', tid);
                //let postid = {postid: 1};
                this.axios.post(url, params).then((resp) => {
                    console.log(resp.data);
                    this.probList = resp.data;

                });
            },
        },
        mounted() {
            this.getProblems();
        }
    }
</script>

<style scoped>

</style>