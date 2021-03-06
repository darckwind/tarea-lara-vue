/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/HomeComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


/**
 * vista del cliente
 */
Vue.component('home-client-component', require('./components/Client/HomeClientComponent.vue').default);
Vue.component('client-component', require('./components/Client/ClientComponent.vue').default);
Vue.component('mascota-component', require('./components/Client/MascotaComponent.vue').default);
Vue.component('new-mascota-component', require('./components/Client/NewMascotaComponet.vue').default);
Vue.component('new-client-component', require('./components/Client/NewClientComponent').default);

/**
 * vista principal
 */

Vue.component('new-component', require('./components/Home/NewRecetaComponent.vue').default);
Vue.component('content-component', require('./components/Home/RecetaContentComponent.vue').default);
Vue.component('total-component', require('./components/Home/TotalComponent.vue').default);
Vue.component('receta-component', require('./components/Home/RecetaComponent.vue').default);
Vue.component('home-component', require('./components/Home/HomeComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
