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

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}

.container .jumbotron, .container-fluid .jumbotron {
    padding-right: 5px;
    padding-left: 4px;
}
.jumbotron {
    padding-top: 5px;
    padding-bottom: 5px;
    box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
    box-sizing: border-box;
}

.jumbotron {
    padding-top: 5px;
    padding-bottom: 25px;
    margin-bottom: 25px;
    color: inherit;
    background-color: #fff;
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
      <li class="active" style="padding-top:15px"><a href="help.html">Parking</a></li>
      <li style="padding-top:15px"><a href="mybookings.php">My Bookings</a></li>
      <li style="padding-top:15px"><a href="myprofile.php">Profile</a></li>
      <li ><a href="logout.php"><button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Logout</button></a></li>
  
    </ul>
    
    
    
  </div>
</nav>

<div class="container-fluid" style="background-image: url('images/bg.jpeg'); display: block;
height: 200px;
width: 100%; background-repeat: no-repeat;
    background-size: cover;opacity: 1;">
        <div class="row">
            <div class="col-md-12" style="margin-top:30px;text-align:center;color:white">
                    <h1>Find and Book Parking in Seconds. </h1>
                    <h3>Book the Best Spaces & SaveUp to 50%</h3>
            </div>
            
        </div>
        
        
        
 
 </div>
  
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align:center">
             <h1 style="margin-top:50px">Parking Available</h1>
        </div>
        
    </div>
    
    <div class="row" style="margin-top:50px">
         <?php
                                        
                                         include 'config.php';
                           $id=$_GET['id'];
            
                            $sql = "SELECT * FROM `parking` where slid='$id' ";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-3">
                               
                               
                                <a style="text-align:left" href="payment.php?id='. $row['pid'] .'">
                               <div class="jumbotron">
                               
                
                                  
                                   <img src="' . $row["image"] . '"  style="width:100%;height:250px" />
                                    
                                 
                                  
                                  <p style="margin:20px;font-size:14px;font-weight:bold"><img src="images/car.png"/>&nbsp;Parking</p>
                                    
                                    <h5 style="text-align:left">
                                    
                                     <a style="text-align:left" href="#">' . $row["name"] . '</a>
                               
                                    </h5>
                                    
                                    
                                    <hr/>
                                    
                                    <table style="width:100%">
                                    <tr style="width:100%">
                                    <td style="width:50%;padding-left:20px">
                                        <p style="margin:0px;font-size:14px;font-weight:bold">
                                        <span style="text-align:left">
                                        ' . $row["p_hour"] . '<br/>
                                        Per/Hour
                                        </span>
                                        </p>
                                    </td>
                                    <td style="width:50%;padding-left:20px">
                                    <p style="margin:0px;font-size:14px;font-weight:bold">
                                    <span style="text-align:left">
                                    ' . $row["p_month"] . '<br/>
                                    Per/Month
                                    </span>
                                    </p>
                                    </td>
                                    </tr>
                                    </table>
                                   
                                   <a style="text-align:left" href="payment.php?id='. $row['pid'] .'">
                                   <button class="btn btn-danger" style="margin:10px">Book Now</button>
                                    </a>
                                  
                                   
                                </div>
                                
                                 </a>
                              </div>
                                
                            
                                ';
                                }
                            } else {
                                echo "No Locations Found";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
    </div>
 
 
</div>

</body>
</html>
