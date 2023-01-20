<template>
  <div class="main">
    <nav>
      <ul>
        <li><NuxtLink to="/">Home</NuxtLink></li>
        <li><NuxtLink to="/rentals">Rentals</NuxtLink></li>
        <li><NuxtLink to="/bookings"> Bookings </NuxtLink></li>
        <li><NuxtLink to="/"> Log in </NuxtLink></li>
        <li><NuxtLink to="/logout"> Log out </NuxtLink></li>
      </ul>
    </nav>
    <Nuxt />
  </div>
</template>

<script>
export default {
  name: 'DefaultLayout',
}
</script>

<style scoped>
nav {
  height: 50px;
  background-color: black;
  color: white;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}
ul li{
  display: inline;
  margin: 10px;
}
.navButton {
  margin: 10px;
}
a {
  text-decoration: none;
  color: inherit;
}
.main {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
    Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
</style>
