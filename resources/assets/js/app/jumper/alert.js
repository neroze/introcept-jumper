import toastr from 'toastr';
const alertTitle = "Pine Tree";
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

const JAlert = {
		info(_msg){
			toastr.info(_msg,alertTitle);
		}
		,warning(_msg){
			 toastr.warning(_msg,alertTitle);
		}
		,success(_msg){
			toastr.success(_msg, alertTitle);
		}
		,error(_msg){
			toastr.error(_msg,alertTitle);
		}
	}

export default JAlert;