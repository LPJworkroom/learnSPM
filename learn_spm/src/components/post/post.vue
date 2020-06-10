<template>
    <div class="list-group" style="width: 70%;">
        <floor class="list-group-item"
                v-for="floor in floors"
                :floorid.sync="floor.floorid"
                :nick.sync="floor.nick"
                :content.sync="floor.content"
                :replyDate.sync="floor.replyDate"
                :replyFloors.sync="floor.replyFloors"
                :key="floor.floorid"
        ></floor>
        <modal ref="reply_modal">
            <template
                    slot="header"
            >
                <p>回复</p>
            </template>

            <template
                    slot="body"
            >
                <span>内容</span>
                <input type="text">
            </template>

            <template
                    slot="footer"
            >
                <button @click="replyPost">提交</button>
            </template>
        </modal>
        <button @click="$refs['reply_modal'].open()" class="btn btn-info btn-lg" style="width: 20%">回复</button>
    </div>
</template>

<script>
    // eslint-disable-next-line no-unused-vars
    import floor from "./floor";
    // eslint-disable-next-line no-unused-vars
    import modal from "../pop_up_window/modal";
    export default {
        name: "post",
        // eslint-disable-next-line vue/no-unused-components
        components:{floor,modal},
        data(){
            return {
                floors:undefined,
                // floors:[
                //     {
                //         floorid:1,
                //         nick:"xiaoming",
                //         content:"asdfawewagaqwferefwqfwjewfaioiwjf",
                //         replyDate:"2020-01-01 00:00:00",
                //         replyFloors:[
                //             {
                //                 floorid:2,
                //                 nick:"xiaohong",
                //                 content:"agawewrqrwqfgsgsdfasdadadafa",
                //                 replyTonick:"xiaoming",
                //                 replyDate:"2020-01-01 00:00:00",
                //             },
                //         ],
                //     },
                //     {
                //         floorid:3,
                //         nick:"和服务和",
                //         content:"asdfawewagaqwferefwqfwjewfaioiwjf",
                //         replyDate:"2020-01-01 00:00:00",
                //         replyFloors:[
                //             {
                //                 floorid:4,
                //                 nick:"啊噶发",
                //                 content:"agawewrqrwqfgsgsdfasdadadafa",
                //                 replyTonick: "和服务和",
                //                 replyDate:"2020-01-01 00:00:00",
                //             },
                //             {
                //                 floorid:5,
                //                 nick:"更丰富",
                //                 content:"agawewrqrwqfgsgsdfasdadadafa",
                //                 replyTonick: "啊噶发",
                //                 replyDate:"2020-01-01 00:00:00",
                //             },
                //         ],
                //     },
                // ],
            };
        },
        methods:{
            replyPost:function () {
                /*得到当前登录用户的userid,nick
                  得到弹窗的表单中的回复内容
                  得到当前时间
                  传递给后端
                */
            }
        },
        mounted:function() {
            let pid = this.$route.params.postid;
            let url = process.env.VUE_APP_BASE_URL+"/php/getFloors.php";
            let params = new URLSearchParams();
            params.append('postid', pid);
            //let postid = {postid: 1};
            this.axios.post(url, params).then((resp) => {
                console.log(resp.data);
                this.floors = resp.data;

            })

        }
    }
</script>

<style scoped>

</style>