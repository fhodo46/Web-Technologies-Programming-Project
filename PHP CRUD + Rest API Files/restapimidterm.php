<?php
  $conn = mysqli_connect("localhost","root","","midtermresults");
  $response= array();






  if($conn){
      $sql= "SELECT * FROM midterm";
      $result= mysqli_query($conn, $sql);

      if($result){
        $x=0;
        while($row = mysqli_fetch_assoc($result)){
          
         $response[$x]['question']= $row['question'];   
         $response[$x]['examcode']= $row['examcode'];   
         $response[$x]['student1points']= $row['student1points'];   
         $response[$x]['student2points']= $row['student2points'];
         $response[$x]['student3points']= $row['student3points'];   
         $response[$x]['student4points']= $row['student4points'];   
         $x++;
      }  
    
      echo json_encode($response, JSON_PRETTY_PRINT);
    }
  }
  else{
  echo "Connection failed";
}


?>