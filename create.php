<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

//database connection
$conn = new mysqli('localhost','root','','phpcrud');
if($conn->connect_error)
{
   die('connection failed :' .$conn->connect_error);

}else
{
    $stmt = $conn->prepare("insert into register(name,email,password) values(?, ?, ?)");
    $stmt->bind_param('sss',$name,$email,$password);
    $stmt->execute();

   echo "<script>alert('Register Sucessfully');</script>";
   echo "<script type='text/javascript'> document.location ='login.html'; </script>";
 
   $stmt->close();
   $conn->close();
}
?>