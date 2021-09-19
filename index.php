<?php
  require "header.php";
?>
 <html> 

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blooming</title>
<style>

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
	background-color: #130D0A;
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
	background: #100C0A;
}

</style>



</head>

<body>


    <main>
      <div class="wrapper-main">
        <section >
          <?php
        /*  if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged in!</p>';*/
			
//cookies ############################################################################
if (isset($_COOKIE["stored_user_name"])) {
    $user = $_COOKIE["stored_user_name"];
    print "Welcome back, <b>$user</b>!";
} else {
   
    //echo '<form method="post">
    //User name: <input type="text" name="mailuid" />
    //</form> ;';
   
}			
//cookies ###########################
			echo'

<div id="content-wrap-home">

    <!-- main -->
    <section id="main">

        <h3>Articles</h3>

        <article class="col">

            <a href="Aloe.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/33.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Aloe</h4>

            </div>

        </article>
		
		<!-- ***************************************************************************************-->

		 <article class="col">

            <a href="CARING FOR CACTI.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/13.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Cacti</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
		
	    <article class="col">

            <a href="CARING FOR AIR PLANTS.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/12.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Caring for air plants</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->		
	    <article class="col">

            <a href="CARING FOR SUCCULENTS.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/14.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Caring for succulents</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
		<article class="col">

            <a href="growing tips for strawberry.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/2.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Growing tips for strawberry</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
		<article class="col">

            <a href="How to Grow a Ginger Plant.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/111.jpg" /> 
			
			</a>

            <div class="top">

               <h4>How to Grow a Ginger Plant</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
		<article class="col">

            <a href="How to grow mango trees in pots.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/17.jpg" /> 
			
			</a>

            <div class="top">

               <h4>How to grow mango trees in pots</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
		<article class="col">

            <a href="HOW TO PLANT A CACTUS WITHOUT GETTING POKED.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/222.jpg" /> 
			
			</a>

            <div class="top">

               <h4>How to plant a cactus without getting poked</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
			<article class="col">

            <a href="How to Plant Strawberries.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/1.jpg" /> 
			
			</a>

            <div class="top">

               <h4>How to Plant Strawberries</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
				<article class="col">

            <a href="Peace Lily (Spathyphillum).php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/55.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Peace Lily (Spathyphillum)</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
				<article class="col">

            <a href="Rubber Plant.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/44.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Rubber Plant</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
			<article class="col">

            <a href="Simple Trick to Grow Orange Trees From Seeds REALLY FAST.php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/11.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Simple Trick to Grow Orange Trees</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
		<article class="col">

            <a href="Snake Plant (Sansevieria trifasciata).php" title="">
			
			<img width="240" height="240" alt="img" class="thumbnail" src="images/66.jpg" /> 
			
			</a>

            <div class="top">

               <h4>Snake Plant (Sansevieria trifasciata)</h4>

            </div>

        </article>
		<!-- ***************************************************************************************-->
			
        

  
    </section>

 

</div>
';
      //    }
          ?>
        </section>
      </div>
    </main>
	</body>
	</html>

<?php
  require "footer.php";
?>
