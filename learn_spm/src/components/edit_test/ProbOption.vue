<template>
    <div style="width: 50%">
        <label style="float:left">{{String.fromCharCode('A'.charCodeAt(0)+this.ind)}}.
            <input type="text" v-model="descLcl">
        </label>
        <img style="float: left" src="../../assets/edit_test/close.png" @click="deleteOption()" alt="删除选项">
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