<?php
include_once('config.php');

$db = $conn;

if (isset($_POST['addproduct'])) {

    $category = $_POST['category'];
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $description = $_POST['description'];


    $productimage = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $productimage;



    // Prepare an insert statement
    $sql = "INSERT INTO products ( Category, Name, Price, Description, image ) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssdss", $category, $productname, $price, $description, $productimage);


        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            move_uploaded_file($tempname, $folder);
            header("location: Admin.php?msg=Product Added Sucessfully");
        } else {
            header("location: Admin.php?msg=Product Not Added.");
        }




        // Close statement
        mysqli_stmt_close($stmt);

    }





} else if (isset($_POST['usave'])) {
    session_start();
    $old = $_POST['oldpass'];
    $npass = $_POST['npassword'];
    $cpass = $_POST['cpassword'];
    $email = $_SESSION['User']['Email'];

    if (empty($old)) {

        header("location:../user/changepassword.php?msg=Old Password is required");
        exit;
    } else {

        $sql = mysqli_query($db, "select * from employee where Password='$old' and Email='$email'");
        if (mysqli_num_rows($sql) > 0) {
            if (!empty($npass) && !empty($cpass)) {
                if ($npass == $cpass) {
                    mysqli_query($db, "update employee set Password='$npass' where Password='$old' and Email='$email'");
                    header("location:../user/changepassword.php?msg=New password changed Successfully");
                    exit;
                } else {
                    header("location:../user/changepassword.php?msg=New password and Confirm password do not match?");
                    exit;
                }

            } else {
                header("location:../user/changepassword.php?msg=New Password And Confirm Password is required?");
                exit;
            }
        } else {
            header("location:../user/changepassword.php?msg=Old Password is Wrong!");
            exit;
        }
    }
} else if (isset($_POST['register'])) {

    $Password = $_POST['password'];
    $email = $_POST['email'];
    $usertype = "Student";
    $studentid = $_POST['studentid'];
    $fullname = $_POST['fullname'];

    $studentid = strtoupper($studentid);

    $Username = "uname";



    $query = "SELECT id FROM userlogin ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if ($row['id'] == NULL) {
        $pid = '1';
    } else {
        $lastid = $row['id'];
        $pid = $lastid + 1;

    }


    $query1 = "SELECT id FROM students ORDER BY id DESC";
    $result1 = mysqli_query($conn1, $query1);
    $row = mysqli_fetch_array($result1);
    if ($row1['id'] == NULL) {
        $pid1 = '1';
    } else {
        $lastid1 = $row1['id'];
        $pid1 = $lastid1 + 1;

    }
    // Validate studentid
    if (empty(trim($_POST["studentid"]))) {
        header("location:index.php?msg=student id required");

    } elseif (empty(trim($_POST["email"]))) {
        header("location:index.php?msg=email required");
    } elseif (empty(trim($_POST["password"]))) {
        header("location:index.php?msg=email required");
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM userlogin WHERE studentid = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_studentid);

            // Set parameters
            $param_studentid = trim($_POST["studentid"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    header("location:register.php?msg=Student ID Registered");
                } else {


                    $Username = trim($_POST["studentid"]);


                    // Prepare an insert statement
                    $sql = "INSERT INTO userlogin (id, email, username,password, type,studentid, fullname ) VALUES (?, ?, ?, ?, ?, ?, ?)";
                    $query = "INSERT into `students` (ID,fullname,studentid,password, photo) VALUES (?,?,?,?,?)";
                    $photo = "uploads/avatar_nick.png";

                    if ($stmt = mysqli_prepare($conn, $sql)) {
                        // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt, "issssss", $pid, $email, $Username, $Password, $usertype, $studentid, $fullname);

                        if ($stmt1 = mysqli_prepare($conn1, $query)) {
                            mysqli_stmt_bind_param($stmt1, "issss", $pid1, $fullname, $studentid, $Password, $photo);

                            // Now let's move the uploaded image into the folder: image

                            // Attempt to execute the prepared statement
                            if (mysqli_stmt_execute($stmt) && mysqli_stmt_execute($stmt1)) {
                                // Redirect to login page
                                session_start();
                                $_SESSION['studentid'] = $studentid;

                                header("location: index.php?msg=Registeration Sucessfull");
                            } else {
                                header("location: register.php?msg=Registeration UnSucessfull");
                            }




                            // Close statement
                            mysqli_stmt_close($stmt);
                            mysqli_stmt_close($stmt1);
                        }
                    }
                }
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


}

?>