import _ from 'lodash';
window._ = _;

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.withCredentials = true;
// CARGANDO VUE

import {createApp} from 'vue'
import App from '../vue/app'
import router from '../vue/router/index'
import store from '../vue/vuex/store.js'

window.store = store;
window.state = store.state;

window.app = createApp(App).use(router).use(store);
window.vm = app.mount('#app');