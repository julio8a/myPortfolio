<?php

//IMPORTANT!!
//Put in your email address below:
$to = 'julio@julio8a.com';


//User info (DO NOT EDIT!)
$name = stripslashes($_POST['name']); //sender's name
$email = stripslashes($_POST['email']); //sender's email

//The subject
$subject  = ""; //The default subject. Will appear by default in all messages. Change this if you want.
$subject .= stripslashes($_POST['subject']); // the subject


//The message you will receive in your mailbox
//Each parts are commented to help you understand what it does exaclty.
//YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg  = "From : $name \r\n";  //add sender's name to the message
$msg .= "e-Mail : $email \r\n";  //add sender's email to the message
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

<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="TITLE" content="julio8a">
<meta name="DESCRIPTION" content="Julio Ochoa, Coachella valley Web Design , What is Web Design , Coachella, California, LA Web Design, Los Angeles, Web Design, Web Designer, Graphics Design, Coachella Web Design, user experience, user interface, experience design, strategy, marketing, advertising">
<meta name="KEYWORDS" content="what is web design julio8a , Julio Ochoa, Web Designer, Webservices, la web design, Graphic Design, Web Design, strategy, marketing, advertising, user experience, user interface.">
<meta name="OWNER" content="julio8a00@gmail.com">
<meta name="AUTHOR" content="Julio Ochoa">

<title>Julio Ochoa Web Portfolio</title>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="design/favicon.png">
<link rel="shortcut icon" href="http://julio8a.com/favicon.ico" type="image/x-icon">
</head>

<body>

<!-- ABOUT SECTION -->
<div id="about" class="debut">
	<div class="center">
		<div id="presentation">
	    <h3>About me</h3><a class="resume" target="_blank" href="downloads/jochoa_resume.pdf">Resume</a>
	    <p>This is my creative portfolio showcasing work in: User Experience, User Interface, Web Development, Branding, Identity, Advertising and Marketing.</p>

	    <p>I am a multidisciplined individual focused on composing user workflows, information architecture systems, application interface visual designs and agile software development. As a passionate leader, I unlock individuals’ potential and inspire innovation within the technology and software development industry. My philosophy of leadership is based on knowledge, growth, opportunities and learning. Using my holistic insight and innovative multidisciplinary collaboration principles, my promise is to strengthen and empower individuals and collectives to perform at their greatest potential. Moreover, energize, focus and align software development organizations, resulting in sustainable acceleration of processes and reduction in misallocated time.</p>
	    <p>Want to work on a project together? <a href="#" class="contact">Contact me</a></p>
    </div>
    <div id="services">
      <h3>Services</h3>
      <ul>
        <li>Experience Design & Strategy</li>
        <li>Brainstorm Workshop Faciliatation</li>
        <li>Workflow Diagramming</li>
        <li>Information Architecture </li>
        <li>Wireframing & Prototypes</li>
        <li>Graphic / Interface Design</li>
        <li>Web Development</li>
        <li>Usability Research</li>
        <li>Branding & Marketing</li>
        <li>Brand Strategy</li>
        <li>Social Media Strategy</li>
      </ul>
    </div>
    <div id="awards">
      <h3>Experience </h3>
			<small>Short List</small>
      <p>2016 to Present – Esri<br />
        <span class="awardname">Senior Product Designer</span>
      </p>
      <p>2013 to 2016 – Esri<br />
        <span class="awardname">UI / UX Designer</span>
      </p>
      <p>2015 to 2015 – University of Redlands<br />
      	<span class="awardname">Adjunct Instructor</span>
			</p>
      <p>2011 to 2013 – FindLegalForms Inc.<br />
      	<span class="awardname">UI / UX & Front-End Developer</span>
			</p>
      <p>2009 to 2015 – JCO Designs<br />
      	<span class="awardname">Owner / Information Architect</span>
			</p>
    </div>
    <div class="clear"></div>
  </div>
</div>

<!-- CONTACT SECTION -->
<div id="contact" class="debut">
	<div class="center">
		<div id="contactleft">
      <h3>Contact me</h3>
			<?php
				if ($_SERVER['REQUEST_METHOD'] != 'POST'){
					$self = $_SERVER['PHP_SELF'];
			?>

			<!-- Start HTML form -->
			<form name="form" method="post" id="third" action="<?php echo $self;?>"  class="niceform">
				<!-- Name -->
				<legend>Name<legend>
				<input id="name" name="name" type="text" class="validate['required','length[3,-1]','nodigit']" size="30" />

				<!-- Email -->
				<legend>Email</legend>
				<input id="email" name="email" type="text" class="validate['required','length[5,-1]','email']" size="30" />

				<!-- Subject -->
				<legend>Subject</legend>
				<input id="subject" name="subject" type="text" class="validate['required']" size="30" />
		</div>
		<div id="contactright">
			<!-- Message -->
			<legend>Message</legend>
			<textarea id="message" name="message" type="text" class="validate['required']" rows="10" cols="30"></textarea>
			<br />
			<input type="submit" class="envoyer" value="Send the message" />

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
					<h1>Successfully Sent.</h1>
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
    <div class="clear"></div>
  </div>
</div>

<div id="header">
	<nav>
    <div class="wrapper">
      <div id="logo">
        <!-- <img src="design/logo.png" width="100" height="133" /> -->
        <h1>Julio Ochoa</h1>
        <img src="images/logo.png" />
      </div>
      <ul>
          <li><a href="#" class="work current">Work</a></li>
          <li><a href="#" class="about">About</a></li>
          <li><a href="#" class="contact">Contact</a></li>
          <li><a href="http://blog.julio8a.com">Blog</a></li>
      </ul>
    </div>
  </nav>
</div>

<div id="intro-container">
    <div class="wrapper">
        <div id="intro">
            <span class="name">Julio Ochoa</span> <br />
            <span class="position-title">UX, UI & Front-End Developer</span>
        </div>
    </div>
</div>

<div id="blocks-container">
    <div class="block block1">
    	<div class="content">
        	<div class="circle"></div>
            <div class="project-title">
                <h2>Zip Tapestry</h2>
                <span class="role">Web & Mobile App</span>
            </div>
            <div class="img-container">
                <img src="projects/zip-tapestry/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

    <div class="block block2">
    	<div class="content">
        	<div class="circle"></div>
            <div class="project-title">
                <h2>Urban Observatory</h2>
                <span class="role">Website</span>
            </div>
            <div class="img-container">
                <img src="projects/urb-ob-site/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

    <div class="block block3">
    	<div class="content">
        	<div class="circle"></div>
            <div class="project-title">
                <h2>Urban Observatory</h2>
                <span class="role">Interactive App</span>
            </div>
            <div class="img-container">
                <img src="projects/urb-ob-ui/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

    <div class="block block4">
    	<div class="content">
        	<div class="circle"></div>
            <div class="project-title">
                <h2>Florida Environmental Public Health App</h2>
                <span class="role">Web SaaS App</span>
            </div>
            <div class="img-container">
                <img src="projects/public-health/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

    <div class="block block5">
    	<div class="content">
        	<div class="circle"></div>
            <div class="project-title">
                <h2>Inca Train – Office App</h2>
                <span class="role">Native App</span>
            </div>
            <div class="img-container">
                <img src="projects/inca/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

     <div class="block block6">
    	<div class="content">
        	<div class="circle"></div>
            <div class="project-title">
                <h2>Save Me App</h2>
                <span class="role">Native App</span>
            </div>
            <div class="img-container">
                <img src="projects/save-me/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

     <div class="block block7">
        <div class="content">
            <div class="circle"></div>
            <div class="project-title">
                <h2>Esr Industries Template</h2>
                <span class="role">Web and Mobile Site</span>
            </div>
            <div class="img-container">
                <img src="projects/industries/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

     <div class="block block8">
        <div class="content">
            <div class="circle"></div>
            <div class="project-title">
                <h2>Workforce for ArcGIS</h2>
                <span class="role">Web SaaS App</span>
            </div>
            <div class="img-container">
                <img src="projects/workforce/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

     <div class="block block9">
        <div class="content">
            <div class="circle"></div>
            <div class="project-title">
                <h2>Operations Dashboard for ArcGIS</h2>
                <span class="role">Web SaaS App</span>
            </div>
            <div class="img-container">
                <img src="projects/dashboard/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

     <div class="block block10">
        <div class="content">
            <div class="circle"></div>
            <div class="project-title">
                <h2>Web App Builder Concept</h2>
                <span class="role">Web SaaS App</span>
            </div>
            <div class="img-container">
                <img src="projects/web-app-builder/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

     <div class="block block11">
        <div class="content">
            <div class="circle"></div>
            <div class="project-title">
                <h2>My Esri</h2>
                <span class="role">Website</span>
            </div>
            <div class="img-container">
                <img src="projects/my-esri/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>

     <div class="block block12">
        <div class="content">
            <div class="circle"></div>
            <div class="project-title">
                <h2>City Engine</h2>
                <span class="role">Landing Pages</span>
            </div>
            <div class="img-container">
                <img src="projects/city-engine/images/thumb.jpg" />
            </div>
        </div>
        <div class="fond"></div>
    </div>




<footer>
    <div class="center">
        <a href="https://twitter.com/julio8a" target="_blank">
            <div class="caseB">
                <span>Twitter</span>
                <div class="fond twitter"></div>
            </div>
        </a>            
        <a href="http://www.facebook.com/julio8a00" target="_blank">
            <div class="caseB">
                <span>Facebook</span>
                <div class="fond behance"></div>
            </div>
        </a>            
        <a href="http://www.linkedin.com/in/julioochoa" target="_blank">
            <div class="caseB">
                <span>LinkedIn</span>
                <div class="fond linkedin"></div>
            </div>
        </a>            
        <a href="http://dribbble.com/julio8a00" target="_blank">
            <div class="caseB">
                <span>Dribbble</span>
                <div class="fond cpx"></div>
            </div>
        </a>            
        <a href="downloads/jochoa_resume.pdf" target="_blank">
            <div class="caseB">
                <span>Resume</span>
                <div class="fond cv"></div>
            </div>
        </a>            
        <a href="http://blog.julio8a.com" target="_blank">
            <div class="caseB">
                <span>Blog</span>
                <div class="fond blog"></div>
            </div>
        </a>            
        <div class="ligne"></div>
        <div class="copyright">© 2018 All rights reserved.</div>
    </div>
</footer>


<div id="fond_projet"></div>

<div id="projet">
	<div class="banner"></div>
    <div class="center">
        <div class="affiche"></div>
	</div>

</div>

<div id="project-menu">
	<div class="center">
    <div class="back">
      <img src="images/grid.png" width="16" height="70" />
      <div>Back</div>
    </div>
    <div class="icon icon1 current">
      <div class="shape" alt="Zip Tapestry App"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon2">
      <div class="shape" alt="Urban Observatory Website"></div>
      <div class="fond"> </div>
    </div>
    <div class="icon icon3">
      <div class="shape" alt="Urban Observatory App"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon4">
      <div class="shape" alt="Florida Public Health Tracking App" ></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon5">
      <div class="shape" alt="Inca Trail App"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon6">
      <div class="shape" alt="Save Me"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon7">
      <div class="shape" alt="Esri.com Industry Template"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon8">
      <div class="shape" alt="Workforce for ArcGIS"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon9">
      <div class="shape" alt="Operations Dashboard for ArcGIS"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon10">
      <div class="shape" alt="Web App Builder Concept"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon11">
      <div class="shape" alt="My Esri"></div>
      <div class="fond"></div>
    </div>
    <div class="icon icon12">
      <div class="shape" alt="City Engine"></div>
      <div class="fond"></div>
    </div>

    <div class="clear"></div>
  </div>
</div>


<script>
	var rubOpen = false;
	var contactOpen = false;
	var aboutOpen = false;
</script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/main2.js"></script>
<script src="js/jquery.animate-colors-min.js"></script>
<script src="js/preload.js"></script>

<script type="text/javascript">// <![CDATA[
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
// ]]></script>
<script type="text/javascript">// <![CDATA[
var pageTracker = _gat._getTracker("UA-8746780-1"); pageTracker._trackPageview();
// ]]></script>

</body>
</html>
