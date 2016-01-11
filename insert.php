<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if($_POST) {

   $first_name = trim(stripslashes($_POST['contactName']));
   $phone_number = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $message = trim(stripslashes($_POST['contactMessage']));

   $link = mysqli_connect("localhost", "root","", "mydb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// attempt insert query execution
$sql = "INSERT INTO data VALUES ('$first_name', '$phone_number', '$subject','$message')";

if (mysqli_query($link, $sql)) {
    echo "We got your message, we will contact you soon :)";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close connection
mysqli_close($link);

//redirect back bitch
/*header("Location: localhost/donate/");
die();*/
}
?>