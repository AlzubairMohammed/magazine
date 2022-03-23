<template>
    <v-container>
      <v-content id="loginContent">
      <v-card width="500" class="mx-auto mt-9 text-right">
        <h1 id="title" class="pt-5" align="center">انشاء حساب</h1>
        <v-card-text>
          <v-text-field label="الاسم" prepend-icon="mdi-account-circle" reverse/>
          <v-text-field label="البريد الالكتروني" type="email" prepend-icon="mdi-email" reverse/>
          <v-text-field label="الدولة" prepend-icon="mdi-domain" reverse/>
          <v-text-field label="العمر" prepend-icon="mdi-clock" reverse/>
          <v-text-field label="الموهبة(اختياري)" prepend-icon="mdi-widgets" reverse/>
         <v-text-field
          label="كلمة المرور" 
          :type="showPassword ? 'text' : 'password'"
          prepend-icon="mdi-lock"
          :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          @click:append="showPassword = !showPassword"
          reverse
          />
          <v-text-field 
          label="تأكيد كلمة المرور" 
          :type="showPassword ? 'text' : 'password'"
          prepend-icon="mdi-lock"
          @click:append="showPassword = !showPassword"
          reverse 
          />
        </v-card-text> 
          <v-textarea
          label="اكتب وجهة نظرك بالنسبة للمجلة"
          reverse
          rows="3"
          class="text-right textClass"
          >
          </v-textarea>

        <v-divider></v-divider>
        <v-card-actions>
            <v-col align="center">
            <v-btn color="#006c6e"><span>حفظ البيانات</span></v-btn>
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
    margin-top: 60px;
}
#title{
  color: rgb(148, 148, 148);
  font-size: 20px;
}
span{
  color: white;
}
 .textClass{
  
  margin-right: 18px;
  margin-left: 50px;
}
/*
@media only screen and (max-width: 600px){
	.textClass{
  width:13.5rem;
}
} */
</style>