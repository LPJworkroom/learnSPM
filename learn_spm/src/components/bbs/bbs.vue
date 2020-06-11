<template>
    <div class="list-group" style="width: 70%">
        <post_info
                v-for="post in posts"
                class="list-group-item"
                :title="post.title"
                :introduction="post.introduction"
                :post-info="post.postInfo"
                :post-id="post.id"
                :key="post.id"
        ></post_info>
        <reply_pop_up ref="reply_modal" @publishPost="publishPost"></reply_pop_up>
        <button @click="$refs['reply_modal'].open()" class="btn btn-info btn-lg" style="width: 20%">回复</button>
    </div>

</template>

<script>
    // eslint-disable-next-line no-unused-vars
    import post_info from "./post_info";
    // eslint-disable-next-line no-unused-vars
    import modal from "../pop_up_window/modal";
    import reply_pop_up from "./reply_pop_up";
    export default {
        name: "bbs",
        // eslint-disable-next-line vue/no-unused-components
        components: {post_info,modal,reply_pop_up},
        data(){
            return {
                posts:[],
                // posts:[
                //     {
                //         id:"1",
                //         title:"软件项目管理",
                //         introduction:"yj yyds!",
                //         postInfo:{
                //             publisher:"yj",
                //             publishDate:"2020-04-01 00:00:00",
                //             lastReplyDate:"2020-05-26 23:04:10",
                //             floors:9999,
                //             pageViews:99999,
                //         },
                //
                //     },
                //     {
                //         id:"2",
                //         title:"软件安全技术",
                //         introduction:"cb yyds!",
                //         postInfo:{
                //             publisher:"cb",
                //             publishDate:"2020-05-26 00:00:00",
                //             lastReplyDate:"2020-05-26 22:04:10",
                //             floors:912,
                //             pageViews:1311,
                //         },
                //
                //     },
                //     {
                //         id:"3",
                //         title:"高级软件工程",
                //         introduction:"dwf yyds!",
                //         postInfo:{
                //             publisher:"dwf",
                //             publishDate:"2020-05-21 10:13:30",
                //             lastReplyDate:"2020-05-26 23:04:10",
                //             floors:124,
                //             pageViews:432,
                //         },
                //     },
                //     {
                //         id:"4",
                //         title:"编译原理",
                //         introduction:"zm yyds!",
                //         postInfo:{
                //             publisher:"zm",
                //             publishDate:"2020-04-22 10:13:30",
                //             lastReplyDate:"2020-05-25 23:04:10",
                //             floors:43,
                //             pageViews:535,
                //         },
                //     },
                // ],
            };
        },

        mounted:function() {
            // let params = new URLSearchParams();
            // params.append('userid', '1');
            //alert("kokokokokokok");
            let url = process.env.VUE_APP_BASE_URL+"/php/getPosts.php"
            //alert(process.env.NODE_ENV);
            //alert(process.env.VUE_APP_BASE_URL);
            this.axios.post(url).then((resp) => {
                console.log(resp.data);
                this.posts = resp.data;
            })
        },
        methods:{
            async publishPost(title,content){
                //console.log(this.$store.state.userInfo.uid,title,content);
                let url = process.env.VUE_APP_BASE_URL+"/php/publishPost.php";
                let params = new URLSearchParams();
                params.append('uid',this.$store.state.userInfo.uid);
                params.append('title', title);
                params.append('content', content);
                this.axios.post(url, params).then((resp) => {
                    console.log(resp.data);
                    alert(resp.data);
                });
                this.$refs["reply_modal"].close();
                window.reload();
            }
        }
    }
</script>

<style scoped>

</style>