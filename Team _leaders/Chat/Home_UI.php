<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page of Chat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src='jquery-3.2.1.min.js'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .chatbox{
    float:left;
    width: 650px;
    height: 548px;
    min-width: 390px;
    background-color: blue;
    margin:0px auto;
    border-radius: 10px;
  }
  .users{
    float: right;
    background-color: #666666;
    width:300px;
    height: 548px;
    margin:0px;
    padding-left: 0px;
    color: white;
    border-radius: 10px;
  }
  .over{
    background-color: grey;
    width:950px;
    height:550px;
    margin-right: 10px;
    margin-left: 300px;
    margin-top: 100px;

  }
  .chathead{
    font-family: system-ui;
    padding-top: 10px;
    padding-left: 10px;
    background-color: black;
    height: 60px;
  }
  .userhead{
    font-family: system-ui;
    padding-top: 10px;
    padding-left: 10px;
    background-color: black;
    height: 60px;
  }
  hr{
    border-color: white;
  }
  .ico{
    float: right;
    padding-top: 5px;
    padding-right: 5px;

  }
  .texth{
    float: left;
    font-size: 39px;
  }
  .chatlog{
    background-color: grey;
    padding-top:10px;
    padding-right: 10px;
    padding-left: 10px;
    height: 440px;
    width:100%;
    overflow-y: auto; 
  }
  .userlist{
    overflow-y: auto;
    padding-top: 10px;
    padding-left: 10px; 
  }
</style>
</head>
<body>
<div class="over">
    <div class="chatbox">
      <div class="chathead">
        <h3>Commity Name</h3>
      </div>
      <div class="chatlog">

      </div>
       <div class="message">
          <form id="send_message" method='post' action='send.php' class="typing-area">
              <input type="text" name='message' id="messageToBeSent" class="textarea" maxlength = '500' placeholder=" Type here..." autocomplete="off" />  
              <input type='submit' name='send' value='Send' class="send-button"  />
          </form>
       </div> 
    </div>
    <div class="users">
      <div class="userhead">
        <div class="texth">      
        <h3>Userlist</h3>
        </div>
        <div class="ico">
        <i class="fa fa-users" aria-hidden="true" style="font-size: 36px"></i>
        </div>
      </div>
      <div class="userlist">
      
      </div>
    </div>
</div> 

<script src="jquery-3.2.1.min.js"></script>
<script src="ajax.js"></script> 
 
</body>
</html>