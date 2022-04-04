<template>
  <v-card>
    <v-tabs background-color="" show-arrows>
      <v-tabs-slider color="#3dbb95"></v-tabs-slider>

      <v-tab v-for="i in category" :key="i">
        <router-link
          id="titleId"
          :to="{ name: i == 'الرئيسية' ? 'home' : 'category' }"
        >
          <button @click="$store.state.category = category.indexOf(i)">
            {{ i }}
          </button>
        </router-link>
      </v-tab>
    </v-tabs>
  </v-card>
</template>

<script>
export default {
  data() {
    return {
      category: [
        "شعر",
        "رسومات",
        "صور فتوغرافية",
        "قصص قصيرة",
        "نصوص ادبية",
        "فيديوهات قصيرة",
        "مفطتفات رياضية",
        "الحضارة السودانية",
        "ملخصات كتب",
        "الرئيسية",
      ],
    };
  },
  methods: {
    reload: () => {
      window.location.reload();
    },
  },
};
</script>

<style scoped>
#titleId {
  text-decoration: none;
  color: black;
}
</style>
