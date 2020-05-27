<template>
    <div>
        <problem v-for="(prob,ind) in probs" :key="prob.id" :ind="ind" :title.sync="prob.title"
                 :options.sync="prob.options" :solution.sync="prob.solution" @probDeleted="deleteProblem(ind)"></problem>
        <div id="editButtonArea" style="float:left;">
            <button @click="addProblem('FourRadio')">+四选项单选题</button>
            <button @click="addProblem('TrueFalse')">+判断题</button>
            <button @click="addProblem()">+不定项单选题</button>
        </div>
        <div style="clear: both"></div>
        <button @click="submitEdit()">提交</button>
    </div>
</template>

<script>
    import problem from "@/components/edit_test/problem";
    import {addIdObj,addIdArray} from "@/components/uniqueCounter"

    export default {
        name: "edit_test",
        components:{problem},

        data(){
            return{
                probs:[
                    {
                        title:'题目1',
                        options:["dsfsdf","ssssss","sdfsdfsdfs","aaaaa"],
                        solution:0,
                    },
                    {
                        title:'题目2',
                        options:["dsfsdf","ssssss","sdfsdfsdfs","aaaaa"],
                        solution:0,
                    },
                    {
                        title:'题目3',
                        options:["dsfsdf","ssssss","sdfsdfsdfs","aaaaa"],
                        solution:0,
                    },
                    {
                        title:'题目4',
                        options:["dsfsdf","ssssss","sdfsdfsdfs","aaaaa"],
                        solution:0,
                    },
                ],
            }
        },

        methods:{
            submitEdit(){
                //let out=Object(this.probs);

                console.log(JSON.stringify(this.probs));
            },
            deleteProblem(id){
                this.probs.splice(id,1);
            },
            addProblem(type='default'){
                let args={
                    FourRadio:[{text:""},{text:""},{text:""},{text:""},],
                    TrueFalse:[{text:"对"},{text:"错"},],
                    default:[{text:""},{text:""},],
                };
                let that=this;
                function addProblem(options){
                    let prob={title:"",options:options,solution:0};
                    addIdObj(prob);
                    that.probs.push(prob);
                }
                addProblem(args[type]);
            },
        },

        beforeMount() {
            this.probs.forEach((prob)=>{
                prob.options=prob.options.map((option)=>{
                    return {text:option};
                });
                addIdArray(prob.options);
            });
            addIdArray(this.probs);
        }
    }
</script>

<style scoped>

</style>