import toastr from 'toastr';
/**
 * Title for the notification widget
 * @type String
 */
const alertTitle = "Pine Tree";

/**
 * toaster plugin configuration
 * @type {Object}
 */
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

/**
 * Custom wrapper for Toaster functions
 * @type Object
 */
const JAlert = {
    /**
     * wrapper for toaster.info method
     * @param  string _msg Message to shwo
     * 
     */
		info(_msg){
			toastr.info(_msg,alertTitle);
		}
    /**
     * wrapper for toaster.warning method
     * @param  string _msg Message to shwo
     * 
     */
		,warning(_msg){
			 toastr.warning(_msg,alertTitle);
		}
    /**
     * wrapper for toaster.success method
     * @param  string _msg Message to shwo
     * 
     */
		,success(_msg){
			toastr.success(_msg, alertTitle);
		}
    /**
     * wrapper for toaster.error method
     * @param  string _msg Message to shwo
     * 
     */
		,error(_msg){
			toastr.error(_msg,alertTitle);
		}
	}

export default JAlert;