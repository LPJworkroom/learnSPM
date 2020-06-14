<template>
    <div>
        <div class="list-group">
            <user_score v-for="user in score" :key="user.userAcc" :info="user" class="list-group-item"></user_score>
        </div>
    </div>
</template>

<script>
    import user_score from "@/components/score_analyse/user_score";
    export default {
        name: "score_analyse",
        components: {user_score},
        data(){
            return{
                score:[
                    {userAcc:'stu1',score:1231,},
                    {userAcc:'stu2',score:331,},
                    {userAcc:'stu3',score:11,},
                ]
            }
        },
        methods:{
            getScores(){
                let tid = this.$route.params.testid;
                let url = process.env.VUE_APP_BASE_URL+"/php/getUserScore.php";
                let params = new URLSearchParams();
                params.append('testid', tid);
                //let postid = {postid: 1};
                this.axios.post(url, params).then((resp) => {
                    console.log(resp.data);
                    this.score = resp.data;

                });
            },
        },
        mounted() {
            this.getScores();
        }

    }
</script>

<style scoped>

</style>