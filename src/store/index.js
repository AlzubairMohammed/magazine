import Vue from 'vue'
import Vuex from 'vuex'
import posts from './modules/posts'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    category:0
  },
  mutations: {
  },
  actions: {
  },
  modules: {
    posts
  }
})