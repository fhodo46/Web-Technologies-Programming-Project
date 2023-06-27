<?php 

include "configmidterm.php";

$sql = "SELECT * FROM midterm";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Midterm Results</h2>

<table class="table">

    <thead>

        <tr>

        <th>Question</th>

        <th>Exam Code</th>

        <th>Points for Student 1</th>

        <th>Points for Student 2</th>

        <th>Points for Student 3</th>

        <th>Points for Student 4</th>

    
    
    
    
    
    
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['question']; ?></td>

                    <td><?php echo $row['examcode']; ?></td>

                    <td><?php echo $row['student1points']; ?></td>

                    <td><?php echo $row['student2points']; ?></td>

                   
                   
                   
                   
                    <td><?php echo $row['student3points']; ?></td> <td><?php echo $row['student4points']; ?></td>

                    <td><a class="btn btn-info" href="updatemidterm.php?question=<?php echo $row['question']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deletemidterm.php?question=<?php echo $row['question']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            

}

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>