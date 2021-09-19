
<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
  require "header.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blooming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <!--link rel="stylesheet" href="style.css"-->
   <style>
   
.gallery-links h2 {
  font-family: Catamaran;
  font-size: 28px;
  font-weight: 600;
  color: #111;
  text-transform: uppercase;
}

.gallery-container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: flex-start;
  align-content: flex-start;
}

.gallery-container a {
  width: 230px;
  margin: 20px 10px 0;
}

.gallery-container a:hover {
  opacity: 0.8;
}

.gallery-container a div {
  width: 100%;
  height: 235px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.gallery-container a h3 {
  font-family: Catamaran;
  font-size: 20px;
  font-weight: 700;
  color: #111;
  padding-top: 16px;
  line-height: 26px;
}

.gallery-container a p {
  font-family: Catamaran;
  font-size: 16px;
  font-weight: 400;
  color: #111;
  padding-top: 4px;
  line-height: 20px;
}

.gallery-upload {
  width: 100%;
  padding: 20px 0;
  margin-top: 20px;
  background-color: #F2F2F2;
}

.gallery-upload h2 {
  font-family: Catamaran;
  font-size: 28px;
  font-weight: 600;
  color: #111;
  text-transform: uppercase;
  text-align: center;
  padding-bottom: 10px;
}

.gallery-upload form {
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  align-items: center;
}

.gallery-upload form input {
  width: 200px;
  height: 30px;
  margin-top: 10px;
  padding: 0 15px;
  border-radius: 100px;
  box-shadow: none;
  border: 1px solid #ccc;
}

.gallery-upload-file-input {
  padding-top: 8px !important;
  background-color: #fefefe;
}

.gallery-upload form button {
  width: 120px;
  height: 30px;
  margin-top: 10px;
  border-radius: 100px;
  box-shadow: none;
  border: none;
  background-color: #4EADFF;
  color: #fff;
  font-weight: 700;
}

input:focus {
    outline:none !important;
}
   </style>
  </head>
  <body>
    <main>

      <section class="gallery-links">
        <div class="wrapper">
          <h2 style="font-family: Catamaran;
  font-size: 28px;
  font-weight: 600;
  color: #111;
  text-transform: uppercase;">Gallery</h2>

          <div class="gallery-container">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                  <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].')"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                </a>';
              }
            }
            ?>
          </div>

          <?php
          if (isset($_SESSION['id'])) {
            echo '<div class="gallery-upload">
              <h2>Upload</h2>
              <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                <input  type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>
            </div>';
          }
          ?>

        </div>
      </section>

    </main>
   <?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
  </body>
</html>
