<template>
    <div class="managers-wrapper">
        <div class="side-nav">
            <div class="display-2 heading">Managers</div>
            <hr>
            <div v-for="(manager,id) in managers">
                <div class="bg-white rounded p-2 m-2 display-4 manager" @click="bid(manager.id,player,amount)">
                    {{manager.name}}
                    <div class="small-text">{{manager.amount}}</div>
                </div>
            </div>
            <div class="mt-5">
                <div class="bg-warning text-danger rounded p-2 m-2 display-4 mt-5" @click="bid(1,player,0)">
                    Clear
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "managers-nav",
        props:[
            'player',
            'amount'
        ],
        data(){
            return {
                managers:[],
            }
        },
        created(){
            axios.get('/manager')
                .then((response)=>{
                    this.managers = response.data;
                })
        },
        methods:{
            update(){
                axios.get('/manager')
                    .then((response)=>{
                        this.managers = response.data;
                    });
            },
            bid(m,p,a){
                axios.get(`/allot/${m}/${p}/${a}`)
                    .then(()=>{
                        this.update();
                        this.$parent.$emit('updatePlayers');
                    });
            }
        }
    }
</script>

<style scoped>
    .managers-wrapper{
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
    .side-nav .manager{
        cursor: pointer;
    }
    .side-nav .manager:hover{
        background:#f9f9f9 !important;
    }
    .small-text{
        font-size: 1rem;
        display:inline-block;
        float:right;
        color:red;
    }

</style>