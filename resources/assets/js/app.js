
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
/**
 * set current url location
 * 
 */
var _location = location.href;
/**
 * Routes not implemented yet so just auto loading 
 * Vue moules as per required for respective panels
 */
if(_location.search('icuser') > 0){
	/**
	 * Loading icuse moudle 
	 */
	require('./app/icuser/icuser.js');
}else if(_location.search('manage') > 0){
	/**
	 * Loading icuse manage moudle 
	 */
	require('./app/icuser/manage.js');
}