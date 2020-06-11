<template>
    <modal ref="reply_modal">
        <template
                slot="header"
        >
            <p>回复</p>
        </template>

        <template
                slot="body"
        >
            <div>
                <label>内容
                    <input type="text" class="form-control" v-model="content">
                </label>
            </div>
        </template>

        <template
                slot="footer"
        >
            <button @click="$emit('replyPost',content)">提交</button>
        </template>
    </modal>
</template>

<script>
    import modal from "../pop_up_window/modal";
    export default {
        name: "reply_pop_up",
        components:{
            modal
        },

        data(){
            return {
                content:''
            }
        },
        methods:{
            open(){
                this.$refs.reply_modal.open();
            },
            close(){
                this.$refs.reply_modal.close();
            },
        }
    }
</script>

<style scoped>

</style>