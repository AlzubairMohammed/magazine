import Vue from 'vue'
import Vuex from 'vuex'
import post from './modules/posts'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    counter:1
  },
  mutations: {

  },
  actions: {
    posts: post
  }
})
