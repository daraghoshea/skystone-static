import Vue from 'vue';

import Navigation from './components/Navigation'
import FullScreenMedia from "./components/FullScreenMedia";
import VueGlide from 'vue-glide-js'
import 'vue-glide-js/dist/vue-glide.css'
import lazysizes from 'lazysizes'
import 'lazysizes/plugins/respimg/ls.respimg';


Vue.component('navigation', Navigation);
Vue.component('full-screen-media', FullScreenMedia);

Vue.use(VueGlide);

new Vue({
    el: "#app",
    components: {}
});

// Add smooth scrolling to anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});