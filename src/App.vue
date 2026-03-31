<template>
  <div class="app_vue">
    <div class="nav">
    <nav>
      <router-link to="/" class="active">Home</router-link>
      <router-link to="/Article" class="active">Article</router-link>
      <router-link to="/Blog" class="active">Blog</router-link>
      <router-link to="/Works" class="active">Works</router-link>
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

nav {
   display: flex;
  justify-content: flex-end;
  gap: 40px; 
  margin: 20px;
  padding-right: 150px;

  a {
    text-decoration: none;
  color: black;
  font-weight: 250;
  font-size: 19px;
  font-family:Arial, Helvetica, sans-serif;
  
&:hover {
      color: orange;
    }

    
}
}






</style>


