<?php
$email=$_POST['email'];
$password=$_POST['password'];
//database connect
$conn = new mysqli('localhost','root','','phpcrud');
if($conn->connect_error){
   die("Failed to connect : ".$conn->connect_error);
}else{
   $stmt = $conn->prepare("select * from register where email = ?");
   $stmt->bind_param('s',$email);
   $stmt->execute();
   $stmt_result = $stmt->get_result();
   if($stmt_result->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['password'] == $password){
         echo "<script>alert('Login Sucessfully');</script>";
echo "<script type='text/javascript'> document.location ='in.php'; </script>";
 
      }
   }else{
      echo "<h2>Invalid email or password</h2>";
   }
}
