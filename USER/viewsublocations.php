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
      <li class="active" style="padding-top:15px"><a href="home.php">Home</a></li>
      <li style="padding-top:15px"><a href="parking.php">Parking</a></li>
      <li style="padding-top:15px"><a href="mybookings.php">My Bookings</a></li>
      <li style="padding-top:15px"><a href="myprofile.php">Profile</a></li>
      <li ><a href="logout.php"><button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Logout</button></a></li>
  
    </ul>
    
    
    
  </div>
</nav>

<div class="container-fluid" style="background-image: url('images/bg.jpeg'); display: block;
height: 300px;
width: 100%; background-repeat: no-repeat;
    background-size: cover;opacity: 1;">
        <div class="row">
            <div class="col-md-12" style="margin-top:100px;text-align:center;color:white">
                   
            </div>
            
        </div>
        
        
        
 
 </div>
  
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align:center">
             <h1 style="margin-top:50px">Parking Available</h1>
        </div>
        
    </div>
    
    <div class="row" style="margin-top:30px">
         <?php
                                        
                                         include 'config.php';
                           
                           $id=$_GET['id'];
            
                            $sql = "SELECT * FROM `sublocation` where lid='$id'";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                           
                               <div class="col-md-3">
                               
                              
                
                                   <a style="text-align:center" href="viewparking.php?id='. $row['slid'] .'">
                                   <div class="jumbotron">
                                   <img src="' . $row["image"] . '"  style="width:100%;height:300px" />
                                   <h3 style="text-align:left">
                                   
                                   
                                   <button class="btn btn-default form-control">' . $row["name"] . '</button>
                                   </h3>
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
