
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');
import VueResource from 'vue-resource';
Vue.use(VueResource);
import axios from 'axios';
window.axios=axios;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('articles',
require('./components/Articles.vue').default);
Vue.component('index2',
require('./components/Index2.vue').default);
Vue.component('index',
require('./components/Index.vue').default);
Vue.component('design',
require('./components/Design.vue').default);
Vue.component('navbar',
require('./components/Navbar.vue').default);
Vue.component('login',
require('./components/Login.vue').default);
Vue.component('coin',
require('./components/Coin.vue').default);
Vue.component('chart',
require('./components/Chart.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
