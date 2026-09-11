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

if(isset($_GET['id'])){

    $id = (int) $_GET['id'];

    $sql = "SELECT * FROM users WHERE id='$id' ";

    $result = $connect->query($sql);

    if($result->num_rows > 0){

        $row = $result->fetch_assoc();


    } 
}

?>




        <section>
            <div class="container-fluid">
                <h1 class="text-center py-5">Registration Form</h1>
                
                <div class="d-flex justify-content-center">
                    <form action="insert_value.php" method="POST" enctype="multipart/form-data"
                     class=" border text-bg-secondary py-5 px-5 col-10 col-sm-6">

                    <input type='hidden' name="id" value="<?php echo $row['id']?? ''; ?>" />
                     
                    <label for="fname" class="form-label">FirstName:</label>

                    <input class="form-control" id="fname" name="fname" type="text"  
                    placeholder="Enter First name" value="<?php echo $row['Name'] ?? ''; ?>"/>

                    <span id="fnameError" style="color: red;"></span><br/>

                    <label for="lname" class="form-label">LastName:</label>

                    <input class="form-control" id="lname" name="lname" type="text"
                     placeholder="Enter Last name"/>

                    <span id="lnameError" style="color: red;"></span><br/>

                    <label for="mailid" class="form-label">Email:</label>

                    <input class="form-control" id="mailid" name="mailid" type="email"
                     placeholder="Enter Email" value="<?php echo $row['Email'] ?? ''; ?>"/>

                    <span id="mailidError" style="color: red;"></span><br/>

                    <label for="mobile-no" class="form-label">MobileNo:</label>

                    <input class="form-control" id="mobile-no" name="mobile-no" type="number" 
                    placeholder="Enter Mobile No" value="<?php echo $row['Mobile'] ?? ''; ?>"/>

                    <span id="mobileError" style="color: red;"></span><br/>

                    <label for="qualification" class="form-label">Qualification:</label>

                    <input class="form-control" id="qualification" name="qualification" type="text" 
                    placeholder="Highest qualification" value="<?php echo $row['Qualification'] ?? ''; ?>"/>

                    <span id="qualificationError" style="color: red;"></span><br/>

                    <label for="CGPA" class="form-label">CGPA:</label>

                    <input class="form-control" id="CGPA" name="CGPA" type="text"
                     placeholder="Enter CGPA/Percentage" value="<?php echo $row['CGPA'] ?? ''; ?>"/>

                    <span id="CGPAError" style="color: red;"></span><br/>

                    <label for="courses" class="form-label">Select_Course:</label>

                    <select class="form-select" id="courses" name="courses">

                        <option value="B.A.Tamil" 
                            <?php if(($row['Courses'] ?? '') == 'B.A.Tamil') echo 'selected'; ?>>
                            B.A.Tamil
                        </option>

                       <option value="B.A.English"
                           <?php if(($row['Courses'] ?? '') == 'B.A.English') echo 'selected'; ?>>
                           B.A.English
                        </option>

                        <option value="BBA"
                            <?php if(($row['Courses'] ?? '') == 'BBA') echo 'selected'; ?>>
                            BBA
                        </option>

                        <option value="BCA"
                            <?php if(($row['Courses'] ?? '') == 'BCA') echo 'selected'; ?>>
                            BCA
                        </option>

                        <option value="B.Sc.Computer science"
                            <?php if(($row['Courses'] ?? '') == 'B.Sc.Computer science') echo 'selected'; ?>>
                            B.Sc.Computer science
                        </option>

                        <option value="B.Sc,Maths"
                            <?php if(($row['Courses'] ?? '') == 'B.Sc,Maths') echo 'selected'; ?>>
                            B.Sc,Maths
                        </option>

                        <option value="B.Sc.Physics"
                            <?php if(($row['Courses'] ?? '') == 'B.Sc.Physics') echo 'selected'; ?>>
                            B.Sc.Physics
                        </option>

                        <option value="B.Sc.Bio-chemistry"
                            <?php if(($row['Courses'] ?? '') == 'B.Sc.Bio-chemistry') echo 'selected'; ?>>
                            B.Sc.Bio-chemistry
                        </option>

                        <option value="B.Sc.Microbiology"
                            <?php if(($row['Courses'] ?? '') == 'B.Sc.Microbiology') echo 'selected'; ?>>
                            B.Sc.Microbiology
                        </option>

                        <option value="MBA"
                            <?php if(($row['Courses'] ?? '') == 'MBA') echo 'selected'; ?>>
                            MBA
                        </option>

                        <option value="M.A.English"
                            <?php if(($row['Courses'] ?? '') == 'M.A.English') echo 'selected'; ?>>
                            M.A.English
                        </option>

                        <option value="M.Com"
                            <?php if(($row['Courses'] ?? '') == 'M.Com') echo 'selected'; ?>>
                            M.Com
                        </option>

                        <option value="M.Sc.Maths"
                            <?php if(($row['Courses'] ?? '') == 'M.Sc.Maths') echo 'selected'; ?>>
                            M.Sc.Maths
                        </option>

                        <option value="M.Sc.Computer Science"
                            <?php if(($row['Courses'] ?? '') == 'M.Sc.Computer Science') echo 'selected'; ?>>
                            M.Sc.Computer Science
                        </option>

                        <option value="M.Sc.Microbiology"
                            <?php if(($row['Courses'] ?? '') == 'M.Sc.Microbiology') echo 'selected'; ?>>
                            M.Sc.Microbiology
                        </option>

                        <option value="Ph.D.Commerce"
                            <?php if(($row['Courses'] ?? '') == 'Ph.D.Commerce') echo 'selected'; ?>>
                            Ph.D.Commerce
                        </option>

                        <option value="B.Ed"
                            <?php if(($row['Courses'] ?? '') == 'B.Ed') echo 'selected'; ?>>
                            B.Ed
                        </option>

                    </select><br/>

                    <span id="coursesError" style="color: red;"></span><br/>

                    <div class="d-flex justify-content-end gap-4">

                        <button onclick="alertBox()" class="btn btn-primary " type="submit" name="insert">submit</button>
                        
                        <a href="User_update.php" class="btn btn-warning">Update</a>

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

