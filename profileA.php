<?php
  require 'header.php';
  require 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>
	<style>
	#featured-wrap {
    width: 940px;
    margin: 0 auto;
    padding: 30px 0;
    background:  no-repeat center bottom;
}
#featured {
    position: relative;
    width: 918px;
    margin: 0 auto;
    background: #e4ede1 ;
    border: 1px solid #e4ede1;
}
.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}
h2 {
    font-size: 32px;
    line-height: 38px;
    margin-top: 5px;
    margin-bottom: 5px;
}
#featured-wrap .text-block h2 {
    margin-right: 20px;
    margin-bottom: 0;
}
#featured-wrap #featured-ribbon {
	position: absolute;
	/*background: url(../images/ribbon.png) no-repeat;*/
	width: 110px;
	height: 110px;
	top: -7px;
	right: -7px;
	z-index: 99999;
}
#featured-wrap .image-block {
    margin-top: 30px;
    margin-bottom: 30px;
    margin-left: 30px;
    float: left;
    width: 339px;
}
#featured-wrap .image-block img {
    padding: 0;
    border: none;
}
#featured-wrap .text-block h2 a {
    color: #E2DBD8;
}
#featured-wrap .text-block {
    margin-top: 20px;
    margin-bottom: 30px;
    margin-right: 30px;
    float: right;
    width: 493px;
}
#featured-wrap .text-block .post-meta a {
    color: #549207;
}
font.bio{
	color: #DA6503 ;
}
p.profile{
		margin: 0px 0px 0px 200px;
}
font.f_profile{
	color:white;
	font-size: 30px;
}
h2 {
    font-size: 32px;
    line-height: 38px;
    margin-top: 5px;
    margin-bottom: 5px;
}
p {
    margin-bottom: 24px;
}
#main .col .top p {
	font-size: 11px;
	color: #b5b5b5;
    margin: 5px 0;
}
#featured-wrap .text-block .post-meta,
.post .post-info {
    font-family: 'Lucida Sans Unicode', Arial, Helvetica, Sans-Serif;
    font-size: 12px;
    line-height: 1.3em;
    margin-bottom: 16px;
}
body {
	font: 15px/24px Georgia, Serif;
	color: #988175;
   
}
form input.button {
   	height: 38px;
    float: none;
    cursor: pointer;
}
.button,
a:link.more,
a:visited.more,
form input.button,
.commentlist li .comment-text .reply a,
.navigation a:link,
.navigation a:visited {
   font-family: Verdana, 'Lucida Grande', 'Lucida Sans Unicode', Sans-serif;
   float: left;
	margin-right: 8px;
	padding: 6px 10px;
	border: 1px solid #9c4003;
	background: #DA6503 url(../images/button-bg.png);
	color: #130d0a;
   font-size: 11px;
   font-weight: bold;

   text-shadow: 0 1px 0 rgba(250,250,250,0.4);

   box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #e4ede1;
   -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #e4ede1;
   -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #e4ede1;
}
.button:hover,
a:hover.more,
.commentlist li .comment-text .reply a:hover,
.navigation a:hover {
   background: #e4ede1 url(../images/button-bg-hover.png);
   border: 1px solid #366004;

   box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #9DC13E;
   -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #9DC13E;
   -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #9DC13E;
}
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: #e4ede1;
}
.modal-content {
    position: relative;
    background-color: #e4ede1;
    margin: auto;
    padding: 0;
    border-top: 8px solid #FFC107;    width: 60%;
    box-shadow: 0px 0px 25px #636363;
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
.close {
    color: white;
    background: #e4ede1;
    border: 2px solid rgba(255, 152, 0, 0.49);
    border-radius: 3px;
    padding: 5px 30px 5px 30px;
    float: right;
    font-family: sans-serif;
    cursor: pointer;
    box-shadow: 2px 2px 20px #fff;
    transition: box-shadow 0.3s;
}
.close:hover,
.close:focus {
    box-shadow: 2px 2px 20px #9e9e9e;
  
}
.modal-header {
    padding: 2px 16px;
    color: #616161;
    margin-right: 5px;
    margin-left: 5px;
    border-bottom: 1px solid #a7a7a7;
}
.modal-body {padding: 20px; color :#616161;}
.modal-footer {
    padding: 2px 16px;
    color: #616161;
    margin-right: 5px;
    margin-left: 5px;
    border-top: 1px solid #a7a7a7;
}

	</style>

   <!-- <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    [if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body id="top">




<!-- featured
============================================================================== -->
 

<div id="featured-wrap"><article id="featured" class="clearfix">

    <div id="featured-ribbon"></div>

    <div class="image-block">
        <a title="" href="#"><img width="335" height="240" alt="featured" src="images/img-featured.jpg" /></a>
    </div>

    <div class="text-block">
      

		<p> 
		<font class="bio">User name:</font>
		
<?php		
		 $sql = "SELECT username FROM users WHERE idUsers={$_SESSION['id']};";
	   if($r=mysqli_query($conn,$sql)){
	  while($row=mysqli_fetch_array($r)){
		print"{$row['username']}";
	     }
	   }
        
	?>	
	
	</p>
        <p> <font class="bio">Bio:</font> 
<?php		
		 $sql = "SELECT bio FROM users WHERE idUsers={$_SESSION['id']};";
	   if($r=mysqli_query($conn,$sql)){
	  while($row=mysqli_fetch_array($r)){
		print"{$row['bio']}";
	     }
	   }
        
	?>	
        </p>
		
        <p> <font class="bio">Date of birth:</font> 
<?php		
		 $sql = "SELECT dob FROM users WHERE idUsers={$_SESSION['id']};";
	   if($r=mysqli_query($conn,$sql)){
	  while($row=mysqli_fetch_array($r)){
		print"{$row['dob']}";
	     }
	   }
        
	?>	
        </p>
        
		<p> <font class="bio">Email:</font> 
<?php		
		 $sql = "SELECT emailUsers FROM users WHERE idUsers={$_SESSION['id']};";
	   if($r=mysqli_query($conn,$sql)){
	  while($row=mysqli_fetch_array($r)){
		print"{$row['emailUsers']}";
	     }
	   }
        
	?>	
        </p>
		<a  href="edit.php">Edit</a>

         <!--p><button id="myBtn" name="edit" style="padding: 10px;">Edit</button></p>-->

    </div>

</article>
</div>

<!-- Trigger/Open The Modal -->

<!-- The Modal 
<div id="myModal" class="modal">
  <!-- Modal content 
  <div class="modal-content">
    <div class="modal-header">
      <h2>Edit Your Information</h2>
    </div>
    <div class="modal-body">
    <form action="includes/edit.inc.php" method="post"> 
    User Name:<input type="text" name="name" size="20" />
	<br>
    Bio:<input type="text" name="bio" size="80"/>
	<br>
    Date of Birth:<input type="text" name="dob" size="20" />
    Email:<input type="tel" name="email" size="20" />
 </form>
    </div>
    <div class="modal-footer">
      <h3> <center><input type="submit" name="edit-submit" value="Save"/></center></h3>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> -->

<?php
  require "footer.php";
?>

<!-- scripts
============================================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.6.1.min.js"><\/script>')</script>

<script src="js/scrollToTop.js"></script>

</body>
</html>