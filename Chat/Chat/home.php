<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Chat page</title>
	<link rel="stylesheet" type="text/css" href="Chat_Page_Design.css" />
	
<script src='jquery-3.2.1.min.js'></script>

</head>
<body>
	<div class="main">
	
	<div class="chatlog" >												<!-- main chat log showing area-->
		<div id="content" style="margin-left: 5%;"><!--Display Messages-->
		 
		</div>													
	</div>
	<?php echo $_SESSION['user'];  ?>
	<form id="send_message" method='post' action='send.php' onsubmit="notifyMe()" class="typing-area"><!--sending message and button-->
        <br>
        <div class="txt"><!--Currently Sending Message-->
	        <input type="text" name='message' id="messageToBeSent" class="textarea" maxlength = '500' placeholder=" Type here..." />
	        
        </div>
        <div class="send-container">
			<br>
			<input type='submit' name='send' value='Send' class="send-button"  />
					
		</div>
		
    </form>
    <div id="userlist">

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