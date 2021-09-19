
<?php
  require "header.php";
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <title>blooming</title>
<style>

/* Button */
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

   box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #eb961a;
   -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #eb961a;
   -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #eb961a;
}
.button:hover,
a:hover.more,
.commentlist li .comment-text .reply a:hover,
.navigation a:hover {
   background: #4EA41F url(../images/button-bg-hover.png);
   border: 1px solid #366004;

   box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #9DC13E;
   -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #9DC13E;
   -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3), inset 0 1px 0 #9DC13E;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}


/* =============================================================================
    G E N E R A L
================================================================================ */


/* Links */
a:link, a:visited {
	text-decoration: none;
	color: #c67114;
    outline: 0;
}
a:hover, a:focus, a:active {
    color: #fff;
}

/* Lists */
ul, ol {
	margin: 0 0 24px 0;
	padding: 0 20px;
}
ul { list-style: disc; }
ol { list-style: decimal; }

dt {
    font-weight: bold;
    color: #549207;
}
dd {
    padding-left: 20px;
}
dl { margin: 0 0 24px 0; }



/* Table */
table {
	border-collapse: collapse;
	margin: 12px 0 24px 0;
}
tr { background: #130D0A; }
th, td {
	text-align: left;
	border-width: 1px;
  	border-style: solid;
}
th {
  	padding: .8em 1em;
	background: #45561B;
  	border-color: #647C28 #586A22 #43511A #5A6F23;
	color: #fff;
    font-family: Arial, Helvetica, Sans-serif;
    font-size: 16px;
	font-weight: bold;
}
td {
	border-color: #271D14;
	padding: .7em 1em;
}





/* =============================================================================
    S T R U C T U R E
================================================================================ */

#featured-wrap {
    width: 940px;
    margin: 0 auto;
    padding: 30px 0;
    background:  no-repeat center bottom;/* الخلفية اللي تحت اللي حذفناها*/
}
#content-wrap, #content-wrap-home {
	width: 940px;
	margin: 0 auto;
    padding: 15px 0 35px 0;
   <!--  background: url(../images/content-div.png) no-repeat center bottom;-->
   
   overflow: hidden;
}
#bg{
	background-color: #E8F0EA;
}
#main {
	
   	width: 598px;
	float: left;
    margin-top: 15px;
	margin-left: 10px;
}
#sidebar {
    float: right;
	width: 276px;
    margin-top: 25px;
	margin-right: 10px;
}
#content-wrap-home #main {
    margin-top: 0;
}
#content-wrap-home #sidebar {
    margin-top: 5px;
}
#extra-wrap {
	clear: both;
	padding: 30px 0 10px 0;
    background: transparent url(../images/extra-bg.png) repeat-x;
    position: relative;
    top: -2px;
}


/* =============================================================================
    T Y P O G R A P H Y
================================================================================ */



/* Paragraph */
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
#extra p {
    font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Sans-serif;
}
#extra strong, #extra em, #extra b, #extra i {
    font-family:  'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, sans-serif;
}

/* Headers */
h1, h2, h3, h4 {
	font: bold 1em/1.5em Arial, Helvetica, Sans-Serif;
   	margin-bottom: 24px;
    color: #E2DBD8;
}
h1 {
    font-size: 38px;
    line-height: 42px;
    margin-top: 2px;
    margin-bottom: 4px;
    letter-spacing: -2px;
}
/* ----------------------------------------------------------------------------- */
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
/* ----------------------------------------------------------------------------- */
h3 {
    font-size: 22px;
    line-height: 24px;
    letter-spacing: 0.2px;
    margin-top: 12px;
    margin-bottom: 12px;
}
#extra h3 {
    font: bold 18px Arial, Helvetica, Sans-Serif;
    margin-bottom: 15px;
	color: #C8BAB5;
}
/* ----------------------------------------------------------------------------- */
h4 {
    font-size: 18px;
}
#main .col .top h4 {
	line-height: 1.3em;
    margin-bottom: 0;
}
/* ----------------------------------------------------------------------------- */

blockquote {
    margin: 12px 0;
  	padding: 20px 30px 0 45px;
  	background: url(../images/quote.png) no-repeat 0 22px;
  	font-size: 18px;
  	line-height: 28px;
  	font-style: italic;
  	font-family: Georgia, 'Times New Roman', Times, Serif;
    overflow: hidden;
}
blockquote .author {
    text-transform: uppercase;
    font-style: normal;
    letter-spacing: 1.5px;
    text-align: right;
    font-size: 12px;
}
code {
    font-family: Consolas, 'Lucida Console', Monaco, Monospace;
    font-size: 14px;
    line-height: 1.5em;
}
pre {
    white-space: pre;
    white-space: pre-wrap;
    word-wrap: break-word;

    margin: 0 0 24px 0;
  	padding: 0 25px;
  	display: block;
	background: #130D0A;
    border: 1px solid #261a14;
    clear: both;
}
abbr[title], dfn[title] {
    border-bottom: 1px dotted;
    cursor: help;
}
mark {
    background-color: #c67114;
    text-shadow: none;
    color: #110C09;
}
strong, b {
    font-weight: bold;
}

/* =============================================================================
    F E A T U R E D
================================================================================ */

#featured {
    position: relative;
    width: 918px;
    margin: 0 auto;
    background: #57735D ;
    border: 1px solid #6F892C;
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


/* =============================================================================
    C O N T E N T
================================================================================ */

#main .col {
    width: 276px;
    float: left;
    margin-top: 10px;
    margin-bottom: 25px;
}
#main .col img {
	margin: 0 0 20px 0;
	padding: 14px;
    background: #130D0A;
    display: block;
}
#main h2 a {
    color: #E2DBD8;
}
#main .col .top {
	margin-bottom: 10px;
	padding-bottom: 2px;
	border-bottom: 1px solid #29201c;
}
#main .col .top h4 a {
	color: #6f892c;
}
#main .col .top p a:link,
#main .col .top p a:visited {
	color: #b5b5b5;
}
#main .col .top p .comment {
	margin-left: 5px;
	padding: 0 0 5px 20px;
	background: url(../images/comment.png) no-repeat 0 2px;
}
#main .col .top p .datetime {
	padding: 0 0 5px 20px;
	background: url(../images/clock.png) no-repeat 0 0;
}
#main .col .content {
    margin: 0 5px
}
#main .even { margin-left: 45px; }



/* =============================================================================
    S I D E B A R
================================================================================ */

/* Sidemenu */
#sidebar .sidemenu ul {
	margin: 20px 0 30px 0;
    padding: 0;
	border-top: 1px solid #231C18;
	text-align: left;
}
#sidebar .sidemenu ul li {
	list-style: none;
   font-family: 'Lucida Grande', 'Lucida Sans', 'Lucida Sans Unicode', Verdana, Sans-Serif;
	margin: 0;
   padding: 9px 5px 9px 19px;
	border-bottom: 1px solid #231C18;
	font-size: 12px;
	line-height: 20px;
	text-transform: uppercase;
	background: url(../images/bullet.png) no-repeat 0 14px;
}
#sidebar .sidemenu ul li a:link,
#sidebar .sidemenu ul li a:visited {
	padding-left: 0;
	font-weight: bold;
	color: #E2DBD8;
}
#sidebar .sidemenu ul li span {
	display: block;
	color: #9a8377;
	font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Sans-Serif;
   font-weight: normal;
	text-transform: none;
}
#sidebar .sidemenu ul li a:hover { color: #fff;	border: none; }
#sidebar .sidemenu ul ul { margin: 0 0 0 5px; padding: 0; border: none; }
#sidebar .sidemenu ul ul li { border: none; }

/* Photostream */
#sidebar ul.photostream {
   list-style: none;
   margin: 20px 0 25px 0;
   padding: 0;
}
#sidebar ul.photostream li {
    float: left;
    margin: 0 12px 6px 0;
    padding: 0;
}
#sidebar ul.photostream li img {
    background-color: #120c09;
    border: 1px solid #261a14;
    padding: 12px;
}

/* Ads */
#sidebar .ads {
   margin: 25px 0 25px 0;
}
#sidebar .ads h3 {
   margin-bottom: 15px;
}
#sidebar .ads .button {
   margin-top: 12px;
   float: none;
   display: block;
   color: #130d0a;
   width: 100px;
   text-align: center;
}
#sidebar .ads strong {
   color: #fff;
}



/* =============================================================================
    P O S T
================================================================================ */

.post {
	margin-bottom: 15px;
	padding-bottom: 15px;
}
.post h2 a {
    color: #E2DBD8;
}
.post .image-section {
	clear: both;
	display: block;
	margin: 20px 0 15px 0;
	padding: 0;
}
.post .image-section img {
   	padding: 14px;
}
.post .postmeta {
	padding: 8px 15px; margin: 20px 10px 15px 0;
	background: #130D0A;
    border: 1px solid #261a14;
}
.post .postmeta a.comments { margin: 0 10px 0 5px;	}
.post .postmeta a.readmore { margin: 0 10px 0 5px;	}
.post .postmeta .date { margin: 0 10px 0 5px;	}

.post .post-info a {
    color: #549207;
}
.post .tags {
	padding: 8px 15px; margin: 20px 12px 15px 0;
	border-top: 1px solid #231C18;
	border-bottom: 1px solid #231C18;
}
.post .tags span { color: #6f892c; }

/* Comments List */
ol.commentlist {
	margin: 15px 10px 35px 0;
	padding: 0;
	background-color: #e4ede1;
	border-style: solid;
	border-color: #261a14;
	border-width: 1px 1px 0 1px;
}
.commentlist li {
	list-style: none;
	margin: 0;
	padding: 15px 0 0 0;
	border-bottom: 1px solid #261a14;
}
.commentlist li .comment-info {
	width: 100%;
	margin: 0; padding: 0;
	overflow: hidden;
}
.commentlist li .comment-info img {
	float: right;
	margin: 5px 25px 0 0;
}
.commentlist li .comment-info cite {
	display: block;
	margin: 0; padding: 5px 65px 5px 25px;
	font-style: normal;
}
.commentlist li .comment-info cite .comment-data {
	font-size: .8em;
	font-weight: normal;
}
.commentlist li .comment-text {
	clear: both;
	margin: 0; padding: 0 20px 25px 25px;
}
.commentlist li .comment-text p {
	margin:  10px 0 20px 0;
	padding: 0;
}
.commentlist li .comment-text .reply a {
    float: none;
}
.commentlist li ul.children { margin:0; padding: 0; }
.commentlist li ul.children li.depth-2,
.commentlist li ul.children li.depth-3 {
	margin-left: 40px;
	border-style: solid;
	border-color: #281D15;
	border-width: 1px 0 0 1px;
}
.commentlist li.thread-alt {
	background: #e4ede1;
}
</style>
	
	
	 <link href="css/bootstrap.css" rel="stylesheet" />
              <link href="css/rotating-card.css" rel="stylesheet" />
              <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
	

    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body id="top">
<!-- Content
============================================================================== -->
<div id="content-wrap">

    <!-- main -->
    <section id="main">

       

        <!-- Comments background: #57735D ;
        ================================================================================================ -->

 <h3>Questions</h3>
		<br/>

<div class="comment-text">
										<a rel="nofollow" class="button" name="add" onclick="openn()">Add Questions</a>
		 								</div>
										<br>
										<?php
          
            echo '<div  id="myFormq1" style="display:none;">
                <form action= "question.inc.php" method = "post"  class="form-container" enctype="multipart/form-data">
				<br>
                <label for="message">question <span>*</span></label>
                <input type="text" name="filetitle" placeholder="title...">
				<br>
				<textarea id="message" name="filedesc" rows="10" cols="35" tabindex="4"placeholder="desc..."></textarea>
                <input type="file" name="file" value="fileToUpload">
				<br>
                <input class="button" type = "submit" name = "submit" value = "Send" />
				<input class="button" type="button" onclick="closee()" value="Close"/>
<br> <br>
              </form>
            </div>';
          
          ?>
		

<script type="text/javascript">
function openn() {
  document.getElementById("myFormq1").style.display = "block";
}

function closee() {
  document.getElementById("myFormq1").style.display = "none";
}
</script>

<br/>
					<ol class="commentlist">

						<li class="depth-1">
						

							<div class="comment-info">

								<cite>
									<a href="index.html"> </a> <br />
									
								</cite>
								 <main>

      <section class="gallery-links">
        <div class="wrapper">
								<div class="gallery-container">
								<?php
            include_once 'includes/dbh.inc.php';

              $sql = "SELECT * FROM question ORDER BY orderQuestion DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

             if ($row = mysqli_fetch_assoc($result)){
                echo '<div class="comment-text">			
                  <img alt="" id="myImg" class="avatar" height="150" width="150" style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url(question/'.$row["imgFullNameQuestion"].');"/>
  
                 <br> <br> <br>  <h3>'.$row["titleQuestion"].'</h3>
				 <p>'.$row["descQuestion"].'</p> </div>
                ';
              }
            }
            ?>
			</div>
			</div>
			</section>
			</main>
								
							</div>
								
<br> <br> <br>
		 				
							<ul class="children">

								<li class="depth-2">

									<div class="comment-info">
										
										<cite>
											<a href="index.html"> </a> <br />
											
										</cite>
									</div>

									<div class="comment-text">
										<p>
										 <?php
if(isset($_POST['submit1'])){
	
// write the file's
$filea1 = fopen("answerfile1.txt", "w+");

$data = $_POST ['info1'];

fwrite($filea1, $data);

fclose($filea1);


}
?>
										
										<?php

	
//Remove them from heat sources.

// Read the file's 

$myfilea1 = fopen("answerfile1.txt", "r+");


while(!feof($myfilea1)){
                echo fgets($myfilea1). "<br />";
}
 
 fclose($myfilea1);

?>
										</p>
										<br/>
											
							</div>
										
										<div class="comment-text">
							
								<div class="reply">
									
									<a id="click" rel="nofollow" class="open-button" onclick="openForm()">+</a>
										</div>
							</div>

								</li>

									</ul>

								</li>
		<br>						
								<div id="myForm1" style="display:none;">
<form action= "proj.php" method = "post"  class="form-container" enctype="multipart/form-data">
<label for="message">answer <span>*</span></label>
<textarea id="message" name="info1" rows="5" cols="20" tabindex="4"></textarea>
<br>
<br>
<input class="button" type = "submit" name = "submit1" value = "Send" />
<input class="button" type="button" onclick=" closeForm()" value="Close"/>
</div>
 
	
  
  </form>

<script>
function openForm() {
  document.getElementById("myForm1").style.display = "block";

}

function closeForm() {
  document.getElementById("myForm1").style.display = "none";
}

</script>
</ol>
</section>
</div>


<div id="content-wrap">

    <!-- main -->
    <section id="main">


<ol class="commentlist">
						<li class="thread-alt depth-1">

							<div class="comment-info">
					

								<cite>
									<a href="index.html"> </a> <br />
									
								</cite>
								<section class="gallery-links">
        <div class="wrapper">
								 <div class="gallery-container">
           <?php
            include_once 'includes/dbh.inc.php';

              $sql = "SELECT * FROM question ORDER BY orderQuestion DESC LIMIT 1,1;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

             if ($row = mysqli_fetch_assoc($result)){
                echo '<div class="comment-text">		
                  <img alt="" id="myImg" class="avatar" height="150" width="150" style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url(question/'.$row["imgFullNameQuestion"].');"/>
  
                 <br> <br> <br>  <h3>'.$row["titleQuestion"].'</h3>
				 <p>'.$row["descQuestion"].'</p> </div>
                ';
              }
            }
            ?>
          </div>
			</div>
			</section>
			</main>
	
				<br> <br> <br>			
							
							<ul class="children">

								<li class="depth-2">

									<div class="comment-info">
										
										<cite>
											<a href="index.html"> </a> <br />
											
										</cite>
									</div>

									<div class="comment-text">
										<p>
										 <?php
if(isset($_POST['submit2'])){
	
// write the file's
$filea2 = fopen("answerfile2.txt", "w+");

$data = $_POST ['info2'];

fwrite($filea2, $data);

fclose($filea2);


}
?>

	<?php

	
//	Flowering plants that don’t bloom as promised can be a big disappointment in your garden. 
										//Reasons for lack of blooming are as  include light, plant age, nutrition, 
										//extreme temperatures and improper pruning.

// Read the file's 

$myfilea2 = fopen("answerfile2.txt", "r+");


 while(!feof($myfilea2)){
                echo fgets($myfilea2). "<br />";
 }
 
 fclose($myfilea2);

?>
							
</p>
									</div>
									
									<div class="comment-text">

								<div class="reply">
									<a id="click" rel="nofollow" class="open-button" onclick="openForm2()">+</a>
		 						</div>
							</div>

								</li>

							</ul>

						</li>
						
					</li>
					<br>
								<div id="myForm2" style="display:none;">
<form action= "proj.php" method = "post"  class="form-container" enctype="multipart/form-data">
<label for="message">answer <span>*</span></label>
<textarea id="message" name="info2" rows="5" cols="20" tabindex="4"></textarea>
<br>
<br>
<input class="button" type = "submit" name = "submit2" value = "Send" />
<input class="button" type="button" onclick=" closeForm2()" value="Close"/>
<br> <br>
</div>

	
   
  </form>

<script>
function openForm2() {
  document.getElementById("myForm2").style.display = "block";

}

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
</script>
</ol>
  </section>     
</div>


<!-- scripts
============================================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.6.1.min.js"><\/script>')</script>

<script src="js/scrollToTop.js"></script>

<?php
  require "footer.php";
?>

</body>
</html>

