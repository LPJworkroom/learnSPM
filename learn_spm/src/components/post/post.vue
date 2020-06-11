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
                @re_request="getfloors"
        ></floor>
        <floor_pop_up ref="reply_modal" @replyPost="replyPost"></floor_pop_up>
        <button @click="$refs['reply_modal'].open()" class="btn btn-info btn-lg" style="width: 20%">回复</button>
    </div>
</template>

<script>
    // eslint-disable-next-line no-unused-vars
    import floor from "./floor";
    // eslint-disable-next-line no-unused-vars
    import floor_pop_up from "./floor_pop_up";
    export default {
        name: "post",
        // eslint-disable-next-line vue/no-unused-components
        components:{floor,floor_pop_up, },
        inject:['reload'],
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
            getfloors(){
                let pid = this.$route.params.postid;
                let url = process.env.VUE_APP_BASE_URL+"/php/getFloors.php";
                let params = new URLSearchParams();
                params.append('postid', pid);
                //let postid = {postid: 1};
                this.axios.post(url, params).then((resp) => {
                    console.log(resp.data);
                    this.floors = resp.data;

                });

                //alert('chufa');
            },
            async replyPost(content) {
                /*得到当前登录用户的userid,nick
                  得到弹窗的表单中的回复内容
                  得到当前时间
                  传递给后端
                */
                let pid = this.$route.params.postid;
                let publisher = this.$store.state.userInfo.uid;
                let parentfloor = 0;
                let replyto = 0;
                console.log(pid,publisher,content,parentfloor,replyto);

                let url = process.env.VUE_APP_BASE_URL+"/php/replyFloor.php";
                let params = new URLSearchParams();
                params.append('postid', pid);
                params.append('publisher',publisher);
                params.append('content', content);
                params.append('parentfloor', parentfloor);
                params.append('replyto', replyto);
                //let postid = {postid: 1};
                this.axios.post(url, params).then((resp) => {
                    console.log(resp.data);
                    //this.floors = resp.data;
                    //alert(resp.data);
                });
                this.$refs['reply_modal'].close();
                //this.getfloors();
                this.reload();
            }
        },
        mounted:function() {
            this.getfloors();

        }
    }
</script>

<style scoped>

</style>