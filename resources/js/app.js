
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('@fortawesome/fontawesome-free/js/all.js');
} catch (e) {}

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
window.openNav = function () {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("mySidenav").classList.remove("closed");
    document.getElementById("mySidenav").classList.add("opened");
    document.getElementById("main").style.marginLeft = "250px";
}


/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
window.closeNav = function () {
    document.getElementById("mySidenav").style.width = "90px",
        document.getElementById("mySidenav").classList.add("closed");
        document.getElementById("mySidenav").classList.remove("opened");
    document.getElementById("main").style.marginLeft = "90px";
}