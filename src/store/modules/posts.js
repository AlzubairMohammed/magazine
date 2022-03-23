import axios from '@axios'

export default {
  namespaced: true,
  actions: {
    fetchPosts(ctx, queryParams) {
      return new Promise((resolve, reject) => {
        axios.get('/api/posts', { params: queryParams })
          .then(res => resolve(res))
          .catch(err => reject(err))
      })
    },
    fetchPost(ctx, data) {
      return new Promise((resolve, reject) => {
        axios.get(`/api/posts/${data.id}`)
          .then(res => resolve(res))
          .catch(err => reject(err))
      })
    },
    createPost(ctx, data) {
      return new Promise((resolve, reject) => {
        axios.post('/api/posts', data)
          .then(res => resolve(res))
          .catch(err => reject(err))
      })
    },
    updatePost(ctx, data) {
      return new Promise((resolve, reject) => {
        axios.post(`/api/posts/${data.id}`, data.form)
          .then(res => resolve(res))
          .catch(err => reject(err))
      })
    },
    deletePost(ctx, data) {
      return new Promise((resolve, reject) => {
        axios.delete(`/api/posts/${data.id}`)
          .then(res => resolve(res))
          .catch(err => reject(err))
      })
    },
  },
}
