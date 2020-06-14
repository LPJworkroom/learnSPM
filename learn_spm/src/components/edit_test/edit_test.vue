<template>
    <div style="width: 70%">
        <div class="list-group">
            <problem class="list-group-item" v-for="(prob,ind) in probs" :key="prob.id" :ind="ind" :title.sync="prob.title"
                     :options.sync="prob.options" :solution.sync="prob.solution" @probDeleted="deleteProblem(ind)"></problem>
        </div>
        <div id="editButtonArea" style="float:left;">
            <button @click="addProblem('FourRadio')" class="btn btn-info">+四选项单选题</button>
            <button @click="addProblem('TrueFalse')" class="btn btn-info">+判断题</button>
            <button @click="addProblem()" class="btn btn-info">+不定项单选题</button>
        </div>
        <div style="clear: both"></div>
        <button @click="submitEdit()" class="btn btn-success">提交</button>
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
                        title:'prob1',
                        options:["dsfsdf","ssssss","sdfsdfsdfs","aaaaa"],
                        solution:0,
                    },
                    {
                        title:'prob2',
                        options:["dsfsdf","ssssss"],
                        solution:0,
                    },

                ],
            }
        },

        methods:{
            submitEdit(){
                //let out=Object(this.probs);
                let url = process.env.VUE_APP_BASE_URL+"/php/editTest.php";
                let params = new URLSearchParams();
                params.append('userid', this.$store.state.userInfo.uid);
                params.append("probinfo",JSON.stringify(this.probs));
                //let postid = {postid: 1};
                this.axios.post(url, params).then((resp) => {
                    //console.log(resp.data);
                    //this.probList = resp.data;

                });
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
    button{
        margin-right:15px;
        margin-top:10px;
    }
</style>