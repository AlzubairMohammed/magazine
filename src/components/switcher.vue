<template>
  <v-card>
    <v-tabs
      background-color=""
      show-arrows
    >
      <v-tabs-slider color="#3dbb95"></v-tabs-slider>

      <v-tab
        v-for="i in ['شعر','رسومات','صور فتوغرافية','قصص قصيرة','نصوص ادبية','فيديوهات قصيرة','مفطتفات رياضية','الحضارة السودانية','ملخصات كتب','الرئيسية']"
        :key="i"
      >
      <router-link v-if="i=='الرئيسية'" id="titleId" :to="{name: 'home'}">
        {{ i }}
      </router-link>
      <router-link v-else id="titleId" :to="{name: 'category'}">
        {{ i }}
      </router-link>
        
      </v-tab>
    </v-tabs>
  </v-card>
</template>


<style scoped>
#titleId{
  text-decoration: none;
  color:black;
}
</style>
