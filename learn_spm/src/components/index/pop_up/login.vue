<template>
    <modal ref="modal">
        <template v-slot:header>
            <h3>登陆</h3>
        </template>
        <template v-slot:body>
            <div>
                <label>账号
                    <input type="text" class="form-control" v-model="acc">
                </label>
            </div>
            <div>
                <label>密码
                    <input type="password" class="form-control" v-model="pw">
                </label>
            </div>
        </template>
        <template v-slot:footer>
            <button @click="$emit('login',acc,pw)" class="btn btn-info">登陆</button>
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

        data(){
          return {
              acc:'',
              pw:''
          }
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