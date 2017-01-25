var J = require('../jumper/lib.js');
import JAlert from '../jumper/alert';

J.Vue.component('date-picker', require('../../components/date_picker.vue'));
var User = {};

User.init = function() {
    const _users = $("#users").val();
    if (_users != '') {
        this.users = $.parseJSON(_users).data;
        console.log(typeof this.users);
    }
}

User.delete_user = function(e, _userIndex, _user) {
    e.preventDefault();
    this.$http.delete('/icusers/' + _userIndex).then((resp) => {
        if (resp.data.stat == 'ok') {
            JAlert.success("User Removed");
            delete(this.users[_userIndex]);
            this.users = Object.assign({},this.users);
        }
    }, (error) => {
        JAlert.success("Sorry there was some unexpected error.");
    });
}

new J.Vue({
    el: '#manage',
    data: {
        users: []
    },
    mounted: function() {
        this.init();
    },
    methods: User
});