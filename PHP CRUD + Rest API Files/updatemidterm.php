<?php 

include "configmidterm.php";

    if (isset($_POST['update'])) {

        $question= $_POST['question'];

        $examcode = $_POST['examcode'];

        
        $student1points = $_POST['student1points'];

        $student2points = $_POST['student2points'];

        $student3points= $_POST['student3points'];

        $student4points = $_POST['student4points'];

        

        $sql = "UPDATE `midterm` SET `examcode`='$examcode', `student1points`='$student1points',`student2points`='$student2points',`student3points`='$student3points',`student4points`='$student4points'  WHERE `question`='$question'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['question'])) {

    $question = $_GET['question']; 

    $sql = "SELECT * FROM `midterm` WHERE `question`='$question'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            
            
            
            
            
            
            $question= $row['question'];

            $examcode = $row['examcode'];
    
            
            $student1points = $row['student1points'];
    
            $student2points = $row['student2points'];
    
            $student3points= $row['student3points'];
    
            $student4points = $row['student4points'];
    

        } 

    ?>

        <h2>Student Information Update Form</h2>

        <form action="" method="post">  <fieldset>

            
        
        
        <legend>Student information:</legend>

            Exam code:<br>

            <input type="text" name="examcode" value="<?php echo $examcode; ?>">

            <input type="hidden" name="question" value="<?php echo $question; ?>">

            <br>

            
            
            
            
            Points for Student 1:<br>

            <input type="number" name="student1points" value="<?php echo $student1points; ?>">

            <br>

           Points for Student 2:<br>

            <input type="number" name="student2points" value="<?php echo $student2points; ?>">

            <br>
            





            Points for Student 3:<br>

            <input type="number" name="student3points" value="<?php echo $student3points; ?>">

            <br>

            Points for Student 4:<br>

            <input type="number" name="student4points" value="<?php echo $student4points; ?>">

            <br>

            <input type="submit" value="Update" name="update">
          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: viewmidterm.php');

    } 

}

?> 