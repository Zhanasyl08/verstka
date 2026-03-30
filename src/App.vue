<template>
  <div id="app">
    <nav>
      <router-link to="/">Home</router-link>
      <router-link to="/Article">Article</router-link>
      <router-link to="/Blog">Blog</router-link>
      <router-link to="/Works">Works</router-link>
    </nav>

    <!-- сюда будут подставляться страницы -->
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

