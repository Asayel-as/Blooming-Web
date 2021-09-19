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

    <title>How to grow mango trees in pots</title>

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

            <h2><a href="index.html">How to grow mango trees in pots</a></h2>

<p class="post-info">Posted by <a href="index.php">walaa</a></p>
			<div class="image-section">
                <img src="images/17.jpg" alt="image post" width="550" height="210"/>
         	</div>
			

		Yes, it is possible to grow mango trees in pots and containers. It is surprising to know that some varieties, especially the dwarf ones thrive best when grown in containers. Mango trees are originally from India.</p>
<p>Hence they are called Mangifera Indica and therefore prefer warm temperatures. But with the right care even if you live in a cooler climate, you can grow your own mangoes. There are some dwarf varieties that are perfect for a pot- grown mango tree.</p>
<p>Hence they are called Mangifera Indica and therefore prefer warm temperatures. But with the right care even if you live in a cooler climate, you can grow your own mangoes. There are some dwarf varieties that are perfect for a pot- grown mango tree.</p>
<p>But with the right care even if you live in a cooler climate, you can grow your own mangoes. There are some dwarf varieties that are perfect for a pot- grown mango tree.</p>
<p>Do not propagate mangoes from seeds if you want fruits in the short term. When propagating it from seed, it may take up to eight years to bear fruit.  The better idea is to buy a plant. There are lots of varieties of mangoes available in the market. But for the one that is suitable for you it is better to ask in your local, nursery. Go for the dwarf variety that does well in pots.</p>
<p>There are lots of varieties of mangoes available in the market. But for the one that is suitable for you it is better to ask in your local, nursery. Go for the dwarf variety that does well in pots.</p>
<p>A dwarf variety of mango is perfect for big pots and containers. They grow between 4 and 8 feet tall. In fact you can also grow them indoors. For that you have to set the heat and light requirements for the mango plant. Better keep in a greenhouse. The best time to plant a mango tree in a container is in the spring. Some of the dwarf varieties are Carrie or Cogshall, Keit and Nam Doc Mai.</p>
<p>The best time to plant a mango tree in a container is in the spring. Some of the dwarf varieties are Carrie or Cogshall, Keit and Nam Doc Mai.</p>
<p>The best time to plant a mango tree in a container is in the spring. Some of the dwarf varieties are Carrie or Cogshall, Keit and Nam Doc Mai.</p>
<p><h4>Pot requirements</h4></p>
<p>You should choose a pot or container that is at least 20 inches by 20 inches with proper drainage holes. Mango trees need to have excellent drainage. Add a good layer of broken pottery to the bottom of the pot and then also a layer of crushed gravel.</p>
<p>For the right soil to grow mangoes, it should be light, very luxurious and nutritive. You could use 40% compost, 20% pumice and 40% forest floor mulch. Remember that the tree plus the pot and dirt will get heavy when you fill it, so better place it where you do not want to move it.</p>
<p>Fill the container half with the potting soil. Plant the mango in the center of the pot onto the soil. Then again put more soil to fill the pot until 2 inches from the rim. Use your hand to set the plant well. Water the tree regularly.</p>
<p>Mango plants need to have sufficient water. So put about 2 inches of organic mulch in the pot. This will help in water retention as well as feed the plant when the mulch decomposes. Fertilize ewell, and stick to manufacturer’s instructions. The tree needs to be kept in a warm area for at least 6 hours of sun.</p>
<p>You need to water the mango plant a regularly during warm months and lesser in the winter. Whe the first year’s flowers come, snip it off. This creates more growth in your mango tree. Prune the mango in the late winter or early spring to maintain a container friendly size. Before the mango bears fruit, keep an eye if you need to put a stake for additional support.</p>

			

			 <!-- edit ///////////////////////// -->
			<p class="button">
			    <a href="How to Grow a Ginger Plant.php" class="previous" color="black" >&laquo; Previous</a>
			
                <a href="HOW TO PLANT A CACTUS WITHOUT GETTING POKED.php" class="next">Next &raquo;</a>
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
