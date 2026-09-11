
<?php

include 'db.php';

if(isset($_POST['insert'])){

    $id = $_POST['id'] ?? '';

    $Name = $_POST['fname']." ".$_POST['lname'];
    $Email = $_POST['mailid'];
    $Mobile = $_POST['mobile-no'];
    $Qualification = $_POST['qualification'];
    $CGPA = $_POST['CGPA'];
    $Courses = $_POST['courses'];


    if($id != ''){

        $sql = "UPDATE users SET
                name='$Name',
                email='$Email',
                mobile='$Mobile',
                qualification='$Qualification',
                cgpa='$CGPA',
                courses='$Courses'
                WHERE id='$id'";

        if($connect->query($sql) === TRUE){
            ?>


           <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <link rel="icon" href="logo.jpg">

                <title>Meenakshi Chandrasekaran College</title>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

                <script src="https://kit.fontawesome.com/55fa51d470.js" crossorigin="anonymous"></script>
            </head>

            <body class="d-flex justify-content-center align-items-center vh-100">
                <div>
                    <img src="Update_success.jpg" 
                       class="img-fluid" 
                       alt="Form Submitted Successfully!">
                    <p class="text-center">Updated Successfully</p>
                </div> 

            </body>
            </html>



            <?php
        }else{
            echo "Error updating values: ".$connect->error;
        }

    }

    // ID doesn't exist → INSERT
    else{

        $sql = "INSERT INTO users 
                (name,email,mobile,qualification,cgpa,courses)
                VALUES 
                ('$Name','$Email','$Mobile','$Qualification','$CGPA','$Courses')";

        if($connect->query($sql) === TRUE){
            ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <link rel="icon" href="logo.jpg">

                <title>Meenakshi Chandrasekaran College</title>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

                <script src="https://kit.fontawesome.com/55fa51d470.js" crossorigin="anonymous"></script>
            </head>

            <body class="d-flex justify-content-center align-items-center vh-100">

                <img src="FormSubmittion.jpg" 
                     class="img-fluid" 
                     alt="Form Submitted Successfully!">

            </body>
            </html>

            <?php
        }else{
            echo "Error inserted Values: ".$connect->error;
        }
    }
}

?>







    





    


