<template>
    <div id="team">
        <div id="container">
            <div v-for="(mem,ind) in teamMem" :key="ind" class="card" style="width: 25%;padding-top:25px;margin-right:2%;margin-left:2%;background: rgba(0,0,0,0.2)">
                <img :src="mem.avatar" width="100" class="card-img-top avatar-container" style="width: 30%;margin:0 auto;">
                <div class="card-body" style="text-align: center;background: ghostwhite">
                    <p class="card-text">{{mem.name}}</p>
                    <p class="card-text">{{mem.desc}}</p>
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
                    {avatar:require('../../../assets/index/person.png'),name:'教师1',desc:'教授'},
                    {avatar:require('../../../assets/index/man.png'),name:'教师2',desc:'讲师'},
                    {avatar:require('../../../assets/index/woman.png'),name:'教师3',desc:'教授'},
                ]
            }
        }
    }
</script>

<style scoped>
    #team{
        width: 100%;
        min-height: 500px;
        background-image: url('~@/assets/index/desc(4).jpg');
        background-size: cover;
        position: relative;
    }

    #container{
        box-sizing: border-box;
        width: 100%;
        padding-top:100px;
        display: flex;
        justify-content: center;
    }


    .descText{
        color: whitesmoke;
        font-family: Consolas;
        font-size: 25px;
        color: whitesmoke;
    }

    .avatar-container{
        background: white;
        border-radius: 100%;
        border: black 5px solid;
    }
</style>