<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtSubject = $_POST['txtSubject'];
    $txtDetails = $_POST['txtDetails'];

    $sql = "INSERT INTO tbl_contact VALUES (0, '$txtName',
                '$txtEmail', '$txtSubject', '$txtDetails')";

            // Check if the query is successful
    if(mysqli_query($conn, $sql)){
        echo "got it!";
        } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
        }
    if ($conn) {
        echo "Connected Successfully";
        header("location: index.html");
    }
    
    CloseCon($conn);
?>