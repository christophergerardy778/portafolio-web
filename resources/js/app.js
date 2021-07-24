import Vuetify from 'vuetify';

import Navigation from "./components/Navigation";
import FooterComponent from "./components/FooterComponent";
import ContacForm from "./components/ContacForm";

require('./bootstrap');

window.Vue = require("vue");

Vue.use(Vuetify);
Vue.component('navigation', Navigation);
Vue.component('footer-component', FooterComponent);
Vue.component('contact-form', ContacForm);

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
