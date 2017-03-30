
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('../sass/custom/jquery-steps/jquery.steps');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
        clientEdit: false
    }
});


//other js files

require('metismenu');

require('../sass/custom/onoffcanvas/onoffcanvas');

require('../sass/custom/screenfull/screenfull');

require('../sass/custom/core');

require('../sass/custom/app');

require('../sass/custom/style-switcher');

//require('../sass/custom/form-wizard/jquery.backstretch');

//require('../sass/custom/form-wizard/scripts');