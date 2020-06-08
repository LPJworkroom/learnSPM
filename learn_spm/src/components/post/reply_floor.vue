<template>
    <div class="floor">
        <div class="avatarContainer">
            <img class="avatar" src="../../assets/index/testAvatar.png" alt="avatar">
        </div>
        <div class="rightContainer">
            <div class="dataContainer">
                <div class="nick">{{this.nick}}</div>

                <div style="clear:both;"></div>

                <div class="content">回复给 {{this.replyTonick}}:{{this.content}}</div>

                <div style="clear:both;"></div>

                <div class="replyDate">{{this.replyDate}}</div>

<!--回复弹窗组件-->
                <modal ref="reply_modal">
                    <template
                            slot="header"
                    >
                        <p>回复</p>
                    </template>

                    <template
                            slot="body"
                    >
                        <input type="text">
                    </template>

                    <template
                            slot="footer"
                    >
                        <button @click="replyFloorInFloor">提交</button>
                    </template>
                </modal>
<!--回复弹窗组件结束-->

                <button class="btn btn-info" @click="$refs['reply_modal'].open()">回复</button>
            </div>

        </div>

    </div>
</template>

<script>
    // eslint-disable-next-line no-unused-vars
    import modal from "../pop_up_window/modal";
    export default {
        name: "reply_floor",
        components:{modal},
        props:[
            "parentFloorid",
            "floorid",
            "nick",
            "content",
            "replyTonick",
            "replyDate",
        ],
        data(){
            return {
                my_parentFloorid:this.my_parentFloorid,
                my_floorid:this.floorid,
                my_nick:this.nick,
                my_content:this.content,
                my_replyTonick:this.replyTonick,
                my_replyDate:this.replyDate,
            };
        },
        methods:{
            replyFloorInFloor:function(){
                /*
                    获取当前用户的userid,nick
                    获取该楼中楼的属于哪一层楼，回复的是哪一层楼中楼：this.my_parentFloorid,this.floorid
                    得到弹窗的表单中的回复内容
                    得到当前时间
                    传递给后端
                 */
            },
        },
        watch:{
            my_parentFloorid(val){
                this.$emit('update:parentFloorid',val);
            },
            my_floorid(val){
                this.$emit('update:floorid',val);
            },
            my_nick(val){
                this.$emit('update:nick',val);
            },
            my_content(val){
                this.$emit('update:content',val);
            },
            my_replyTonick(val){
                this.$emit('update:replyTonick',val);
            },
            my_replyDate(val){
                this.$emit('update:replyDate',val);
            },
        },
    }
</script>

<style scoped>
    .floor{
        overflow: auto;
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