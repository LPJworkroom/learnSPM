<template>
    <div class="outer">
        <div class="inner">
            <div class="btn btn-primary" style="float:left;margin-right: 5%;">第{{index+1}}题.</div>
            <div style="float:left;width: 80%">
                <div class="list-group-item active">{{title}}</div>
                <ul class="list-group">
                    <li v-for="(option,index) in options"
                        class="list-group-item"
                        :key="index"

                        @click="select(index,$event)"
                    >{{String.fromCharCode('A'.charCodeAt()+index)}}.{{" "+option}}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "test_problem",
        props:["title","options","answer","index"],
        data(){
            return{
                childAnswer:this.answer,
                defaultBackground:"white",
                selectedBackground:"#4CAF50",
            };
        },
        methods:{
            select:function(index,event){
                //this.answer = index;
                this.childAnswer = index;
                let curNode = event.target;
                let parentNode = curNode.parentElement;
                let childNodes = parentNode.children;
                childNodes.forEach((childNode)=>{
                    childNode.style.background = this.defaultBackground;
                });
                curNode.style.background = this.selectedBackground;
                // forEach(let childNode in childNodes){
                //     childNode.style.background="white";
                // }
            }
        },
        watch:{
            childAnswer(newval){
                this.$emit('update:answer',newval);
            }
        },
    }
</script>

<style scoped>
    .outer{
        display: flex;
        justify-content: center;
    }
    .inner{
        width:60%;
    }
    .title{
        text-align:left;
    }
    .answerList{
        text-align: left;
    }
    .answerOption{
        list-style: none;
        cursor: pointer;
    }
</style>