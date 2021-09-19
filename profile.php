<?php
  //$_SESSION['username'] = "Admin";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blooming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
 <?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
  require "header.php";
?>
       <main>
      <section class="cases-links">
        <div class="wrapper">
          <h2>Profile</h2>
          <a href="case1.html">
            <div class="cases-link">
              <p>pic</p>
            </div>
          </a>
        </div>
      </section>
	   <section class="case-vid">
        <div class="wrapper">
          <article>
            <h3>REC | VIDEO</h3>
            <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac ligula quam. Pellentesque condimentum lobortis facilisis. Curabitur pulvinar faucibus ipsum id imperdiet. Integer porta erat ac condimentum efficitur. Sed at odio odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac ligula quam. Pellentesque condimentum lobortis facilisis. Curabitur pulvinar faucibus ipsum id imperdiet. Integer porta erat ac condimentum efficitur. Sed at odio odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </article>
      </section>

    </main>
   <?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
  </body>
</html>
