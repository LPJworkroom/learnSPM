<template>
    <div id="team">
        <div id="container">
            <div v-for="(mem,ind) in teamMem" :key="ind" class="teacherContainer">
                <img :src="mem.avatar" width="100">
                <div class="descText">
                    <p>{{mem.name}}</p>
                    <p>{{mem.desc}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "content",
        data(){
            return {
                teamMem:[
                    {avatar:require('../../../assets/index/testAvatar.png'),name:'lllss1',desc:'this is description for teacher.this is description for teacher.'},
                    {avatar:require('../../../assets/index/testAvatar.png'),name:'lllss2',desc:'this is description for teacher.this is description for teacher.'},
                    {avatar:require('../../../assets/index/testAvatar.png'),name:'lllss3',desc:'this is description for teacher.this is description for teacher.'},
                ]
            }
        }
    }
</script>

<style scoped>
    #team{
        width: 100%;
        min-height: 300px;
        background: rgba(97, 39, 94, 0.78);
        position: relative;
    }

    #container{
        box-sizing: border-box;
        width: 100%;
        padding-top:10%;
        display: flex;
        justify-content: center;
    }

    .teacherContainer{
        width: 25%;
        padding: 0 10% 0 10%;
        float: left;
    }

    .descText{
        color: whitesmoke;
        font-family: Consolas;
        font-size: 25px;
        color: whitesmoke;
    }
</style>