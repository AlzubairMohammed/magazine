<template>
    <v-footer
      :padless="false"
      class="mt-10" 
    >
      <v-card
        flat
        tile
        width="100%"
        class="text-center"
        color="#006c6e"
      >
        <v-card-text>
          <v-btn
            v-for="icon in icons"
            :key="icon"
            class="mx-4"
            icon
          >
            <v-icon color="white" size="24px">
              {{ icon }}
            </v-icon>
          </v-btn>
        </v-card-text>

        <v-divider></v-divider>

        <v-card-text class="white--text">
          {{ new Date().getFullYear() }} — <strong>أطياف</strong>
        </v-card-text>
      </v-card>
    </v-footer>

    
   
  </template>

<script>
  export default {
    data: () => ({
      icons: [
        'mdi-home',
        'mdi-email',
        'mdi-calendar',
        'mdi-delete',
      ],
    }),
    computed: {
      
    },
  }
</script>