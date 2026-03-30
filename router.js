import Vue from 'vue';
import VueRouter from 'vue-router';
import home from './views/home.vue';
import article from './views/article.vue';
import blog from './views/blog.vue';
import works from './views/works.vue';


Vue.use(VueRouter);

const routes = [
  { path: '/home', component: home },
  { path: '/article', component: article },
  { path: '/blog', component: blog },
  { path: 'works', component: works},

];

const router = new VueRouter({
  mode: 'history', 
  routes
});

export default router;