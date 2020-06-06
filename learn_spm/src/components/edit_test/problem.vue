<template>
    <div>
        <div id="firstCol">
            <button @click="deleteProblem()" class="btn btn-danger">删除题目</button>
        </div>
        <div id="secondCol">
            <div style="text-align: left">
                <label>{{this.ind+1}}.题面：
                    <input type="text" v-model="titleLcl" class="form-control">
                </label>
            </div>
            <div ref="optionArea" class="list-group">
                <ProbOption class="list-group-item" v-for="(option,ind) in optionsLcl" :key="option.id" :desc.sync="option.text" :ind="ind" @optionDeleted="deleteOption(ind)"></ProbOption>
            </div>
        </div>
        <div id="thirdCol">
            <button @click="addOption()" class="btn btn-primary">+选项</button>
            <div>
                <span>答案：
                    <select v-model="solutionLcl" class="form-control form-control-lg">
                        <option v-for="ind in optionsLcl.length" :key="ind" :value="ind-1">
                            {{String.fromCharCode("A".charCodeAt(0)+ind-1)}}
                        </option>
                    </select>
                </span>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
</template>

<script>
    import ProbOption from "@/components/edit_test/ProbOption";
    import {addIdObj} from "@/components/uniqueCounter";

    export default {
        name: "problem",
        components: {ProbOption},
        props:{
            ind:{type:Number,required:true},
            title:{type:String},
            options:{type:Array},
            solution:{type:Number}
        },

        data(){
            return{
                titleLcl:this.title,
                optionsLcl:this.options,
                solutionLcl:this.solution
            }
        },

        watch:{
            titleLcl(val){
                this.$emit("update:title",val);
            },
            optionsLcl:{
                handler(val){
                    this.$emit("update:options",val);
                },
                deep:true
            },
            solutionLcl(val){
                this.$emit("update:solution",val);
            }
        },

        methods:{
            deleteProblem(){
                this.$emit('probDeleted',this.ind);
            },
            addOption(){
                let obj={text:""};
                addIdObj(obj);
                this.optionsLcl.push(obj);
            },
            deleteOption(id){
                /*maintain deleted answer*/
                if (this.solutionLcl===id)
                    this.solutionLcl=0;
                else
                    if (this.solutionLcl>id)
                        this.solutionLcl-=1;
                this.optionsLcl.splice(id,1);

            }
        },
    }
</script>

<style scoped>
    #firstCol{
        float: left;
        width: 20%;
    }

    #secondCol{
        float: left;
        width: 60%;
    }

    #thirdCol{
        float: right;
        width: 15%;
        margin-right:5%
    }
</style>