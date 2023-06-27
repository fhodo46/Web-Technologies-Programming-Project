<?php 

include "configfinal.php";

  if (isset($_POST['submit'])) {

    $examcode = $_POST['examcode'];

    
    $student1points= $_POST['student1points'];

    $student2points = $_POST['student2points'];

    $student3points = $_POST['student3points'];

    $student4points = $_POST['student4points'];

    $sql = "INSERT INTO `final`(`examcode`, `student1points`, `student2points`, `student3points`, `student4points`) VALUES ('$examcode','$student1points','$student2points','$student3points','$student4points')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Finals Form</h2>

<form action="" method="POST">

 





<fieldset>

    <legend>Final results:</legend>

    Enter the exam code:<br>

    <input type="text" name="examcode">

    <br>

   Enter the points for student1: <br>

    <input type="number" name="student1points">  <br>

    Enter the points for student2: <br>

    <input type="number" name="student2points">  <br>

    Enter the points for student3: <br>

    <input type="number" name="student3points">  <br>

    Enter the points for student4: <br>

    <input type="number" name="student4points"> <br>


    <input type="submit" name="submit" value="submit">
    <br>

   

    
  </fieldset>

</form>

</body>

</html>