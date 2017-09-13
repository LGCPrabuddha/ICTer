//Find out online Users
$(document).ready(function(e){
		$.ajaxSetup({cache:false});
		setInterval(function(){
			$('#user_list').load("user_list.php");
		}, 1000);
});

//Loading message
$(document).ready(function(e){
	$.ajaxSetup({cache:false});
	setInterval(function(){
		$('#content').load('Display_Messages.php');
	}, 1000); //delay has been set to 1000 miliseconds
});


//Dispalying notification
function notify(){	
		if(!window.Notification){
			alert("Sorry! Your Web Browser does not support Web Notifications API.");
		}else{
			if(Notification.permission !== "granted"){
				Notification.requestPermission(function(permission){
					if(permission === "denied"){
						return alert("Permission Request Denied!");
					}
				});
			}
			
			var title = document.getElementById("myUsername").value;
			var options = {
				body:  document.getElementById("messageToBeSent").value,
				
				//sound: "notifications/pop.mp3"
			};
			
			var n = new Notification(title, options);
			//setTimeout(n.close.bind(n), 4000); 
		}
}

//validating sending notifications	
function notifyMe(){
	if(document.getElementById("messageToBeSent").value != ""){
		notify();
	}										
}