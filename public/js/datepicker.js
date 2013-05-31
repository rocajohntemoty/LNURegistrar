$(document).ready(function(e) {
	
    var CheckDate	=	$("#CheckDate").datepicker().on("changeDate",function(ev){
		CheckDate.hide();
	}).data('datepicker');
	
	$(".dateMonths").datepicker();
});