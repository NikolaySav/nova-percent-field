Nova.booting((Vue, router) => {
    Vue.component('index-nova-percent-field', require('./components/IndexField'));
    Vue.component('detail-nova-percent-field', require('./components/DetailField'));
    Vue.component('form-nova-percent-field', require('./components/FormField'));
})
