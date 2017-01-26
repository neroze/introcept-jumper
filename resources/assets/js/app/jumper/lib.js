import Vue from 'vue'
import vueResource from 'vue-resource'
import VeeValidate from 'vee-validate';
Vue.use(vueResource);
Vue.use(VeeValidate);
/**
 *  JS module (Jumper core Object )]
 * @type Object
 */
var Jumper = {};
/**
 * log wrapper to window.console.log
 * @param  string _msg String to log
 * @return void
 */
Jumper.log = function(_msg ){
	console.log(_msg);
}
/**
 *  Resets Object value preserving key name
 * @param  Object _obj object to be reset
 * @return Object _obj cleaned object
 */
Jumper.reset = function(_obj){
	// processing object 
  _.filter(_obj, function(val, key){
     _obj[key] = null ;
  });
  return _obj;
}

//assign Vue to Jumper.Vue
Jumper.Vue  = Vue;
/**
 * Vue filter to parse formate date structure
 * @param  string _date date string in 'YYYY-M-D hh:mm:ss'
 * @return string formated date to 'DD/MM/YYYY'
 */
Jumper.Vue.filter('dd/mm/yyyy', function (_date) {
    return  moment(_date, 'YYYY-M-D hh:mm:ss').format('DD/MM/YYYY');
});

export default Jumper;