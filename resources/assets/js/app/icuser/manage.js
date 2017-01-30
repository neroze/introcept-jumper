import J from '../jumper/core.js';
import JAlert from '../jumper/alert';
/**
 * Importing date-picker component
 */
J.Vue.component('date-picker', require('../../components/date_picker.vue'));
/**
 * Defining User Module Object
 * @type Object
 */
var User = {};
/**
 * Method to register inital data process or any event
 * 
 */
User.init = function() {
        const _users = $("#users").val();
        if (_users !== '') {
            this.users = $.parseJSON(_users).data;
            console.log(typeof this.users);
        }
    }
    /**
     * Delete User API 
     * @param  Event e  Native Click Event Object
     * @param  Int _userIndex row id of user ( row index from CSV eg: 1 line == 0 2 line ==1 )
     */
User.delete_user = function(e, _userIndex) {
    e.preventDefault();
    this.$http.delete('/icusers/' + _userIndex).then((resp) => {
        if (resp.data.stat === 'ok') {
            JAlert.success("User Removed");
            delete(this.users[_userIndex]);
            this.users = Object.assign({}, this.users);
        }
    }, (error) => {
        JAlert.success("Sorry there was some unexpected error.");
    });
}

User.view_details = function(e,_user) {
    e.preventDefault();
    this.user.name = _user[""];
    this.user.gender = _user["1"];
    this.user.email = _user["2"];
    this.user.phone = _user["3"];
    this.user.address = _user["4"];
    this.user.nationality = _user["5"];
    this.user.dob = _user["6"];
    this.user.education_background = _user["7"];
    this.user.mode_of_contact = _user["8"];
    $("#viewICUser").modal("show");
}
    /**
     * creating new Vue Class for manage IC users manage panel
     */
new J.Vue({
    // DOM Element to mount
    el: '#manage',
    data: {
        // initial users empty store
        users: [],
        user: {
            name: null,
            gender: null,
            email: null,
            phone: null,
            address: null,
            nationality: null,
            dob: null,
            education_background: null,
            mode_of_contact: null,
        }
    },
    mounted: function() {
        // call init API
        this.init();
    },
    methods: User // assign User Object to mothods
});