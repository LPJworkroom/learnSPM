<template>
    <div v-if="showModal" class="modal-mask">
        <div class="modal-wrapper">
            <div class="modal-container">
                <div class="modal-header">
                    <div class="imageContainer">
                        <img @click="close" src="../../assets/close.png" alt="关闭">
                    </div>
                    <slot name="header">default header</slot>
                </div>
                <div class="modal-body">
                    <slot name="body">default body</slot>
                </div>
                <div class="modal-footer">
                    <slot name="footer">default footer</slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "modal",
        data(){
            return{
                showModal:false
            }
        },
        methods:{
            open(){
                this.showModal=true
            },
            close(){
                this.showModal=false
            }
        }
    }
</script>

<style scoped>
    .modal-mask{
        position: fixed;
        top:0;
        left:0;
        width:100%;
        height: 100%;
        z-index: 9998;
        display: table;
        background: rgba(0,0,0,0.5);
    }

    .modal-wrapper{
        display: table-cell;
        vertical-align: middle;
    }

    .modal-container{
        width: 300px;
        margin:0 auto;
        padding: 20px 30px;
        border-radius: 5px;
        box-shadow: black 1px 1px 3px;
        background: white;
        position: relative;
    }

    .imageContainer{
        float: right;
        position: absolute;
        right:16px;
        top:10px;
    }
</style>