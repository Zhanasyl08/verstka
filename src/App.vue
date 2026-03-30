<template>
  <div class="app_vue">
    <div class="nav">
    <nav>
      <router-link to="/">Home</router-link>
      <router-link to="/Article">Article</router-link>
      <router-link to="/Blog">Blog</router-link>
      <router-link to="/Works">Works</router-link>
    </nav>
    </div>

    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "App"
};
</script>



<script>
</script>


<style lang="scss" scoped>


nav a {
  display: flex;
  justify-content: space-around;
  flex-direction: row;
  margin: 40px;
  flex-wrap: wrap;



}
</style>


