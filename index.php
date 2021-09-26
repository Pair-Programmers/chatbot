<?php
date_default_timezone_set('Asia/Kolkata');
include('admin/include/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>PHP Chatbot</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </head>
   <body style="background: rgb(11, 37, 54);">
		<nav class="navbar" style="height: 50px; background-color: rgb(11, 37, 54);">
				<a class="navbar-brand" href="#" style="color: white">
    <img src="image/download.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Welcome to University of South Asia
  </a>
		</nav>

		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="image/slider-3.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="image/slider-4.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="image/slider-6.jpg" alt="Third slide">
		    </div>
		  </div>
		</div>
		<h1 class="display-4" style="color: white; margin-left: 5%;">About Us</h1>
		<p style="color: white; margin-left: 5%;font-size: 20px";>Stylized implementation of HTML’s  element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help  to provide additional context on hover and to users of assistive technologies. <br>Stylized implementation of HTML’s  element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help  to provide additional context on hover and to users of assistive technologies.</p>
   	
      <div class="container" >
      
         <div class="row justify-content-md-center ">
            <div class="col-md-12 col-sm-12 col-lg-7" style="position: fixed; bottom: 0;right: 0;">
               <!--start code-->
               <div class="card" style="margin-bottom: 2%;"  >
                  <div class="card-body messages-box" >
					 <ul class="list-unstyled messages-list">
							
                    
                     </ul>
                  </div>
                  <div class="card-header">
                    <div class="input-group">
					   <input id="input-me" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." />
					   <span class="input-group-append">
					   <input type="button" class="btn btn-primary" value="Send" onclick="send_msg()">
					   </span>
					</div> 
                  </div>
               </div>
               <!--end code-->
            </div>
         </div>
      </div>
      <script type="text/javascript">
      	var preQuestion = "";
      	var flag1 = false;

		 function getCurrentTime(){
			var now = new Date();
			var hh = now.getHours();
			var min = now.getMinutes();
			var ampm = (hh>=12)?'PM':'AM';
			hh = hh%12;
			hh = hh?hh:12;
			hh = hh<10?'0'+hh:hh;
			min = min<10?'0'+min:min;
			var time = hh+":"+min+" "+ampm;
			return time;
		 }
		 function send_msg(){

			jQuery('.start_chat').hide();
			var txt=jQuery('#input-me').val();
			var html='<li class="messages-me clearfix"><span class="message-img"><img src="image/user_avatar.jpg" class="avatar-sm rounded-circle" style="height:73px; width:73px"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Me</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p" style="background:rgb(169,169,169)">'+txt+'</p></div></li>';
			jQuery('.messages-list').append(html);
			jQuery('#input-me').val('');
			var emailsArray = txt.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9._-]+)/gi);
			if (emailsArray != null && emailsArray.length && flag1) {
				//alert('Successfully Added');
				jQuery.ajax({
						url:'save_query.php',
						type:'post',
						data:'txt='+preQuestion+'/'+txt,
						success:function(result){
							var html='<li class="messages-you clearfix"><span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle" style="height:73px; width:73px"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Chatbot</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p" style="background:rgb(79, 147, 255)">'+result+'</p></div></li>';

							jQuery('.messages-list').append(html);
							jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);

							preQuestion = '';
							flag1 = false;
						}
					});
			}
			else{
				if(txt){
					jQuery.ajax({
						url:'get_bot_message.php',
						type:'post',
						data:'txt='+txt,
						success:function(result){
							var html='<li class="messages-you clearfix"><span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle" style="height:73px; width:73px"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Chatbot</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p" style="background:rgb(79, 147, 255)">'+result+'</p></div></li>';

							jQuery('.messages-list').append(html);
							jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
							if (result == "Sorry i can't give you answer send your email we will contact you soon !") {
								flag1 = true;
							}
							preQuestion = txt;
						}
					});
				}
			}
			
		 }
      </script>
   </body>
</html>