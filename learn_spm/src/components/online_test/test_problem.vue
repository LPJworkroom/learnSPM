<template>
    <div class="outer">
        <div class="inner">
            <div class="title">{{title}}</div>
            <ul class="answerList">
                <li v-for="(option,index) in options"
                    class="answerOption"
                    :key="index"
                    @click="select(index,$event)"
                >{{String.fromCharCode('A'.charCodeAt()+index)}}.{{option}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "test_problem",
        props:["title","options"],
        data(){
            return{
                answer:undefined,
                defaultBackground:"white",
                selectedBackground:"green",
            };
        },
        methods:{
            select:function(index,event){
                this.answer = index;
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
    }
</script>

<style scoped>
    .outer{
        display: flex;
        justify-content: center;
        border:1px solid black;
    }
    .inner{
        width:50%;
        border:1px solid red;
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