/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('raid-progress', require('./components/RaidProgress.vue'))
Vue.component('wow-armoury', require('./components/WowArmoury.vue'))
Vue.component('applications', require('./components/Applications.vue'))

const app = new Vue({
    el: '#app',
})
