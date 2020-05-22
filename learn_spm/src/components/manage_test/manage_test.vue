<template>
    <div>
        <test_info
                v-for="(testinfo,index) in testsInfo"
                :test-name="testinfo.testName"
                :create-date="testinfo.createDate"
                :complete-num="testinfo.completeNum"
                :warning-line="testinfo.warningLine"
                :un-pass-num="testinfo.unPassNum"
                :key="index"
        ></test_info>
    </div>

</template>

<script>
    import Test_info from "./test_info";
    export default {
        name: "manage_test",
        // eslint-disable-next-line vue/no-unused-components
        components: {Test_info},
        data(){
            return {
                testsInfo:[
                    {
                        testName: "单元一测试",
                        createDate:"2020-01-01 12:00:00",
                        completeNum:35,
                        warningLine:60,
                        unPassNum:10,
                    },
                    {
                        testName: "单元二测试",
                        createDate:"2020-02-01 12:00:00",
                        completeNum:40,
                        warningLine:70,
                        unPassNum:15,
                    },
                ],
            };
        },
    }
</script>

<style scoped>

</style>