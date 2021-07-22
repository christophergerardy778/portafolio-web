import Vuetify from 'vuetify'
import ExampleComponent from "./components/ExampleComponent";
import HomeComponent from "./components/HomeComponent";
import Navigation from "./components/Navigation";
import FooterComponent from "./components/FooterComponent";

require('./bootstrap');

window.Vue = require("vue");

Vue.use(Vuetify);
Vue.component('example-component', ExampleComponent);
Vue.component('home-component', HomeComponent);
Vue.component('navigation', Navigation);
Vue.component('footer-component', FooterComponent);

new Vue({
  el: '#app',
  vuetify: new Vuetify({
    theme: {
      themes: {
        light: {
          primary: '#FF4672'
        }
      }
    }
  }),
});
