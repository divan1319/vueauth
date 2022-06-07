import _ from 'lodash';
window._ = _;

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// CARGANDO VUE

import {createApp} from 'vue'
import App from '../vue/app'

window.app = createApp(App);
window.vm = app.mount('#app');