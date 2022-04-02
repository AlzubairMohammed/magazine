<template>	
  <div id="cardId">	
    <v-row>	
      <v-col	
      cols="4"	
      >	
        <v-img	
        :src="require('../../api/storage/app/public/'+post.image)"
        id="postImage"	
        :to="{name: 'singlePost'}"	
        >
        </v-img>	
      </v-col>	
      <v-col	
      cols="8"	
      >	
      <router-link id="titleId" color="white" :to="{name: 'singlePost', params: { post: post}}">{{post.id}}</router-link><br>	
      <v-card-text id="textContent" class="font-weight-regular">
         {{this.post.postContent}}	

     </v-card-text>	
      </v-col>	
    </v-row>	
  </div>	
</template>	

<script>
export default {
  setup() {
    
  },
  data: () => ({

  }),
  
  props: ['post']
  
}
</script>

<style scoped>	
#postImage{	
  margin: 2px 0px -2px 2px;	
  height: 195px;	
  border-radius: 17px  0px 0px 17px;	
}	
#cardId{	
  margin: 5px;	
  height: 200px;	
  border: 1px solid gray;	
  border-radius: 20px;	
}	
#socailIcons{	
  margin-top: 15px;	
}	
#avatar{	
  margin-left: 9px;	
}	
@media only screen and (max-width: 600px){	
		
}	
span{	
  font-size: 20px;	
}	
#titleId{	
  font-size: 20px;	
  text-decoration: none;	
  color:#006c6e;	
  margin-left: 50px;	
}	
#textContent{	
  color:black;	
  text-align: right;	
  padding-top: 8px !important;	
}	
</style> 	