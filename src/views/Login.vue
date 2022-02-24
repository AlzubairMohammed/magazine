<template>
    <v-content id="loginContent">
      <v-card width="500" class="mx-auto mt-9">
        <v-card-title>Long Area</v-card-title>
        <v-card-text>
          <v-text-field label="Username" prepend-icon="mdi-account-circle"/>
          <v-text-field 
          label="Password" 
          :type="showPassword ? 'text' : 'password'"
          prepend-icon="mdi-lock"
          :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          @click:append="showPassword = !showPassword"/>
        </v-card-text>

        <v-divider></v-divider>
        <v-card-actions>
          <v-btn color="success">Register</v-btn>
          <v-btn color="info">Login</v-btn>
        </v-card-actions>
      </v-card>
    </v-content>

</template>

<script>
export default {
  data()
  {
    return{
      showPassword:false
    }
  }
}
</script>

<style scoped>
#loginContent{
    margin-top: 100px;
    margin-bottom: 120px;
}
</style>