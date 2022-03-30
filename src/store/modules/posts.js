import axios from "axios";



export default {
   state : {
    posts: [],
    post: [],
  },
  
   getters : {
    
  },
  
   actions : {
    async getPosts({ commit }) {
      await axios.get("http://127.0.0.1:8000/api/posts")
      .then( response => {
      commit("setPosts", response.data)
      }
        )
    },
    async getPost({ commit }, id) {
      await axios.get(`http://127.0.0.1:8000/api/posts/${id}`)
      .then( response => {
      commit("setPost", response.data)
      }
        )
    },
  },
  
   mutations : {
    setPosts: (state, posts)=> {
      state.posts = posts.posts
    },
    setPost: (state, post)=> {
      state.post = post
    },
  }
}