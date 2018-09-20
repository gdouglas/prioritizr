
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        sliders: [],
        title: "",
        label: "",
        prioritizations: [
            {
                title: "1",
                priorities: ["foo", "bar"]
            },
            {
                title: "2",
                priorities: ["baz", "fizz"]
            },
            {
                title: "3",
                priorities: ["buzz", "zonk"]
            }]
    },
    methods: {
        addSlider: function() {
            if (this.label !== "") {
                this.sliders.push({
                    "label":this.label,
                    "value": this.sliders.length
                });
                this.label = "";
            }
        },
        loadPriority: function (index) {
            // sliders = slider(index);
            alert(index);
        },
        save: function () {
            alert("save");
        },
        validate: function(e, index) {
            this.sliders[index].value = e.target.value;
            // check this things value, look for another slider with that value and return true
        }
    }
});
