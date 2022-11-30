
require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('clientes-component', require('./components/ClientesComponent.vue').default);
Vue.component('detalleorden-component', require('./components/DetalleOrdenComponent.vue').default);
Vue.component('ordenes-component', require('./components/OrdenesComponent.vue').default);
Vue.component('productos-component', require('./components/ProductosComponent .vue').default);
Vue.component('proveedores-component', require('./components/ProveedoresComponent.vue').default);

const app = new Vue({
    el: '#app',
});
