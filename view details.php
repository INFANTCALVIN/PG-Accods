 <?php
 session_start();
 include('create.php');

if (isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$query="SELECT * From register WHERE email = '$email'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
 
 if ($total==1) {
    $_SESSION['email']=$email;
    header('location:in.php');
 }
else{
    echo "login failed" ;
}
}



else{
    $SELECT = "SELECT email From register Where email = ? Limit 1";
    $INSERT = "INSERT Into register (name, email, password)
    values(?,?,?)";
 
    //Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
 
    //checking username
    if ($rnum==0) {
       $stmt->close();
       $stmt = $conn->prepare($INSERT);
       $stmt->bind_param("sss", $name,$email,$password);
       $stmt->execute();
       echo "New record inserted successfully";
 
    }else{
       echo "Someone already register using this email";
    }
    $stmt->close();
    $conn->close();
  }
 }else{
  echo "All field are required";
  die();
 }
 ?>
 <?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 if (!empty($name) || !empty($email) || !empty($password))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "phpcrud";

 // Database connectivity here
 $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
 if (mysqli_connect_error()){
    die('Connect Error ('.mysqli_connect_errno().')'
    .mysqli_connect_error());
 }
 if (isset($_POST['register'])) {
   // Get the form data
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   // TODO: Perform validation on the form data
   // ...

   // Hash the password
   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   // TODO: Save the username and hashed password to your database
   // ...

   // Redirect to login page
   header("Location: dashboard2.html");
   exit();
}
}
?>
 

<?php
// Check if the form is submitted
if (isset($_POST['login'])) {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // TODO: Retrieve the hashed password from the database based on the provided username
    // ...

    // Verify the password
    if (password_verify($password, $hashedPassword)) {
        // Password is correct, create a session
        session_start();
        $_SESSION['email'] = $email;

        // Redirect to the dashboard or any other authenticated page
        header("Location: in.php");
        exit();
    } else {
        // Password is incorrect, show an error message
        echo "Invalid email or password.";
    }
}
?>
<?php
// Database connection settings
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'phpcrud';

// Create a new PDO instance
try {
    $db = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}




// Prepare the SQL statement
$sql = "INSERT INTO register (name,email,password) VALUES (:name,:email,:password)";

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare and execute the statement
$stmt = $db->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $hashedPassword);
$stmt->execute();

// Prepare the SQL statement
$sql = "SELECT password FROM register WHERE email = :email";

// Prepare and execute the statement
$stmt = $db->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Fetch the hashed password from the database
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$hashedPassword = $row['password'];

?>






<?php
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "phpcrud"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// Assuming you have a form with input fields: username and password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform any necessary validation checks on the input data

    // Hash the password (optional)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $sql = "INSERT INTO register (name,email,password) VALUES ('$name', '$email',$hashedPassword')";
    
    if ($conn->query($sql) === true) {
        echo "Registration successful.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>






<?php
// Assuming you have a form with input fields: username and password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve the user from the database
    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            echo "Login successful.";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid username.";
    }
}

$conn->close();
?>

<?php
session_start();
include('create.php');

if (isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$query="SELECT * From register WHERE email = '$email'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total==1) {
   $_SESSION['email']=$email;
   header('location:in.php');
}
else{
   echo "login failed" ;
}
}




<input type="file" placeholder="choose file" required >











----------register





<?php 
//Databse Connection file
$con=mysqli_connect("localhost", "root", "", "phpcrud");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
if(isset($_POST['Register']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $tenant=$_POST['text2'];

    $email=$_POST['email'];
    $contno=$_POST['contactno'];
    $address=$_POST['address'];
	$hostel=$_POST['text1'];
    $room=$_POST['room'];
    $checkin=$_POST['cin'];
    $checkout=$_POST['cout'];
    $password=$_POST['password'];
    $password = md5($password);
 $ppic=$_FILES["profilepic"]["name"];
// get the image extension
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"imagecard/".$imgnewfile);

}
// Query for data insertion
//$query=mysqli_query($con, "insert into users  (FirstName,LastName, MobileNumber, Email, Address,Hostel,Tenant,ProfilePic) value('$fname','$lname', '$contno', '$email', '$add','$hostel','$tenant','$imgnewfile' )");
//if ($query) {
//echo "<script>alert('You have successfully inserted the data');</script>";
//echo "<script type='text/javascript'> document.location ='new1.html'; </script>";
//} else{
//echo "<script>alert('Something Went Wrong. Please try again');</script>";
//}}
//}

$query=mysqli_query($con, "insert into users (firstname,lastname, dob,gender,tenant,email,contactno,address,hostel, room, checkin,checkout,password,Photo) value('$fname','$lname', '$dob','$gender','$tenant','$email','$contno','$address','$hostel','$room','$checkin','$checkout','$password','$imgnewfile' )");
if ($query) {
    echo "<script>alert('BOOKING SUCCESSFULLY');</script>";
    echo "<script type='text/javascript'> document.location ='dashboard2.html'; </script>";
    } else{
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }}
    


?>














<?php

$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $tenant=$_POST['text2'];

    $email=$_POST['email'];
    $contno=$_POST['contactno'];
    $address=$_POST['address'];
	$hostel=$_POST['text1'];
    $room=$_POST['room'];
    $checkin=$_POST['cin'];
    $checkout=$_POST['cout'];
    $password=$_POST['password'];
    $password = md5($password);
 $ppic=$_FILES["profilepic"]["name"];


 
//database connection
$conn = new mysqli('localhost','root','','phpcrud');
if($conn->connect_error){
   die('connection failed :' .$conn->connect_error);

}else{


    // get the image extension
 $extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
 // allowed extensions
 $allowed_extensions = array(".jpg","jpeg",".png",".gif");
 // Validation for allowed extensions .in_array() function searches an array for a specific value.
 if(!in_array($extension,$allowed_extensions))
 {
 //rename the image file
 $imgnewfile=md5($imgfile).time().$extension;
 // Code for move image into directory
 move_uploaded_file($_FILES["profilepic"]," imagecard/ ".$imgnewfile);
 
 }








    $stmt = $conn->prepare("insert into users(firstname,lastname, dob,gender,tenant,email,contactno,address,hostel, room, checkin,checkout,password,Photo) values(?, ?, ?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssisssissiiiss','$fname','$lname', '$dob','$gender','$tenant','$email','$contno','$address','$hostel','$room','$checkin','$checkout','$password','$imgnewfile' );
   $stmt->execute();

   echo "<script>alert('Register Sucessfully');</script>";
echo "<script type='text/javascript'> document.location ='in.php'; </script>";
 
   $stmt->close();
   $conn->close();
}

?>







//
 //session_start();
//include('dbconnection.php');
if(isset($_POST['Register']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $tenant=$_POST['text2'];

    $email=$_POST['email'];
    $contno=$_POST['contactno'];
    $address=$_POST['address'];
	$hostel=$_POST['text1'];
    $room=$_POST['room'];
    $checkin=$_POST['cin'];
    //$checkout=$_POST['cout'];
    //$password=$_POST['password'];
   // $password = md5($password);
 //$ppic=$_FILES["profilepic"]["name"];
// get the image extension
// $extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
// allowed extensions
//$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
//if(!in_array($extension,$allowed_extensions))
//{
//echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
//}
//else
//{
//rename the image file
//$imgnewfile=md5($imgfile).time().$extension;
// Code for move image into directory
//move_uploaded_file($_FILES["profilepic"]["tmp_name"],"imagecard/".$imgnewfile);

//}
//$query="INSERT into users(firstname,lastname, dob,gender,tenant,email,contactno,address,hostel, room, checkin,checkout,password,Photo)  values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
//$stmt = $mysqli->prepare($query);
//$rc=$stmt->bind_param('ssisssissiiiss',$fname,$lname, $dob,$gender,$tenant,$email,$contno,$address,$hostel,$room,$checkin,$checkout,$password,$imgnewfile );
//$stmt->execute();
   // echo"<script>alert('Student has been Registered!');</script>";
}




// Query for data insertion
//$query=mysqli_query($con, "insert into users  (FirstName,LastName, MobileNumber, Email, Address,Hostel,Tenant,ProfilePic) value('$fname','$lname', '$contno', '$email', '$add','$hostel','$tenant','$imgnewfile' )");
//if ($query) {
//echo "<script>alert('You have successfully inserted the data');</script>";
//echo "<script type='text/javascript'> document.location ='new1.html'; </script>";
//} else{
//echo "<script>alert('Something Went Wrong. Please try again');</script>";
//}}
//}




//$query=mysqli_query($con, "insert into users (firstname,lastname, dob,gender,tenant,email,contactno,address,hostel, room, checkin,checkout,password,Photo) value('$fname','$lname', '$dob','$gender','$tenant','$email','$contno','$address','$hostel','$room','$checkin','$checkout','$password','$imgnewfile' )");
//if ($query) {
  //  echo "<script>alert('BOOKING SUCCESSFULLY');</script>";
    //echo "<script type='text/javascript'> document.location ='dashboard2.html'; </script>";
    //} else{
   // echo "<script>alert('Something Went Wrong. Please try again');</script>";
   // }}
    





   if
    (isset($_POST['img_submit'])){

$img_name=$_FILES["imagecard"]["name"];
   $tmp_img_name=$_FILES['imagecard']['tmp_name'];
   $folder='upload/';
   move_uploaded_file($tmp_img_name,$folder.$img_name);
    }