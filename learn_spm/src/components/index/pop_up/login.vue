<template>
    <modal ref="modal">
        <template v-slot:header>
            <h3>登陆</h3>
        </template>
        <template v-slot:body>
            <div>
                <label>账号
                    <input type="text">
                </label>
            </div>
            <div>
                <label>密码
                    <input type="password">
                </label>
            </div>
        </template>
        <template v-slot:footer>
            <button @click="this.$emit('login')">登陆</button>
        </template>
    </modal>
</template>

<script>
    import modal from "@/components/pop_up_window/modal";
    export default {
        name: "login_pop_up",
        components:{
            modal
        },
        methods:{
            open(){
                this.$refs.modal.open();
            },
            close(){
                this.$refs.modal.close();
            },
        }

    }
</script>

<style scoped>

</style>