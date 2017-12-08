//Find out online Users
$(document).ready(function(e){
		$.ajaxSetup({cache:false});
		setInterval(function(){
			$('.user_list').load("userlist.php");
		}, 1000);
});

//Loading message
$(document).ready(function(e){
	$.ajaxSetup({cache:false});
	setInterval(function(){
		$('.chatlog').load('Display_Messages.php');
	}, 1000); //delay has been set to 1000 miliseconds
});
