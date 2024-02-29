<?php
$uname=$_POST['uname'];
$psw=$_POST['psw'];
//database connect
$conn = new mysqli('localhost','root','','phpcrud');
if($conn->connect_error){
   die("Failed to connect : ".$conn->connect_error);
}else{
   $stmt = $conn->prepare("select * from admin where uname = 'TEAM_PG'");
   $stmt->bind_param('s',$uname);
   $stmt->execute();
   $stmt_result = $stmt->get_result();
   if($stmt_result->num_rows > 0){
      $data = $stmt_result->fetch_assoc();
      if($data['psw'] == $psw){
         echo "<script>alert('Login Sucessfully');</script>";
echo "<script type='text/javascript'> document.location ='dashboard2.html'; </script>";
 
      }
   }else{
      echo "<h2>Invalid email or password</h2>";
   }
}
