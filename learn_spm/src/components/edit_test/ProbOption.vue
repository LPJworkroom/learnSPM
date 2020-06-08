<template>
    <div style="width: 70%;">
        <label ><span>{{String.fromCharCode('A'.charCodeAt(0)+this.ind)}}.</span>
            <input type="text" v-model="descLcl" class="form-control" style="float:left;">
        </label>
        <button class="btn btn-danger" style="float:right;" @click="$emit('optionDeleted')">删除选项</button>
        <div style="clear: both"></div>
    </div>
</template>

<script>
    export default {
        name: "ProbOption",
        props:{
            ind:{type:Number,required:true},
            desc:{type:String}
        },
        data(){
            return{
                descLcl:this.desc
            }
        },

        watch:{
            descLcl(val){
                this.$emit("update:desc",val);
            }
        },

        methods:{
            deleteOption(){
                this.$emit('optionDeleted',this.indLcl);
            }
        }
    }
</script>

<style scoped>
</style>