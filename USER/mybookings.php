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
       <li  style="padding-top:15px"><a href="lcontact.html">Contact</a></li>
      <li style="padding-top:15px"><a href="parking.php">Parking</a></li>
      <li class="active" style="padding-top:15px"><a href="mybookings.php">My Bookings</a></li>
      <li style="padding-top:15px"><a href="myprofile.php">Profile</a></li>
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
                              <th>Start Time</th>
                                <th>End Time</th>
                                  <th>Hours</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Exit</th>
                         
                           
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

                        $sql = "SELECT booking.etime,booking.tim,booking.hours,booking.dat,booking.bid,booking.name,booking.email,booking.phone,booking.total,parking.pid,parking.name as pname,address,booking.status FROM booking join parking on booking.pid=parking.pid where email='$email'";
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
                               <td> " . $row['tim'] . "</td>
                               <td> " . $row['etime'] . "</td>
                               <td> " . $row['hours'] . "</td>
                               
                                <td> " . $row['dat'] . "</td>
                                <td> " . $row['status'] . "</td>
                                
                                 <td> <a href='exit.php?bid=" . $row['bid'] . "&pid=" . $row['pid'] . "'>Exit</a></td>
                                
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

<div class="container-fluid" style="background-color:#f7f7f7">
    <div class="row" style="margin-top:70px;margin-bottom:50px">
        <div class="col-md-1">
            
           
        </div>
        
         <div class="col-md-4">
             
             
              <img src="images/loggg.jpeg"  style="height:40px"/>
              <br/>
              <br/>
            
            <p style="text-align:justify">
            The parking experience of the future will offer absolute ease of access, autonomy and multiple options for drivers to select the service that really meets their needs, thus relieving the stress of parking. Tested on traffic sites and in all types of urban environments, Easypark is able to offer all of this, optimizing parking performance and profitability.
                
            </p>
             
           
            
        </div>
        
         <div class="col-md-3" style="padding-left:50px">
             
               <h3>Quick Links</h3>
             <hr/>
             
             <a href="about.html">About Us</a>
             <br/>  <br/>
             <a href="register.html">Sign Up</a>
              <br/>  <br/>
             <a href="login.html">Log In</a>
              <br/>  <br/>
             <a href="help.html">Help Center</a>
            
        </div>
        <div class="col-md-3" style="padding-left:50px">
             
               <h3>Contact with us</h3>
             <hr/>
             
           
                
                <span class="glyphicon glyphicon-map-marker"></span> &nbsp; montreal, quebec -400104 <br>  <br/>
                
                <span class="glyphicon glyphicon-envelope"></span> &nbsp; easypark@gmail.com <br>
                  <br/>
                <span class="glyphicon glyphicon-earphone"></span> &nbsp; +438-456-7890 <br>  <br/>
                
                 
            
        </div>
            <div class="col-md-1">
            
        </div>
        
    </div>
    
</div>
</body>
</html>
