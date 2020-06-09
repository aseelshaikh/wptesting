<?php
include_once 'dbconn.php';
if(isset($_POST['submit']))
{    
     #$id = $_POST['id'];
     $name = $_POST['name'];
     $salary = $_POST['salary'];
     $email = $_POST['email'];
     #$mobile = $_POST['mobile'];

     $sql = "INSERT INTO academy (name,salary,email)
     VALUES ('$name','$salary','$email')";

     if (mysqli_query($conn, $sql)) {
	     echo "New record has been added successfully !";
	     echo "New inserted ID is: -" .$conn-> insert_id;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
