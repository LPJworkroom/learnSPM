<template>
    <div>
        <problem v-for="(prob,id) in probs" :key="prob" :id="id" :title.sync="prob.title"
                 :options.sync="prob.options" :solution.sync="prob.solution"></problem>
        <button @click="submitEdit()">提交</button>
    </div>
</template>

<script>
    import problem from "@/components/edit_test/problem";

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
                ]
            }
        },

        methods:{
            submitEdit(){
                console.log(this.probs);
            }
        }
    }
</script>

<style scoped>

</style>