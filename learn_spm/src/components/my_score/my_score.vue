<template>
    <div>
        <test_info
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
                testsInfo:[
                    {
                        testid:1,
                        testName: "单元一测试",
                        warningLine:60,
                        myScore:70,
                    },
                    {
                        testid:2,
                        testName: "单元二测试",
                        warningLine:70,
                        myScore: 60,
                    },
                ],
            };
        },
    }
</script>

<style scoped>

</style>