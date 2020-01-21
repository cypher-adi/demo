<?php
// Database connection
$server="localhost";
$username="root";
$password="";
$dbname="cs";

$conn= mysqli_connect( $server , $username , $password , $dbname);
if(!$conn)
{
    echo "Connection Error:".mysql_connect_error();
    
}
// Data insertion
if(isset($_POST['submit'])){
    
$name = $_POST['name'];
$name = strip_tags($name);
$name = htmlspecialchars($name);

$email = $_POST['email'];
$email = htmlspecialchars($email);

$comments = $_POST['message'];
$comments = strip_tags($comments);
$comments = htmlspecialchars($comments);

   if(!empty($name) && !empty($email)){

        $sql="INSERT INTO contact(name,email,comments) VALUES('$name','$email','$comments')";
        echo "Your query has been sent.";
   }
    else{
          echo "Error in sending query.";
        }
    
}
?>