<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

//IMPORTANT!!
//Put in your email address below:
$to = 'jochoa@jcodesigns.com';


//User info (DO NOT EDIT!)
$name = stripslashes($_POST['name']); //sender's name
$email = stripslashes($_POST['email']); //sender's email
$website = stripslashes($_POST['website']); //sender's website

//The subject
$subject  = ""; //The default subject. Will appear by default in all messages. Change this if you want.
$subject .= stripslashes($_POST['subject']); // the subject


//The message you will receive in your mailbox
//Each parts are commented to help you understand what it does exaclty.
//YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg  = "From : $name \r\n";  //add sender's name to the message
$msg .= "e-Mail : $email \r\n";  //add sender's email to the message
$msg .= "Website : $website \r\n"; //add sender's website to the message
$msg .= "Subject : $subject \r\n\n"; //add subject to the message (optional! It will be displayed in the header anyway)
$msg .= "---Message--- \r\n".stripslashes($_POST['message'])."\r\n\n";  //the message itself

//Extras: User info (Optional!)
//Delete this part if you don't need it
//Display user information such as Ip address and browsers information...
$msg .= "---User information--- \r\n"; //Title
$msg .= "User IP : ".$_SERVER["REMOTE_ADDR"]."\r\n"; //Sender's IP
$msg .= "Browser info : ".$_SERVER["HTTP_USER_AGENT"]."\r\n"; //User agent
$msg .= "User come from : ".$_SERVER["HTTP_REFERER"]; //Referrer
// END Extras

?>

<head>
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/mootools.js"></script>

<!-- Formcheck2 / Moo.Floor.ch -->
<!-- http://moo.floor.ch/?p=18 -->
<script type="text/javascript" src="js/formcheck.js"></script>
<script type="text/javascript">
	window.addEvent('domready', function(){check = new FormCheck('third', {
		display : {
			fadeDuration : 1000,
			errorsLocation : 1,
			indicateErrors : 1,
			showErrors : 1
		}
	})});
</script>
<script type="text/javascript" src="js/niceforms.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
</style>
<title>Contact</title>
</head>
<body>
	<div id="wrapper">
    	<div id="brandingHolder">
        	<div id="logo">
            	<a href="index.html"><img src="myImages/logo.jpg" title="Julio Ochoa (Coachella Valley Web Design and Graphic Design)" border="0" /></a>
            </div>  
        </div>
    </div>
        <!-- *************Navigation************* -->
        
        <div id="blueNav">
        	<div id="nav">
             <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="about.html">About Me</a></li>
                    <li class="selected"><a href="contact.php">Contact</a></li>
             </ul>
         </div>
        </div>
        
     <div id="wrapper">
         <h1 class="talk">Talk to Me</h1>
         <p> Please feel free to get in touch with me, to ask any questions, to discuss your project requirements or to simply say "Hi!"</p>
         <div id="contact">
            <div class="contactleft">
                <?php
   if ($_SERVER['REQUEST_METHOD'] != 'POST'){
      $self = $_SERVER['PHP_SELF'];
?>

    <!-- Start HTML form -->
   	<form name="form" method="post" id="third" action="<?php echo $self;?>"  class="niceform">
        <!-- Name -->
		<label for="name"><strong><span class="blue">*</span> Name : </strong></label>
			<input id="name" name="name" type="text" class="validate['required','length[3,-1]','nodigit']" size="22" />

		<!-- Email -->
		<label for="email"><strong><span class="blue">*</span> Email : </strong></label>
			<input id="email" name="email" type="text" class="validate['required','length[5,-1]','email']" size="22" />

		<!-- Website -->
		<label for="site">Website : </label>
			<input id="website" name="website" type="text" class="validate['url']" size="22" />

		<!-- Subject -->
	    <label for="subject"><strong><span class="blue">*</span> Subject : </strong></label>
			<input id="subject" name="subject" type="text" class="validate['required']" size="22" />

		<!-- Message -->
		<label for="msg"><strong><span class="blue">*</span> Your message : </strong></label><br />
			<textarea id="message" name="message" type="text" class="validate['required']" rows="10" cols="22"></textarea>

		<!-- Spam Check -->
	    <label for="spamcheck"><span class="blue">*</span> <acronym  title="[ Spam prevention ]"><strong>Are you human?</acronym> : <span class="blue">2 + 3 = ???</span></strong></label>
			<input id="spamcheck" name="spamcheck" type="text" size="5" class="validate['required','number','spamcheck']" />

		<br /><br />
		<input type="submit" class="buttonSubmit" value="Send it!" />

	    <!-- Niceforms: mouse over effect -->
		<!-- Do not remove the line below -->
		<div id="stylesheetTest"></div>

	</form>


<?php
	} else {
        error_reporting(0);

      	if  (mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n"))

	  	//Message sent!
	  	//It the message that will be displayed when the user click the sumbit button
	  	//You can modify the text if you want
      	echo nl2br("
	   	<div class=\"MsgSent\">
			<h1>Congratulations!!</h1>
			<p>Thank you <b><?=$name;?></b>, your message is sent!<br /> I will get back to you as soon as possible.</p>
		</div>
	   ");

       	else

	    // Display error message if the message failed to send
        echo "
	   	<div class=\"MsgError\">
			<h1>Error!!</h1>
			<p>Sorry <b><?=$name;?></b>, your message failed to send. Try later!</p>
		</div>";
	}
?>

             </div>
             <div id="contactRight">
             	<h2 class="follow">Come On, Follow Me !</h2>
                         		<ul>
                                	<a href="http://www.twitter.com/julio8a" target="new" class="screenshot" rel="myImages/twitter.jpg">
                                    <li class="firstchild"><img src="myImages/twitter.png" alt="twitter.com" border="0" /><h4>twitter</h4></li></a>
                                    
                                    <a href="http://www.facebook.com/julio8a00" target="new" class="screenshot" rel="myImages/facebook.jpg">
                                    <li><img src="myImages/facebook.png" alt="Facebook.com" border="0" /><h4>Facebook</h4></li></a>
                                    
                                    <a href="http://www.myspace.com/acousticas" target="new" class="screenshot" rel="myImages/myspace.jpg">
                                    <li><img src="myImages/myspace.png" alt="Myspace.com" border="0" /><h4>Myspace</h4></li></a>
                                    
                                    <a href="http://www.linkedin.com/pub/julio-ochoa/10/b1b/88" target="new" class="screenshot" rel="myImages/linkedin.jpg">
                                    <li><img src="myImages/linkedin.png" alt="linedIn.com" border="0" /><h4>LinkedIn</h4></li></a>
                                    
                                    <a href="http://www.flickr.com/photos/jcodesigns" target="new" class="screenshot" rel="myImages/flickr.jpg">
                                    <li><img src="myImages/flickr.png" alt="flickr.com" border="0" /><h4>Flickr</h4></li></a>
                                    
                                    <a href="http://julio8a00.stumbleupon.com/public/" target="new" class="screenshot" rel="myImages/stumble.jpg">
                                    <li><img src="myImages/stumbleupon.png" alt="stumbleupon.com" border="0" /><h4>Stumble</h4></li></a>
                                    
                                </ul>
             </div>
         </div>
    </div>
     <div id="footer">
         <div id="copyright">
         2011 JCO Designs, Inc. All Rights Reserved
         </div>
     </div>	
         
         
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-8746780-1"); pageTracker._trackPageview();
</script> 
</body>
</html>



