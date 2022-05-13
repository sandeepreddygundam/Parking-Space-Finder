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
                    <h1>Payment </h1>
                    
            </div>
            
        </div>
        
        
        
 
 </div>
  
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align:left">
             <h3 style="margin-top:50px">Payment Method</h3>
        </div>
        
    </div>
       <form method="POST" action="success.php" enctype="multipart/form-data">
    <div class="row" style="margin-top:50px">
        
        <div class="col-md-8" >
            
             <div class="jumbotron" style="padding:20px">
          
        
                   
                    <div class="form-group row">

                       <div class="col-md-12">
                          <label>Name</label>
                           <input class="form-control"  id="name" name="name" type="text" placeholder="Enter Full name" required>
                           
                           <input id="pid" name="pid" type="text" value="<?php echo $_GET['id']; ?>" hidden >
                       </div>
                       
                       

                   </div>
                     <div class="form-group row">
                    <div class="col-md-6">
                         <label>Your Email</label>
                           <input class="form-control"  id="email" name="email" type="text" placeholder="Enter Email" required>
                       </div>
                       
                        <div class="col-md-6">
                         <label>Your Phone</label>
                           <input class="form-control"  id="phone" name="phone" type="text" placeholder="Enter Phone" required>
                       </div>
                       
                   </div>
                   
                   <div class="form-group row">
                    <div class="col-md-6">
                          <label for="dat" style="color:#9c9b9b;font-size:12px">Select Date</label>
                                    <br/>
                                    <input type="date" id="dat" name="dat" class="form-control" placeholder="Select Date" required>
                       </div>
                       
                        <div class="col-md-6">
                         <label>Time</label>
                           <input class="form-control"  id="tim" name="tim" type="number" placeholder="Enter Time 12:00" required>
                       </div>
                       
                   </div>
                   
                   
                   
                                  
                   
                                 <div class="form-group row">

                       <div class="col-xs-12">
                          

               <button class="btn btn-danger">Confirm and Pay</button>
                       </div>

                   </div>
                   
                   
        
          </div>
            
            
            <div class="jumbotron" style="padding:20px">
                
                <div class="radio">
  <label><input type="radio" name="optradio" checked>Direct Bank Transfer</label>
</div>
          
         <p style="text-align:justify;font-size:14px">
             Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.
         </p>
           
          </div>
            
        </div>
        
        <div class="col-md-4">
            
             <?php
                                        
                                         include 'config.php';
                           $id=$_GET['id'];
            
                            $sql = "SELECT * FROM `parking` where pid='$id' ";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-12">
                               
                               
                               <div class="jumbotron">
                               
                
                                  
                                   <img src="' . $row["image"] . '"  style="width:100%;height:250px" />
                                    
                                 
                                  
                                  <p style="margin:20px;font-size:14px;font-weight:bold"><img src="images/car.png"/>&nbsp;Parking</p>
                                    
                                    <h5 style="text-align:left">
                                    
                                     <a style="text-align:left;padding-left:20px" href="#">' . $row["name"] . '</a>
                               
                                    </h5>
                                    
                                    
                                    <hr/>
                                    
                                    <h4 style="padding-left:20px">Booking Summary</h4>
                                    
                                 
                                          
                                         <input style="margin-left:20px" type="radio" id="tot" checked name="tot" value="' . $row["p_hour"] . '">
                                        <label >Price/Hour &nbsp; &nbsp;' . $row["p_hour"] . '$</label><br>
                                        <input style="margin-left:20px" type="radio" id="tot" name="tot" value="' . $row["p_month"] . '">
                                        <label  >Price/Month &nbsp;&nbsp; ' . $row["p_month"] . '$</label><br>
                                      
                                   
                                   
                       
                                 </div>
                                   
                                    
                                  
                                   
                                </div>
                                
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
 
 
 </form>
</div>

</body>
</html>
