<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat page</title>
	<link rel="stylesheet" type="text/css" href="ChatPage_Design.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src='jquery-3.2.1.min.js'></script>
<style type="text/css">
	#userlist{
		background-color: grey;
	}
	#content{
	
	height: 400px;
	
	
}
.main{
	height: 300px;
	border-radius: 10px;
}
.chatlog{
	height: 70%; 
	
	background-size: cover;
	text-align: left;
	font-family: helvetica, serif;
	font-size: 14px;
}
#content{
	height:200px;
	
}

</style>
</head>
<body>
<?php echo $_SESSION['user'];  ?>
<!-- It is about bootstarp Container -->
<div class="container-fluid">
<div class="row">
	<div class="col-md-8">
		
		<div class="main">
			<div class="chatlog" >												<!-- main chat log showing area-->
		<div id="content" style="margin-left: 5%;">  <!--Display Messages-->
		 
		</div>													
	</div>
	
	<form id="send_message" method='post' action='send.php' class="typing-area"><!--sending message and button-->
        <br>
        <div class="txt">
	        <input type="text" name='message' id="messageToBeSent" class="textarea" maxlength = '500' placeholder=" Type here..." />  
	        
       </div>
        <div class="send-container">
			<br>
			<input type='submit' name='send' value='Send' class="send-button"  />
					
		</div>
		
    </form>
    
	

		</div>
	</div>
	<div class="col-md-4">
		<div id="userlist">

	</div>
	
	</div>
	</div>
</div>





	
<script src="jquery-3.2.1.min.js"></script>
<script src="ajax.js"></script> 
<script>
	$(document).ready(function(){
		$.ajax({
			type:'GET',
			url:'userlist.php',
			datatype:'html',
			success:function(html){
				$("#userlist").append(html);
			}

		})
		
	})
</script> 
</body>
</html>    