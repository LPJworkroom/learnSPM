<template>
    <div class="list-group" style="width: 70%">
        <download_info class="list-group-item" v-for="dl in dlInfo" :info="dl" :key="dl.id"></download_info>
    </div>

</template>

<script>
    import download_info from "./download-info";
    export default {
        name: "download",
        components: {download_info},
        data(){
            return {
                dlInfo:[
                    {
                        id:1,
                        name: "video21",
                        desc:"this is video 21",
                        createDate:"2020-01-01 12:00:00",
                        dlCount:10,
                        url:"",
                    },
                    {
                        id:2,
                        name: "video1",
                        desc:"this is video 1",
                        createDate:"2020-01-01 12:00:00",
                        dlCount:100,
                        url:"",
                    },
                ],
            };
        },
    }
</script>

<style scoped>

</style>