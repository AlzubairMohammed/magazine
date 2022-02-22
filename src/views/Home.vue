<template>
    
    <div>
        <Carsousel/>
        <Cards/>
        <Cards/>
        <Cards/>
    </div>
</template>


<script>
import Cards from '../components/Card.vue'
import Carsousel from '../components/Carsousel.vue'
export default {
    components: {
        Cards,
        Carsousel
    }
}
</script>
