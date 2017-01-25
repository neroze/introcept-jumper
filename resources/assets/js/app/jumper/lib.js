import Vue from 'vue'
import vueResource from 'vue-resource'
import VeeValidate from 'vee-validate';
Vue.use(vueResource);
Vue.use(VeeValidate);

var Jumper = {};
Jumper.log = function(_msg ){
	console.log(_msg);
}

Jumper.reset = function(_obj){
  _.filter(_obj, function(val, key){
     _obj[key] = null ;
  });
  return _obj;
}


Jumper.Vue  = Vue;
Jumper.Vue.filter('dd/mm/yyyy', function (_date) {
    return  moment(_date, 'YYYY-M-D hh:mm:ss').format('DD/MM/YYYY');
});

module.exports = Jumper;