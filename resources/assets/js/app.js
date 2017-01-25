
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var _location = location.href;
if(_location.search('icuser') > 0){
	require('./app/icuser/icuser.js');
}else if(_location.search('manage') > 0){
	require('./app/icuser/manage.js');
}