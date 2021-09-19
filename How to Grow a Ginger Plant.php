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

    <title>How to Grow a Ginger Plant</title>

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

            <h2><a href="index.html">How to Grow a Ginger Plant</a></h2>

<p class="post-info">Posted by <a href="index.html">walaa</a></p>
			
			
<p>Growing your ginger is easy. Once planted, the ginger needs nothing but water and patience to mature into a delicious, spicy ingredient. This article focuses on the edible species of ginger, but flowering ornamental ginger plants can also be grown in similar conditions.</p>
<p><img class="aligncenter wp-image-2363" src="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/D3.jpg" alt="Ginger plants " width="460" height="346" srcset="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/D3.jpg 259w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/D3-80x60.jpg 80w" sizes="(max-width: 460px) 100vw, 460px" /></p>
<p>Ginger is a tropical plant that does not survive in winter. So Plant it after the last spring frost, or at the start of the rainy season if you live in the tropics. If you reside in a climate with a short growing season, you can grow the plant indoors.</p>
<p>There are many species of ginger. To grow the most common edible variety, Zingiber officinale, all you need is the ginger root. You can find ornamental ginger plants with vibrant flowers at a plant nursery, but these are often inedible.</p>
<p><img class="aligncenter size-full wp-image-2364" src="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/2010-10-16-01.jpg" alt="Ginger roots " width="520" height="390" srcset="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/2010-10-16-01.jpg 520w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/2010-10-16-01-300x225.jpg 300w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/2010-10-16-01-80x60.jpg 80w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/2010-10-16-01-265x198.jpg 265w" sizes="(max-width: 520px) 100vw, 520px" /></p>
<p>Choose ginger roots which are plump and free of wrinkles, with visible small eyes/points at the end of the &#8220;fingers.&#8221; Buy organic ginger if you can. Non-organic ginger may have been treated with a growth inhibitor. Some gardeners find that soaking in warm water overnight will help stimulate inhibited plants.</p>
<p><img class="aligncenter size-full wp-image-2370" src="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/unnamed.jpg" alt="Ginger root with eyes" width="476" height="309" srcset="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/unnamed.jpg 476w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/unnamed-300x195.jpg 300w" sizes="(max-width: 476px) 100vw, 476px" /></p>
<p>If you&#8217;d like to grow more than one plant, cut the ginger into pieces with a knife. Any piece at least 1 inch wide with one or more eyes can grow into a separate plant. After cutting, leave the pieces in a dry location for a few days to allow them to heal. They will form a protective callus over the cut surface, which reduces the risk of infection.</p>
<p><img class="aligncenter size-full wp-image-2365" src="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-29-1.jpg" alt="Ginger plants from roots " width="384" height="384" srcset="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-29-1.jpg 384w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-29-1-150x150.jpg 150w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-29-1-300x300.jpg 300w" sizes="(max-width: 384px) 100vw, 384px" /></p>
<p>Ginger survives on well-drained and fertilised soil. Mix garden soil with an equal amount of vermicompost. If your soil is poor quality or heavy in clay, purchase potting soil instead. Ginger prefers mildly acidic soils with PH around 6.5</p>
<p>Ginger prefers partial shade or areas with morning sun. The growing location should be sheltered from wind and moisture. Soil temperatures must be warm — ideally between 22–25ºC.</p>
<p><img class="aligncenter size-full wp-image-2372" src="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/4608e6d842fa639154eb8eafed765d777fee7794_91d87432c28c7dff63e3dee0adce0f86e90bb846_articlemain.jpg" alt="Ginger plants in pot" width="620" height="350" srcset="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/4608e6d842fa639154eb8eafed765d777fee7794_91d87432c28c7dff63e3dee0adce0f86e90bb846_articlemain.jpg 620w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/4608e6d842fa639154eb8eafed765d777fee7794_91d87432c28c7dff63e3dee0adce0f86e90bb846_articlemain-300x169.jpg 300w" sizes="(max-width: 620px) 100vw, 620px" /></p>
<p>If you are growing ginger in pots, choose a pot at least 12 inches deep. A plastic pot is better than terra cotta. Plant each piece of ginger 2–4 inches below the loose soil, with the buds pointing upward. If planting in pots, plant 2–3 pieces per large pot.</p>
<p>Water lightly after planting. Check the soil daily and water just before it dries out completely. Excess watering may rot the plants so reduce watering if water does not drain quickly.</p>
<p><img class="aligncenter size-full wp-image-2374" src="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-32.jpg" alt="Ginger plants in container" width="444" height="331" srcset="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-32.jpg 444w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-32-300x224.jpg 300w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-32-80x60.jpg 80w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-32-265x198.jpg 265w" sizes="(max-width: 444px) 100vw, 444px" /></p>
<p>Fertilize with a slow-release fertiliser once a month. Once the ginger has sprouted, spread mulch around to keep it warm and to fight weeds. A thick layer of mulch is mandatory if soil temperatures fall below 10ºC during the growing season.</p>
<p>The ginger plant might not flower the first year or two after planting, or if the growing season is short. Ginger develops a much stronger flavour if allowed to evolve on the ground. After the stems die, and at least eight months after planting, dig up the ginger rhizome. Cutting off some pieces for cooking will not kill the plant as long as you leave some eyes behind.</p>
<p><img class="aligncenter size-full wp-image-2377" src="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-28-1.jpg" alt="Ginger plants " width="443" height="332" srcset="http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-28-1.jpg 443w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-28-1-300x225.jpg 300w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-28-1-80x60.jpg 80w, http://blog-20c0.kxcdn.com/wp-content/uploads/2016/06/images-28-1-265x198.jpg 265w" sizes="(max-width: 443px) 100vw, 443px" /></p>
<p>So readers, start growing ginger plant in your garden and enjoy the huge benefits.</p>

 
 
			 <!-- edit ///////////////////////// -->
			<p class="button">
			    <a href="growing tips for strawberry.php" class="previous" color="black" >&laquo; Previous</a>
		
                <a href="How to grow mango trees in pots.php" class="next">Next &raquo;</a>
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
