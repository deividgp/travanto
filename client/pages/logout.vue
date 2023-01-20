<template>
  <div>
    Thanks for using this app
    <br />
    <NuxtLink to="/">Go back to home page</NuxtLink>
  </div>
</template>

<script>
export default {
  name: 'LogoutPage',
  head() {
    return {
      title: 'Logout',
    }
  },
}
</script>
