<template>
    <div class="players-wrapper">
        <div class="side-nav">
            <div class="display-2 heading">Players</div>
            <hr>
            <div v-for="(player,id) in players">
                <div class="bg-white rounded p-2 m-2 display-4 player" @click="changePlayer(player.id,id)">
                    {{player.name}}
                    <i class="fa fa-circle text-success float-right" style="font-size:1rem" v-if="player.manager_id"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "players-nav",
        props: [
            'updateComponent'
        ],
        data(){
            return {
                players:[],
            }
        },
        created(){
            axios.get('/player')
                .then((response)=>{
                    this.players = response.data;
                })
        },
        methods:{
            changePlayer: function(e,f){
                this.$parent.$emit('updatePlayer',e);
            }
        },
        watch: {
            updateComponent:function(){
                axios.get('/player')
                    .then((response)=>{
                        this.players = response.data;
                    })
            }
        }
    }
</script>

<style scoped>
    .players-wrapper{
        height:100%;
    }
    .side-nav{
        background:#e0e0e0;
        width:100%;
        height:100%;
        padding-top:10px;
    }
    .heading{
        margin:5px 50px 0 5px;

    }
    .side-nav .player{
        cursor: pointer;
    }
    .side-nav .player:hover{
        background:#f9f9f9 !important;
    }
</style>