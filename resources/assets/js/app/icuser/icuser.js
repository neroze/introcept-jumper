var J = require('../jumper/lib.js');
import JAlert from '../jumper/alert';
J.Vue.component('date-picker', require('../../components/date_picker.vue'));
var User = {};

User.init = function() {}

User.save_user = function() {
    this.$http.post('/icusers', this.user).then((resp) => {
        if (resp.data.stat == 'ok') {
            this.recently_added_users.push(Object.assign({}, this.user));
            J.reset(this.user);
            this.recentlyAdded(5);
            JAlert.success("User Saved.");
        } else {
            JAlert.error(resp.data.message.join("<br>"));
        }

    }, (error) => {
        JAlert.error("Sorry there was some unexpected error.");
    });
}


User.validateBeforeSubmit = function(e) {
    this.$validator.validateAll();
    if (!this.errors.any()) {
        this.save_user();
    } else {
        JAlert.error('Validation Error.')
    }
}
User.submitForm = function() {
    this.formSubmitted = true
}

User.dob_changed = function(date) {
    this.user.dob = date;
}

User.recentlyAdded = function(number) {
    const limit = number || 5;
    if (this.recently_added_users.length > limit) {
        this.recently_added_users = this.recently_added_users.slice(Math.max(this.recently_added_users.length - limit, 1));
    }
}

new J.Vue({
    el: '#app',
    data: {
        recently_added_users: [],
        user: {
            name: null,
            gender: 'male',
            email: null,
            phone: null,
            address: null,
            nationality: null,
            dob: null,
            education_background: null,
            mode_of_contact: null,
        },
        formSubmitted: false
    },
    mounted: function() {
        this.init();
    },
    methods: User
});