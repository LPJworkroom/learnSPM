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
        }

    }
</script>

<style scoped>

</style>