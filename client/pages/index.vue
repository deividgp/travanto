<template>
  <div>
    <h1>Welcome to David's demo app</h1>
    <v-form>
      <v-text-field v-model="email" label="E-mail" required></v-text-field>
      <v-text-field v-model="password" label="Password" required></v-text-field>
      <v-btn class="mr-4" @click="login"> Log in </v-btn>
    </v-form>
  </div>
</template>

<script>
import axios from 'axios'
axios.defaults.withCredentials = true
export default {
  name: 'IndexPage',
  data() {
    return {
      email: '',
      password: '',
    }
  },
  head() {
    return {
      title: 'Home',
    }
  },
  methods: {
    async login() {
      const csrf = await axios.get('http://localhost:8000/sanctum/csrf-cookie');
      const result = await axios.post('http://localhost:8000/api/login', {
        email: this.email,
        password: this.password,
      });

      console.log(result.data)
    },
  },
}
</script>

<style scoped>
h1 {
  text-align: center;
}
</style>
