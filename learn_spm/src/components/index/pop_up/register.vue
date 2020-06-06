<template>
    <modal ref="modal">
        <template v-slot:header>
            <h3>注册</h3>
        </template>
        <template v-slot:body>
            <div>
                <label>账号
                    <input type="text" class="form-control">
                </label>
            </div>
            <div>
                <label>密码
                    <input type="password" class="form-control">
                </label>
            </div>
        </template>
        <template v-slot:footer>
            <button @click="this.$emit('register')" class="btn btn-info">注册</button>
        </template>
    </modal>
</template>

<script>
    import modal from "@/components/pop_up_window/modal";
    export default {
        name: "register_pop_up",
        components:{modal},

        methods:{
            open(){
                this.$refs.modal.open()
            },
            close(){
                this.$refs.modal.close()
            }
        }
    }
</script>

<style scoped>

</style>