<template>
    <v-container>
      <v-content id="loginContent">
      <v-card width="500" class="mx-auto mt-9 text-right">
        <v-card-text class="pt-10">
          <v-text-field label="الاسم" prepend-icon="mdi-account-circle" reverse/>
          <v-text-field
          label="كلمة المرور" 
          :type="showPassword ? 'text' : 'password'"
          prepend-icon="mdi-lock"
          :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          @click:append="showPassword = !showPassword"
          reverse
          />
        </v-card-text>

        <v-divider></v-divider>
        <v-card-actions>
            <v-col align="center">
            <v-btn color="#006c6e"><span>تسجيل الدخول</span></v-btn>
            </v-col>
          
        </v-card-actions>
      </v-card>
    </v-content>
    </v-container>

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
    margin-bottom: 86px;
}
#title{
  color: rgb(148, 148, 148);
  font-size: 20px;
}
span{
  color: white;
}
</style>