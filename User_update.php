<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpg">
    <title>Meenakshi Chandrasekaran College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <link rel="stylesheet" href="index.css"> -->
    <script src="https://kit.fontawesome.com/55fa51d470.js" crossorigin="anonymous"></script>
</head>
<body>


<?php

include 'header.php';

include 'db.php';


// if(isset($_POST['insert'])){
    
//     $id=$_POST['id'];
//      echo "ID :".$id ."<br>" ;
//     $Name = $_POST['fname']." ".$_POST['lname'];
//     $Email = $_POST['mailid'];
//     $Mobile = $_POST['mobile-no'];
//     $Qualification = $_POST['qualification'];
//     $CGPA = $_POST['CGPA'];
//     $Courses = $_POST['courses']; 
    

//     $sql = "UPDATE users
//             SET Name='$Name',
//             Email='$Email',
//             Mobile='$Mobile',
//             Qualification='$Qualification',
//             CGPA='$CGPA',
//             Courses='$Courses'
//             WHERE id='$id' ";
    
//     // if($connect->query($sql) === TRUE){
//     //     echo "Update Sucessfully";
//     // }else{
//     //     echo "Error Updated values:".$connect->error;
//     // }
// }


$sql = "SELECT * FROM users";

$result = $connect->query($sql);

if($result->num_rows > 0){

?>
    
    
    <table class="table table-bordered border-collapse mt-5 ">
        <tr class="text-center">
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>MOBILE</th>
            <th>QUALIFICATION</th>
            <th>CGPA</th>
            <th>COURSE</th>
            <th>Edit</th>
        </tr>

        <?php
        while($row = $result->fetch_assoc()){
            ?>
            
        <tr class="text-center">
            <td><?php echo "<br>".$row["id"]."<br>";?></td>
            <td><?php echo $row["Name"]."<br>"; ?></td>
            <td><?php echo $row["Email"]."<br>"; ?></td>
            <td><?php echo $row["Mobile"]."<br>"; ?></td>
            <td><?php echo $row["Qualification"]."<br>"; ?></td>
            <td><?php echo $row["CGPA"]."<br>"; ?></td>
            <td><?php echo $row["Courses"]."<br>"; ?></td>
            <td><a href="Register-form.php?id=<?php echo $row['id'] ?? ''; ?>" 
            class="btn btn-warning" type="submit">Edit</a></td>
         
        </tr>

        <?php
           }
        ?>
    </table>


<?php  
}

require 'footer.php';

?>


    
</body>
</html>

