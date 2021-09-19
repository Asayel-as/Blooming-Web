<?php
  require "header.php";
?>
<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

<head>

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
    P O S T
================================================================================ */
.post{text-align:justify}
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

    a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}
a:hover {
  //background-color: #ddd;
 // border-color: #281D15;
  color: black;
}
.previous {
    color: black;
    //border-color: #281D15;
    font-size: 11px;
    font-weight: bold;
    
}
.next {
    color: black;
	font-size: 11px;
    font-weight: bold;
	margin-left: 450px;
	
}
.round {
  border-radius: 50%;
}
</style>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CARING FOR SUCCULENTS</title>

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

        <article class="post">

            <h2><a href="index.html">CARING FOR SUCCULENTS</a></h2>

<p class="post-info">Posted by <a href="index.html">walaa</a></p>
			<div class="image-section">
                <img src="images/14.jpg" alt="image post" width="550" height="210"/>
         	</div>
			
        <h4>LIGHT:</h4>
		<p>Native to dry areas, succulents love sunchine. They do best with at least 6 hours od bright, direct sun.
		Too little sunshine will cause the stems to stretch, and the leaevs to space out.
		This indicates that your plant listerally searching for the sun. With bright sunshine your plants will become more colorful;
		however, too much direct sunshine can burn the leaves.</p>

		<h4>SOIL:</h4>
<p>Well draining, coarse soil. Use 50% perlite or vermiculite, 40% potting soil, 10% sand. </p>

<h4>WATER:</h4>
<p>In the growing season (spring + summer), your plants will require more water to grow more.
 If your containers lack drainage, once every other week is enough. If you have them in a pot with drainage, water about once a week.
 In late fall/winter, succulents go through a dormancy period, and do not require as much water to survive.
 Back off to about once every 6 weeks. The thicker the leaves of your succulents, the more water they can store.
 This is why some succulents will start wilting before others. Observation is key!
 If you see wrinkling or concaveness in your leaves, they need more water to fatten up. </p>

 <h4>FERTILIZING:</h4>
<p>In the growing season- use diluted liquid fertilizer every 2nd or 3rd watering. Use standard 20/20/20 blend.</p>

			

			 <!-- edit ///////////////////////// -->
			<p class="button">
			    <a href="CARING FOR CACTI.php" class="previous" color="black" >&laquo; Previous</a>
		
                <a href="growing tips for strawberry.php" class="next">Next &raquo;</a>
			</p>
			</article>
    <!-- /main -->
    </section>
</div>
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
