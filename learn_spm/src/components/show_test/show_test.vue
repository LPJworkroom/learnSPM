<template>
    <div class="list-group" style="width: 70%">
        <test_info class="list-group-item" v-for="test in testInfo" :info="test" :key="test.id"></test_info>
    </div>

</template>

<script>
    import test_info from "./test_info";
    export default {
        name: "show_test",
        components: {test_info},
        data(){
            return {
                testInfo:[
                    {
                        id:1,
                        name: "test21",
                        createDate:"2020-01-01 12:00:00",
                        completeNum:35,
                        warningLine:60,
                        unPassNum:10,
                    },
                    {
                        id:2,
                        name: "test1",
                        createDate:"2020-01-01 12:00:00",
                        completeNum:35,
                        warningLine:60,
                        unPassNum:10,
                    },
                ],
            };
        },
    }
</script>

<style scoped>

</style>