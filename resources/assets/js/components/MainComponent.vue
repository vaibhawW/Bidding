<template>
     <div class="main-wrapper">
         <div class="d-flex flex-row h-100 w-100">
             <vj-sidebar :updateComponent="updatePlayers"></vj-sidebar>
             <vj-player :playerUpdate='currentPlayer'></vj-player>
             <vj-manager :player="currentPlayer" :amount="amount"></vj-manager>
         </div>
     </div>
</template>

<script>
    let playerComponent = require('./PlayerComponent');
    let sideBarComponent =  require('./PlayersNav');
    let managerComponent =  require('./ManagerBar');
    export default {
        name: "main-component",
        components : {
            'vj-sidebar':sideBarComponent,
            'vj-player':playerComponent,
            'vj-manager':managerComponent,
        },
        data(){
            return{
                currentPlayer: '1',
                amount: '0',
                updatePlayers: true,
            }
        },
        mounted(){
            this.$on('updatePlayer',function(e){
                this.currentPlayer = e;
            });
            this.$on('amountUpdated',function(e){
                this.amount = e;
            });
            this.$on('updatePlayers',function(){
                this.updatePlayers=!this.updatePlayers;
            })
        }
    };
</script>

<style scoped>
    .main-wrapper{
        height:100%;
        width:100%;
    }
</style>