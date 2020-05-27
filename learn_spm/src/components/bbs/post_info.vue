<template>
    <router-link
            to="/post"
            tag="div"
            class="post"
    >
        <div style="position: absolute;top: 0;right: 0;color: red;">X</div>
        <div>{{this.title}}</div>
        <div>{{this.introduction}}</div>
        <ul>
            <li
                    v-for="(val,key) in this.postInfo"
                    :key="key"
                    class="postinfo"
            >{{val}}</li>
        </ul>
    </router-link>
<!--    <div class="post">-->
<!--        <div style="position: absolute;top: 0;right: 0;color: red;">X</div>-->
<!--        <div>{{this.title}}</div>-->
<!--        <div>{{this.introduction}}</div>-->
<!--        <ul>-->
<!--            <li-->
<!--                    v-for="(val,key) in this.postInfo"-->
<!--                    :key="key"-->
<!--                    class="postinfo"-->
<!--            >{{val}}</li>-->
<!--        </ul>-->
<!--    </div>-->
</template>

<script>
    export default {
        name: "post_info",
        props:[
            "title",
            "introduction",
            "postInfo",
            "postId",
        ],

    }
</script>

<style scoped>
    .post{
        border: 1px solid black;
        position: relative;
        cursor:pointer;
    }
    .postinfo{
        list-style: none;
        display: inline;
        padding-right: 5px;
    }
</style>