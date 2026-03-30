import Vue from 'vue';
import App from './App.vue';
import router from './router'; // обязательно

new Vue({
  router,            // <-- без этого Vue Router не работает
  render: h => h(App)
}).$mount('#app');