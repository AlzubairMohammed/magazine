<template>
    <v-container>
        <v-row class="mt-14">
          <v-col cols="12" sm="12" md="12" lg="12" xl="12">
                  <Switcher/>
                </v-col>
        <v-col id="advertisementId" sm="4" md="4" lg="4" xl="4">
            
        </v-col>
        <v-col  sm="8" md="8" lg="8" xl="8">
            <v-row id="postContentId">
                <v-col cols="12" sm="12" md="12" lg="12" xl="12">
                    <v-img id="singlePostImageId" :src="require('../../api/storage/app/public/'+$route.params.post.image)"></v-img>
                </v-col>
                <v-col cols="12" sm="12" md="12" lg="12" xl="12">
                    <v-card-text>
                      {{$route.params.post.postContent}}
                     </v-card-text>
                </v-col>
                <v-col cols="12" sm="12" md="12" lg="12" xl="12">
                    <v-list-item class="grow">
        <v-list-item-avatar color="grey darken-3">
          <v-img
            class="elevation-6"
            alt=""
            src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
          ></v-img>
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title id="authorNameId"><span>{{$route.params.post.authorName}}</span></v-list-item-title>
        </v-list-item-content>

        <v-row
          align="center"
          justify="end"
        >
          <v-icon class="mr-1">
            mdi-heart
          </v-icon>
          <span class="subheading mr-2">256</span>
          <span class="mr-1">·</span>
          <v-icon class="mr-1">
            mdi-share-variant
          </v-icon>
          <span class="subheading mr-5">45</span>
        </v-row>
      </v-list-item>
                </v-col>
            </v-row>
        </v-col>
    </v-row>
    </v-container>
</template>

<script>
import Switcher from '../components/switcher.vue'
export default {
  props:{
  },
  components: {
    Switcher
  },
  computed:{
    
  }
}
</script>

<style scoped>
#advertisementId{
    background-color: rgb(247, 247, 247);
    height: 1128px;
    margin-top: 12px;
}
#singlePostImageId{
    width: 800px;
    height: 300px;
    border-radius: 10px;
    
}
#postContentId{
    border: 1px solid gray;
    border-radius: 10px;
    margin-top: 6px;
    margin-left: 3px;
    text-align: right;
    color: #006c6e;
}
span{
  color: #006c6e;
}
#authorNameId{
  margin-right: 205px;
}
</style>