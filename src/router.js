import Vue from 'vue';
import VueRouter from 'vue-router';

import HomePage from './views/Home.vue';
import ArticlePage from './views/Article.vue';
import BlogPage from './views/Blog.vue';
import WorksPage from './views/Works.vue';

Vue.use(VueRouter);

const routes = [
  { path: '/', component: HomePage },
  { path: '/Home', component: HomePage },
  { path: '/Article', component: ArticlePage },
  { path: '/Blog', component: BlogPage },
  { path: '/Works', component: WorksPage },
];

export default new VueRouter({
  mode: 'history',
  routes
});