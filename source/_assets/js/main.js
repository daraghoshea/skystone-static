import Vue from 'vue';

import Navigation from './components/Navigation'
import FullScreenMedia from "./components/FullScreenMedia";

Vue.component('navigation', Navigation);
Vue.component('full-screen-media', FullScreenMedia);

new Vue({
    el: "#app",
    components: {}
});