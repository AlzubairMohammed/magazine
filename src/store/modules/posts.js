import axios from 'axios'
const state = {
  products: [],
};

const getters = {
  allProducts: (state) => {
    return state.products;
  },
};

const actions = {
  async fetchPosts({ commit }) {
    const response = await axios.get(
      "http://127.0.0.1:8000/api/posts"
    );
    commit("setPosts", response.data);
  },
};

const mutations = {
  setProducts: (state, products) => {
    state.products = products;
  },
};
export default {
  state,
  getters,
  actions,
  mutations,
};