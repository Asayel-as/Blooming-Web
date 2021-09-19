<?php

if (isset($_POST['submit'])) {

  
    $newFileName = "Question";

    $newFileName = strtolower(str_replace(" ", "-", $newFileName));
  
  $imageTitle = $_POST['filetitle'];
  $imageDesc = $_POST['filedesc'];

  $file = $_FILES['file'];

  $fileName = $file["name"];
  $fileType = $file["type"];
  $fileTempName = $file["tmp_name"];
  $fileError = $file["error"];
  $fileSize = $file["size"];

  $fileExt = explode(".", $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array("jpg", "jpeg", "png");
  
  if (!is_dir("Question")){
    mkdir("Question");
}

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 2000000) {
        $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
		
        $fileDestination = "../question/" . $imageFullName;

        include_once "includes/dbh.inc.php";

        if (empty($imageTitle) || empty($imageDesc)) {
          header("Location:question.php?upload=empty");
          exit();
        } else {
          $sql = "SELECT * FROM question;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement faileddd!";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);
            $setImageOrder = $rowCount + 1;

            $sql = "INSERT INTO question (titleQuestion, descQuestion, imgFullNameQuestion, orderQuestion) VALUES (?, ?, ?, ?);";
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement faiiiled!". $sql . "<br>" . $conn->error;
            } else {
              mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
              mysqli_stmt_execute($stmt);

            if(  move_uploaded_file($fileTempName, $fileDestination))
			{
				print"ok";
			}

              header("Location:question.php?upload=success");
            }
          }
        }
      } else {
        echo "File size is too big!";
        exit();
      }
    } else {
      echo "You had an error!";
      exit();
    }
  } else {
    echo "You need to upload a proper file type!";
    exit();
  }

}
?>
