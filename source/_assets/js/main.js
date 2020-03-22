import Vue from 'vue';

import Navigation from './components/Navigation'
import FullScreenMedia from "./components/FullScreenMedia";

Vue.component('navigation', Navigation);
Vue.component('full-screen-media', FullScreenMedia);

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