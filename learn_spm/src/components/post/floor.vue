<template>
    <div class="floor">
        <div class="avatarContainer">
            <img class="avatar" src="../../assets/index/testAvatar.png" alt="avatar">
        </div>
        <div class="rightContainer">
            <div class="dataContainer">
                <div class="nick">{{this.nick}}</div>

                <div style="clear:both;"></div>

                <div class="content">{{this.content}}</div>

                <div style="clear:both;"></div>

                <div class="replyDate">{{this.replyDate}}</div>
                <button class="replyBt">回复</button>
            </div>

            <div style="clear:both;"></div>

            <div class="replayContainer">
                <reply_floor
                        v-for="reply in this.replyFloors"
                        :postid="reply.postid"
                        :nick="reply.nick"
                        :userid="reply.userid"
                        :content="reply.content"
                        :replyDate="reply.replyDate"
                        :key="reply.postid"
                ></reply_floor>

            </div>
        </div>

    </div>
</template>

<script>
    // eslint-disable-next-line no-unused-vars
    import reply_floor from "./reply_floor";
    export default {
        name: "floor",
        components:{reply_floor},
        props:["nick",
            "userid",
            "content",
            "replyDate",
            "isDisplayform",
            "replyTo",
            "replyFloors",
        ],
        data(){
            return {

            };
        },
    }
</script>

<style scoped>
    .floor{
        overflow: auto;
        border: 1px solid blue;
    }
    .avatarContainer{
        float:left;
        width:5%;
        height:100%;
        display: flex;
    }
    .avatar{
        width:100%;
        align-self: center;
    }

    .rightContainer{
        float:left;
    }

    .dataContainer{
        float:left;
    }
    .nick{
        float:left;
    }
    .content{
        float:left;
    }
    .replyDate{
        float:left;
    }

    .rightContainer{
        float: left;
    }

</style>