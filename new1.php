<?php
include('dbconnection.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  Admin Dashboard </title>
    <link rel="stylesheet" href="new1.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard2.html" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="new.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Lessor Details</span>
          </a>
        </li>
        <li>
          <a href="new1.php" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Tenant Details</span>
          </a>
        </li>
       

        <li class="log_out">
          <a href="index.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Tenant Details</span>
      </div>
    </nav>


    <section class="view">
      
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #000;
        background: #f5f5f5;
		    font-family: 'Roboto', sans-serif;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
  .container{
    padding: 50px 0;
    margin: 2px 60px; 
  }
    .table-wrapper {
        background: #fff;
        padding: 20px;
        margin: 50px 10px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .pagination {
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 4px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
        background: #59bdb3;
    }
    .pagination li.active a:hover {        
        background: #45aba0;
    }
    .pagination li:first-child a, .pagination li:last-child a {
        padding: 0 10px;
    }
    .pagination li.disabled a {
        color: #ccc;
    }
    .pagination li i {
        font-size: 17px;
        position: relative;
        top: 1px;
        margin: 0 2px;
    }
</style>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
							<th>Hostel Name</th>
							<th>Tenant Type</th>
              <th>Gender</th>
              <th>Aadharno</th>
              <th>Duration</th>
              <th>Members</th>
              
							
					</tr>
                </thead>

                
                <tbody>
                <?php
$ret=mysqli_query($con,"select * from users");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                      
                        <td><?php  echo $row['firstname'];?> <?php  echo $row['lastname'];?></td>
                        <td><?php  echo $row['email'];?></td> 
                        <td><?php  echo $row['address'];?></td> 
                        <td><?php  echo $row['contactno'];?></td> 
                        <td><?php  echo $row['Roomname'];?></td>
                        <td><?php  echo $row['tenant'];?></td>
                        <td><?php  echo $row['gender'];?></td>
                        <td><?php  echo $row['Aadharno'];?></td>
                        <td><?php  echo $row['duration'];?></td>
                        <td><?php  echo $row['Members'];?></td>
                  


 
                    </tr>
                    <?php 
$cnt=$cnt+1;
} } else {?>

<?php } ?>                 
                
                
                </tbody>
            </table>
           
        </div>
    </div>     

    </section>
  

    
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>