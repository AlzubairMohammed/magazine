<template>
    <v-app>
        <Header/>
        <Sidebar/>
        <v-content>
            <v-container>
                <router-view/>
            </v-container>
        </v-content>
        <Footer/>
    </v-app>
</template>

<script>
import Header from '../dashboard/layouts/header/Header.vue'
import Sidebar from '../dashboard/layouts/sidebar/Sidebar.vue'
import Footer from '../dashboard/layouts/footer/Footer.vue'
export default {
    components: {
        Header,
        Sidebar,
        Footer
    },
}
</script>