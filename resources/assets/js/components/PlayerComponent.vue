<template>
    <div class="player-wrapper w-100 h-100 bg-light p-4" >
        <transition name="fade">
            <div id="mainDisplay" v-if="body">
                <div class="display-1">{{body.name}}</div>
                <br>
                <div class="bg-white rounded p-5" v-html="body.details">
                </div>

                <div class="d-flex flex-row display-1">
                    <i class="fa fa-minus w-100 text-danger text-right" @click="decrement"></i>
                    <div class="pl-4 pr-4">{{amount}}</div>
                    <i class="fa fa-plus w-100 text-success text-left" @click="increment"></i>
                </div>
            </div>
            <div class="display-1 w-100 h-100" v-else >
                Bidding Portal &COPY; Hostel 4 <br>
                Created By Vaibhaw
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        name: "player-component",
        props : [
            'playerUpdate'
        ],
        data(){
            return {
                body: '',
                amount: 0,
            }
        },
        methods:{
            increment: function(){
                this.amount+=50;
            },
            decrement: function(){
                if(this.amount===0) return false;
                this.amount-=50;
            }
        },
        watch:{
            playerUpdate:function(e){
                this.amount = 0;
                axios.get(`/player/${e}`)
                    .then((response)=>{
                        this.body = response.data;
                    })
            },
            amount:function(){
                this.$parent.$emit('amountUpdated',this.amount);
            }
        }
    }
</script>

<style scoped>
    #mainDisplay{
        height:100%;
        width:100%;
        font-size:3rem;
    }
</style>