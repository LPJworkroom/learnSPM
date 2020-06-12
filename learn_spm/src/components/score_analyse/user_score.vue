<template>
    <div style="overflow: auto;width:60%;margin: 0 auto;">
        <div style="float: left;width:50%">
            <span style="margin-left:15%;">{{info.userAcc}}</span>
        </div>
        <button style="float: right;right:15%" class="btn btn-primary">{{info.score}}分</button>
    </div>
</template>

<script>
    export default {
        name: "user_score",
        props:{
            info:{
                type:Object,
            }
        }
    }
</script>

<style scoped>

</style>