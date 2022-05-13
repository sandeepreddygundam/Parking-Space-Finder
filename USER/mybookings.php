<!DOCTYPE html>
<html lang="en">
<head>
  <title>Easy Park</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
      .navbar {
    border-radius: 0px;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="images/logo.webp"  style="height:60px;margin-top:10px"/>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li  style="padding-top:15px"><a href="home.php">Home</a></li>
      <li style="padding-top:15px"><a href="parking.php">Parking</a></li>
      <li style="padding-top:15px" class="active"><a href="mybookings.php">My Bookings</a></li>
      <li style="padding-top:15px" ><a href="myprofile.php">Profile</a></li>
      <li ><a href="logout.php"><button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Logout</button></a></li>
  
    </ul>
    
    
    
  </div>
</nav>
  
<div class="container">
 
  <div class="row">
      
      <div class="col-md-12">
		    	 <h2 style="text-align:center;color:black">My Bookings</h2>

                <hr>
		 <table class="table table-striped" style="border:1px solid black">
                    
                        <tr>
                            <th>#ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Parking Name</th>
                            <th>Address</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Status</th>
                         
                           
                        </tr>
                     
                        <?php

                        session_start();

                        include 'config.php';
                        
                         $email = $_SESSION["email"];
                      
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT booking.dat,booking.bid,booking.name,booking.email,booking.phone,booking.total,parking.name as pname,address,booking.status FROM booking join parking on booking.pid=parking.pid where email='$email'";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                <td> " . $row['bid'] . "</td>
                                <td> " . $row['name'] . "</td>
                             
                                 <td> " . $row['email'] . "</td>
                                 <td> " . $row['phone'] . "</td>
                                 <td> " . $row['pname'] . "</td>
                                 <td> " . $row['address'] . "</td>
                               <td> " . $row['total'] . "$</td>
                                <td> " . $row['dat'] . "</td>
                                <td> " . $row['status'] . "</td>
                                
                                </tr> ";
                            }
                        } else {
                            echo "No Records Found";
                        }
                        $conn->close();
                        ?>
                     
                </table>
        </div>
        </div>
</div>

</body>
</html>
