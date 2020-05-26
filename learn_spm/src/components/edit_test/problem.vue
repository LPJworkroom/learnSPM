<template>
    <div>
        <div id="firstCol">
            <button @click="deleteProblem()">
                <img src="../../assets/edit_test/close.png" width="24" style="width: 80%" alt="删除题目">
            </button>
        </div>
        <div id="secondCol">
            <div>
                <label>{{id}}.题面：
                    <input type="text" v-model="titleLcl">
                </label>
            </div>
            <div ref="optionArea">
                <ProbOption v-for="(option,id) in optionsLcl" :key="option" :desc.sync="option" :id="id"></ProbOption>
            </div>
        </div>
        <div id="thirdCol">
            <button @click="addOption()">+选项</button>
            <label>答案：
                <select v-model="solutionLcl">
                    <option v-for="ind in optionsLcl.length" :key="ind">
                        {{String.fromCharCode("A".charCodeAt(0)+ind-1)}}
                    </option>
                </select>
            </label>
        </div>
    </div>
</template>

<script>
    import ProbOption from "@/components/edit_test/ProbOption";

    export default {
        name: "problem",
        components: {ProbOption},
        props:{
            id:{type:Number,required:true},
            title:{type:String},
            options:{type:Array},
            solution:{}
        },

        data(){
            return{
                idLcl:this.id,
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

            },
            addOption(){
                this.options.push(" ");
            }
        }
    }
</script>

<style scoped>

</style>