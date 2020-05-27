<template>
    <div>
        <floor
                v-for="floor in floors"
                :nick="floor.nick"
                :userid="floor.userid"
                :content="floor.content"
                :replyDate="floor.replyDate"
                :isDisplayform="floor.isDisplayform"
                :replyTo="floor.replyTo"
                :replyFloors="floor.replyFloors"
                :key="floor.postid"
        ></floor>
    </div>
</template>

<script>
    // eslint-disable-next-line no-unused-vars
    import floor from "./floor";
    export default {
        name: "post",
        // eslint-disable-next-line vue/no-unused-components
        components:{floor},
        data(){
            return {
                floors:[
                    {
                        postid:1,
                        nick:"xiaoming",
                        userid:1,
                        content:"asdfawewagaqwferefwqfwjewfaioiwjf",
                        replyDate:"2020-01-01 00:00:00",
                        isDisplayform:false,
                        replyTo:1,
                        replyFloors:[
                            {
                                postid:2,
                                nick:"xiaohong",
                                userid:2,
                                content:"agawewrqrwqfgsgsdfasdadadafa",
                                replyDate:"2020-01-01 00:00:00",
                            },
                        ],
                    },
                    {
                        postid:3,
                        nick:"和服务和",
                        userid:3,
                        content:"asdfawewagaqwferefwqfwjewfaioiwjf",
                        replyDate:"2020-01-01 00:00:00",
                        isDisplayform:false,
                        replyTo:3,
                        replyFloors:[
                            {
                                postid:4,
                                nick:"啊噶发",
                                userid:4,
                                content:"agawewrqrwqfgsgsdfasdadadafa",
                                replyDate:"2020-01-01 00:00:00",
                            },
                            {
                                postid:5,
                                nick:"更丰富",
                                userid:5,
                                content:"agawewrqrwqfgsgsdfasdadadafa",
                                replyDate:"2020-01-01 00:00:00",
                            },
                        ],
                    },
                ],
            };
        },
    }
</script>

<style scoped>

</style>