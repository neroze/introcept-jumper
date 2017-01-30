import J from '../jumper/lib.js';
import JAlert from '../jumper/alert';
J.Vue.component('date-picker', require('../../components/date_picker.vue'));
var User = {};

/**
 *  Init function. Method to register initial data process || loading
 * @return void
 */
User.init = function() {}

/**
 * Method to call api endpoint to save users
 * @param  Object _user
 * param schema
 * {
            name: null,
            gender: 'male',
            email: null,
            phone: null,
            address: null,
            nationality: null,
            dob: null,
            education_background: null,
            mode_of_contact: null,
        }
 */
User.save_user = function(_user) {
    this.$http.post('/icusers', _user).then((resp) => {
        if (resp.data.stat === 'ok') {
            this.recently_added_users.push(Object.assign({}, this.user));
            J.reset(this.user);
            //setting default value
            this.user.gender = "male";
            this.user.mode_of_contact = "email";
            this.recentlyAdded(5);
            JAlert.success("User Saved.");
        } else {
            JAlert.error(resp.data.message.join("<br>"));
        }
    }, (error) => {
        JAlert.error("Sorry there was some unexpected error.");
    });
}

/**
 * A Validtaion method
 * 
 */

User.validateBeforeSubmit = function() {
    this.$validator.validateAll();
    if (!this.errors.any()) {
        // call save user api
        this.save_user(this.user);
    } else {
        JAlert.error('Validation Error.')
    }
}
/**
 * submitForm flag 
 * 
 */
User.submitForm = function() {
    this.formSubmitted = true
}
/**
 * dob_changed Event listner method, Called every time when user pickes date with date picker
 * @param  string date date string picked with date picker
 * 
 */
User.dob_changed = function(date) {
    this.user.dob = date;
}

/**
 * recentlyAdded Method to filter users recently saved. 
 * @param  int number recently added user limit
 * 
 */
User.recentlyAdded = function(number) {
    const limit = number || 5;
    if (this.recently_added_users.length > limit) {
        this.recently_added_users = this.recently_added_users.slice(Math.max(this.recently_added_users.length - limit, 1));
    }
}
/**
 * Extending Vue Class
 *
 */
new J.Vue({
    el: '#app',
    data: {
        // recently added users store
        recently_added_users: [], 
        // new user object schema
        user: {
            name: null,
            gender: 'male',
            email: null,
            phone: null,
            address: null,
            nationality: null,
            dob: null,
            education_background: null,
            mode_of_contact: 'email',
        },
        //form sumbitted flag
        formSubmitted: false
    },
    mounted: function() {
        // register init
        this.init();
    },
    methods: User // assigining User Modal to Vue Class methods
});