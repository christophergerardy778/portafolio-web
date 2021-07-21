import ExampleComponent from "./components/ExampleComponent";
import HomeComponent from "./components/HomeComponent";

require('./bootstrap');

window.Vue = require("vue");

Vue.component('example-component', ExampleComponent);
Vue.component('home-component', HomeComponent);

new Vue({
    el: '#app'
});
