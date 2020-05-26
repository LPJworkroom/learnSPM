<template>
    <div>
        <post_info
                v-for="(post,index) in posts"
                :title="post.title"
                :introduction="post.introduction"
                :post-info="post.postInfo"
                :key="index"
        ></post_info>
    </div>
</template>

<script>
    // eslint-disable-next-line no-unused-vars
    import post_info from "./post_info";
    export default {
        name: "bbs",
        // eslint-disable-next-line vue/no-unused-components
        components: {post_info},
        data(){
            return {
                posts:[
                    {
                        title:"软件项目管理",
                        introduction:"yj yyds!",
                        postInfo:{
                            publisher:"yj",
                            publishDate:"2020-04-01 00:00:00",
                            lastReplyDate:"2020-05-26 23:04:10",
                            floors:9999,
                            pageViews:99999,
                        },

                    },
                    {
                        title:"软件安全技术",
                        introduction:"cb yyds!",
                        postInfo:{
                            publisher:"cb",
                            publishDate:"2020-05-26 00:00:00",
                            lastReplyDate:"2020-05-26 22:04:10",
                            floors:912,
                            pageViews:1311,
                        },

                    },
                    {
                        title:"高级软件工程",
                        introduction:"dwf yyds!",
                        postInfo:{
                            publisher:"dwf",
                            publishDate:"2020-05-21 10:13:30",
                            lastReplyDate:"2020-05-26 23:04:10",
                            floors:124,
                            pageViews:432,
                        },
                    },
                    {
                        title:"编译原理",
                        introduction:"zm yyds!",
                        postInfo:{
                            publisher:"zm",
                            publishDate:"2020-04-22 10:13:30",
                            lastReplyDate:"2020-05-25 23:04:10",
                            floors:43,
                            pageViews:535,
                        },
                    },
                ],
            };
        },
    }
</script>

<style scoped>

</style>