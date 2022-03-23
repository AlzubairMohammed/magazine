<template>
  <v-layout>
    <v-app-bar id="appBar" density="compact" fixed>
      <img height="30" width="0" src="../../../../logo5.svg" id="logo">
      <v-spacer></v-spacer>
      <v-row>
        <v-col id="searchColId" cols="2" sm="1" md="1" lg="1" xl="1">
          <i id="iconId" class="fas fa-search" v-if="x"></i>
        </v-col>
        <v-col cols="10" sm="5" md="5" lg="5" xl="5">
          <div id="search" class="mt-5 p-5">
          <v-text-field @focus="x=false" @blur="x=true">
        </v-text-field>
        </div>
        </v-col>
         <v-col cols="5" sm="2" md="2" lg="2" xl="2">
           <v-btn
            id="loginButtonId"
            class="mt-6 ml-10"
            color="#006c6e"
            :to="{name: 'login'}"
            ><span>تسجيل</span></v-btn>
         </v-col>
         <v-col cols="6" sm="2" md="2" lg="2" xl="2">
        <v-btn
          id="registerButtonId"
          class="mt-6"
          color="#006c6e"
          :to="{name: 'register'}"
        >
        <v-icon id="registerIconId" color="white" left>mdi-handshake-outline</v-icon>

        <span>انضم الينا</span>
      </v-btn>
      <v-col class="searchColIdMini" cols="2" sm="1" md="1" lg="1" xl="1">
          <i id="iconId" class="fas fa-search" v-if="x"></i>
        </v-col>
        <v-col class="searchColIdMini" cols="10" sm="5" md="5" lg="5" xl="5">
          <div id="search" class="mt-5 p-5">
          <v-text-field @focus="x=false" @blur="x=true">
        </v-text-field>
        </div>
        </v-col>
         </v-col>
      </v-row>
     
      
    
    </v-app-bar>

    
  </v-layout>
</template>



<script>
  export default {
    data: () => ({
      x: true,
      items: [
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me 2' },
      ],
    }),
  }
</script>

<style scoped>
#appBar{
  padding: 0px !important;
  height: 55px !important;
}
#appBar *{
  margin-bottom: 4px !important;
}
#logo{
  width: 150px !important;
  height: 150px !important;
  margin-top: 10px;
}
 #iconId {
  color: rgb(165, 161, 161);
  margin-top: 40px;
  position: absolute;
}
span{
  color: white;
}
.searchColIdMini{
  display: none;
}
@media only screen and (max-width: 1000px){
	#loginButtonId{
    margin-left: 0px !important;
  }
}
@media only screen and (max-width: 700px){
	#registerButtonId{
    margin-left: 10px !important;
  }

}
@media only screen and (max-width: 600px){
	#registerButtonId{
    margin: 0px !important;
    margin-bottom: 90px !important;
  }
  #loginButtonId{
    margin: 0px !important;
  }
  #searchColId{
    display: none !important;
  }
  #logo{
    margin-top: 16px;
  }
  .searchColIdMini{
    margin-top: -100px;
    display: inline;
    position: absolute;
    margin-left: -160px;
  }
  #appBar{
    height: 120px !important;
  }
  #searchColId{
    display: none !important;
  }
  #iconId{
    margin-top: 28px !important;
  }
}
@media only screen and (max-width: 370px){
#registerIconId{
  display: none;
}
#registerButtonId{
  width: 80px;
}
#loginButtonId{
  width: 20px !important;
}
#logo{
  margin-left: -60px !important;
  margin-right: 0px !important;
}
}


</style>