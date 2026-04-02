<template>
  <div class="app_vue">
    <header class="app-header">
      <button class="hamburger" @click="menuOpen = true" aria-label="Open menu">☰</button>

      <nav class="main-nav">
        <router-link to="/" class="nav-link">Home</router-link>
        <router-link to="/Article" class="nav-link">Article</router-link>
        <router-link to="/Blog" class="nav-link">Blog</router-link>
        <router-link to="/Works" class="nav-link">Works</router-link>
      </nav>

      <div class="mobile-overlay" v-if="menuOpen" @click.self="menuOpen = false">
        <div class="mobile-menu">
          <button class="close-btn" @click="menuOpen = false" aria-label="Close menu">×</button>
          <router-link to="/" class="mobile-link" @click="menuOpen = false">Home</router-link>
          <router-link to="/Article" class="mobile-link" @click="menuOpen = false">Article</router-link>
          <router-link to="/Blog" class="mobile-link" @click="menuOpen = false">Blog</router-link>
          <router-link to="/Works" class="mobile-link" @click="menuOpen = false">Works</router-link>
        </div>
      </div>
    </header>

    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      menuOpen: false,
    };
  },
};
</script>

<style lang="scss" scoped>
.app-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 20px;
  background: #fff;
  box-shadow: 0 1px 7px rgba(0,0,0,0.1);
}

.main-nav {
  display: flex;
  gap: 24px;
}

.nav-link,
.mobile-link {
  text-decoration: none;
  color: #333;
  font-weight: 500;
  font-size: 18px;
  font-family: Arial, Helvetica, sans-serif;
}

.nav-link:hover,
.mobile-link:hover {
  color: orange;
}

.hamburger,
.close-btn {
  display: none;
  border: 0;
  background: transparent;
  font-size: 28px;
  line-height: 1;
  cursor: pointer;
}

.mobile-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.45);
  z-index: 1000;
  display: flex;
  justify-content: flex-end;
}

.mobile-menu {
  width: min(86vw, 320px);
  height: 100%;
  background: #fff;
  padding: 18px;
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.close-btn {
  display: inline-flex;
  align-self: flex-end;
  margin-bottom: 10px;
}

@media (max-width: 920px) {
  .main-nav {
    display: none;
  }

  .hamburger {
    display: inline-flex;
  }
}

@media (min-width: 921px) {
  .mobile-overlay {
    display: none;
  }
}
</style>


