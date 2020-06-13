<template>
    <div class="list-group" style="width: 70%">
        <test_info class="list-group-item"
                v-for="(testinfo,index) in testsInfo"
                :testid="testinfo.testid"
                :test-name="testinfo.testName"
                :warning-line="testinfo.warningLine"
                :my-score="testinfo.myScore"
                :key="index"
        ></test_info>
    </div>
</template>

<script>
    import Test_info from "./test_info";

    export default {
        name: "my_score",
        // eslint-disable-next-line vue/no-unused-components
        components: {Test_info},
        data(){
            return {
                testsInfo:[],
                // testsInfo:[
                //     {
                //         testid:1,
                //         testName: "单元一测试",
                //         warningLine:60,
                //         myScore:70,
                //     },
                //     {
                //         testid:2,
                //         testName: "单元二测试",
                //         warningLine:70,
                //         myScore: 60,
                //     },
                // ],
            };
        },

        methods:{
            getScoreinfo(){
                //let tid = this.$route.params.testid;
                let url = process.env.VUE_APP_BASE_URL+"/php/getScoreinfo.php";
                let params = new URLSearchParams();
                params.append('userid', this.$store.state.userInfo.uid);
                //let postid = {postid: 1};
                this.axios.post(url,params).then((resp) => {
                    console.log(resp.data);
                    this.testsInfo = resp.data;

                });
            },
        },

        beforeMount() {
            this.getScoreinfo();
        }
    }
</script>

<style scoped>

</style>