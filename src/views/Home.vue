<template>	

    <div>	
        <Carsousel/>	

        <v-container>	
            <v-row>	
             <v-col cols="12" sm="12" md="12" lg="12" xl="12">	
                  <Switcher/>	
            </v-col>	
            <v-col	
            cols="4"	
            sm="4"	
            md="3"	
            lg="3"	
            xl="3"	
            >	
            <div	
            id="advertisementContent"	
            >	

            </div>	
            </v-col>	
            <v-col	
            cols="12"	
            sm="8"	
            md="9"	
            lg="9"	
            xl="9"	
            >	
            <v-row no-gutters class="mb-3">	
                <v-col cols="12" xs="12" sm="12" md="6" lg="6" xl="6" v-for="post in this.$store.state.posts.posts" :key="post.id"><Cards :post="post" /></v-col>	
            </v-row>	
            <Pagination></Pagination>	
            </v-col>	
        </v-row>	
        </v-container>	
    </div>	
</template>	


<script>	
import Cards from '../components/Card.vue'	
import Carsousel from '../components/Carsousel.vue'	
import Pagination from '../layouts/pagination/Pagination.vue'	
import Switcher from '../components/switcher.vue'	
export default {	
    components: {	
        Cards,	
        Carsousel,	
        Pagination,	
        Switcher	
    },
    computed: {
    getPosts: ()=>{
            return this.$store.state.posts
        },
    },
    mounted(){
        this.$store.dispatch('getPosts')        
                
    },
    props:{
    }		
}	
</script>	

<style scoped>	
#advertisementContent{	
    background-color: rgb(247, 247, 247);	
    height: 1105px;	
}	
@media only screen and (max-width: 600px){	
#advertisementContent{	
    display: none;	
}	
}	
</style>	