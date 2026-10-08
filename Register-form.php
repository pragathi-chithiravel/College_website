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
    require 'header.php';
    ?>
    
<?php
include 'db.php';

// include 'db.php';

// if(isset($_GET['id'])){

//     $id = (int) $_GET['id'];

//     $sql = "SELECT * FROM users WHERE id='$id' ";

//     $result = $connect->query($sql);

//     if($result->num_rows > 0){

//         $row = $result->fetch_assoc();


//     } 
// }


    $Name = $_POST['name'] ?? '';
    $Email = $_POST['mail'] ?? '';
    $Mobile = $_POST['mobile-no'] ?? '';
    $Qualification = $_POST['qualification'] ?? '';
    $CGPA = $_POST['CGPA'] ?? '';
    $Courses = $_POST['courses'] ?? '';




$nameError = $emailError = $mobileError = $QualificationError = $cgpaError = $courseError = "";
$name = $email = $mobile = $Qualification = $cgpa = $courses = "";

if(isset($_POST['submit'])){

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameError = "*Name is required";
        }else{
            $name = test_data($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nameError = "*Only letters & whitespace allowed";
            }

        }

        if(empty($_POST["mail"])){
            $emailError = "*Email is required";
        }else{
            $email = test_data($_POST["mail"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailError = "*Invalid email";
            }
        }

        if(empty($_POST['mobile-no'])){
            $mobileError = "*Mobile Number required";
        }else{
            $mobile = test_data($_POST["mobile-no"]);
            if(!preg_match("/^[0-9]{10}$/",$mobile)){
                $mobileError = "*Enter a vaild 10 digit mobile number";
            }
        }

        if(empty($_POST['qualification'])){
            $QualificationError = "*Qualification required";
        }else{
            $Qualification = test_data($_POST['qualification']);
            if(!preg_match("/^[a-zA-Z.]+$/",$Qualification)){
                $QualificationError = "*Qualification should contain letters only";
            }
        }

        if(empty($_POST['CGPA'])){
            $cgpaError = "*CGPA required";
        }else{
            $cgpa = test_data($_POST['CGPA']);
            if(!preg_match('/^[0-9]+(\.[0-9]+)?$/', $cgpa)){
                $cgpaError = "*Please enter valid CGPA";
            }
        }

        if(empty($_POST['courses'])){
            $courseError = "*Course required";
        }

        if(empty($nameError) &&
           empty($emailError) &&
           empty($mobileError) &&
           empty($QualificationError) &&
           empty($cgpaError) &&
           empty($courseError) 
           ){
            $sql = "INSERT INTO users 
                (name,email,mobile,qualification,cgpa,courses)
                VALUES 
                ('$Name','$Email','$Mobile','$Qualification','$CGPA','$Courses')";

            if($connect->query($sql) === TRUE){
                echo "<script>
                       alert('Submited Successfully !')
                      </script>";
                    $Name = '';
                    $Email = '';
                    $Mobile = '';
                    $Qualification = '';
                    $CGPA = '';
                    $Courses = '';
            }else{
                echo "Error inserted Values: ".$connect->error;
            }
    }

           }
    

}

function test_data($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>




        <section>
            <div class="container-fluid">
                <h1 class="text-center py-5">Registration Form</h1>
                
                <div class="d-flex justify-content-center">
                    <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>"
                     method="POST" enctype="multipart/form-data" 
                     onsubmit="return confirm('Are you sure you want submit?')"
                     class=" border text-bg-secondary py-5 px-5 col-10 col-md-6 col-sm-8">
                     
                    <label for="fname" class="form-label">Name:</label>

                    <input class="form-control" id="name" name="name" type="text"  
                    placeholder="Enter Name" value="<?php echo htmlspecialchars($Name); ?>"/>

                    <span id="fnameError" style="color: red;"><?php echo $nameError; ?> </span><br/>

                    <label for="mailid" class="form-label">Email:</label>

                    <input class="form-control" id="mail" name="mail" type="email"
                     placeholder="Enter Email" value="<?php echo htmlspecialchars($Email); ?>"/>

                    <span id="mailidError" style="color: red;"><?php echo $emailError; ?> </span><br/>

                    <label for="mobile-no" class="form-label">MobileNo:</label>

                    <input class="form-control" id="mobile-no" name="mobile-no" type="number" 
                    placeholder="Enter Mobile No" value="<?php echo htmlspecialchars($Mobile); ?>"/>

                    <span id="mobileError" style="color: red;"><?php echo $mobileError; ?> </span><br/>

                    <label for="qualification" class="form-label">Qualification:</label>

                    <input class="form-control" id="qualification" name="qualification" type="text" 
                    placeholder="Highest qualification" value="<?php echo htmlspecialchars($Qualification); ?>"/>

                    <span id="qualificationError" style="color: red;"><?php echo $QualificationError; ?></span><br/>

                    <label for="CGPA" class="form-label">CGPA:</label>

                    <input class="form-control" id="CGPA" name="CGPA" type="text"
                     placeholder="Enter CGPA/Percentage" value="<?php echo htmlspecialchars($CGPA); ?>"/>

                    <span id="CGPAError" style="color: red;"><?php echo $cgpaError; ?></span><br/>

                    <label for="courses" class="form-label">Select_Course:</label>

                    <select class="form-select" id="courses" name="courses" required>

                        <option value="" selected disabled>
                            --Select Course--
                        </option>

                        <option value="B.A.Tamil"
                            <?php if(htmlspecialchars($Courses) == 'B.A.Tamil') echo 'selected'; ?>>
                            B.A.Tamil
                        </option>

                       <option value="B.A.English"
                           <?php if(htmlspecialchars($Courses) == 'B.A.English') echo 'selected'; ?>>
                           B.A.English
                        </option>

                        <option value="BBA"
                            <?php if(htmlspecialchars($Courses) == 'BBA') echo 'selected'; ?>>
                            BBA
                        </option>

                        <option value="BCA"
                            <?php if(htmlspecialchars($Courses) == 'BCA') echo 'selected'; ?>>
                            BCA
                        </option>

                        <option value="B.Sc.Computer science"
                            <?php if(htmlspecialchars($Courses) == 'B.Sc.Computer science') echo 'selected'; ?>>
                            B.Sc.Computer science
                        </option>

                        <option value="B.Sc,Maths"
                            <?php if(htmlspecialchars($Courses) == 'B.Sc,Maths') echo 'selected'; ?>>
                            B.Sc,Maths
                        </option>

                        <option value="B.Sc.Physics"
                            <?php if(htmlspecialchars($Courses) == 'B.Sc.Physics') echo 'selected'; ?>>
                            B.Sc.Physics
                        </option>

                        <option value="B.Sc.Bio-chemistry"
                            <?php if(htmlspecialchars($Courses) == 'B.Sc.Bio-chemistry') echo 'selected'; ?>>
                            B.Sc.Bio-chemistry
                        </option>

                        <option value="B.Sc.Microbiology"
                            <?php if(htmlspecialchars($Courses) == 'B.Sc.Microbiology') echo 'selected'; ?>>
                            B.Sc.Microbiology
                        </option>

                        <option value="MBA"
                            <?php if(htmlspecialchars($Courses) == 'MBA') echo 'selected'; ?>>
                            MBA
                        </option>

                        <option value="M.A.English"
                            <?php if(htmlspecialchars($Courses) == 'M.A.English') echo 'selected'; ?>>
                            M.A.English
                        </option>

                        <option value="M.Com"
                            <?php if(htmlspecialchars($Courses) == 'M.Com') echo 'selected'; ?>>
                            M.Com
                        </option>

                        <option value="M.Sc.Maths"
                            <?php if(htmlspecialchars($Courses) == 'M.Sc.Maths') echo 'selected'; ?>>
                            M.Sc.Maths
                        </option>

                        <option value="M.Sc.Computer Science"
                            <?php if(htmlspecialchars($Courses) == 'M.Sc.Computer Science') echo 'selected'; ?>>
                            M.Sc.Computer Science
                        </option>

                        <option value="M.Sc.Microbiology"
                            <?php if(htmlspecialchars($Courses) == 'M.Sc.Microbiology') echo 'selected'; ?>>
                            M.Sc.Microbiology
                        </option>

                        <option value="Ph.D.Commerce"
                            <?php if(htmlspecialchars($Courses) == 'Ph.D.Commerce') echo 'selected'; ?>>
                            Ph.D.Commerce
                        </option>

                        <option value="B.Ed"
                            <?php if(htmlspecialchars($Courses) == 'B.Ed') echo 'selected'; ?>>
                            B.Ed
                        </option>

                    </select><br/>

                    <span id="coursesError" style="color: red;"><?php echo $courseError; ?></span><br/>

                    <div class="d-flex justify-content-end gap-4">

                        <button class="btn btn-primary " type="submit" name="submit">submit</button>

                    </div>

                    </form>
                </div>
            </div>
        </section>
        

    <?php
    require 'footer.php';
    ?>

     <script src="index.js"></script>
       

</body>
</html>

