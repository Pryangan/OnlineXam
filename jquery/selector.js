$(document).ready(function() {
    $('#status').keyup(function(){
		var len=$('#status').val().length;
		if(len<1){
			$('.first').text('');
			$('.first').removeClass('red');
			$('.first').removeClass('orange');
			$('.first').removeClass('green');	
		}
		else if(len<=4){
			$('.first').text('weak');
			$('.first').addClass('red');
			$('.first').removeClass('orange');
			$('.first').removeClass('green');
		}
		else if(len<=8){
			$('.first').text('good');
			$('.first').addClass('orange');
			$('.first').removeClass('red');
			$('.first').removeClass('green');
		}
		else{
			$('.first').text('strong');
			$('.first').addClass('green');
			$('.first').removeClass('orange');
			$('.first').removeClass('red');	
		}
	});
});