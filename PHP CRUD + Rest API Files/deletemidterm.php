<?php 

include "configmidterm.php"; 

if (isset($_GET['question'])) {

    $question = $_GET['question'];

    
    $sql = "DELETE FROM `midterm` WHERE `question`='$question'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>