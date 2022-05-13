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
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}
      .navbar {
    border-radius: 0px;
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
      <li class="active" style="padding-top:15px"><a href="index.php">Home</a></li>
     <li style="padding-top:15px"><a href="about.html">About</a></li>
      <li style="padding-top:15px"><a href="help.html">Help</a></li>
      <li style="padding-top:15px"><a href="how.html">How It Works</a></li>
      <li style="padding-top:15px"><a href="contact.html">Contact</a></li>
      <li ><a href="login.html"><button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Login</button></a></li>
      <li><a href="register.html"><button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-user"></span> Sign Up</button></a></li>
    </ul>
    
    
    
  </div>
</nav>
  

<div class="container-fluid" style="background-image: url('images/bg.jpeg'); display: block;
height: 500px;
width: 100%; background-repeat: no-repeat;
    background-size: cover;opacity: 1;">
        <div class="row">
            <div class="col-md-12" style="margin-top:100px;text-align:center;color:white">
                    <h1>Find and Book Parking in Seconds. </h1>
                    <h3>Book the Best Spaces & SaveUp to 50%</h3>
            </div>
            
        </div>
        
        
            <div class="row" >
                <div class="container">
                    
                    <div class="row" style="height:80px;background-color:white;margin-top:40px;padding:10px;border-radius:10px">
                        
                         <form method="GET" action="viewslocations.php">
                             
                            
		                   
                             <div class="col-md-9">
                                 
                                 <label style="color:#9c9b9b;font-size:12px">Location Name</label>
                           
                                         
                                        <select class="form-control" name="id" required>
                                        <?php
                                        include'config.php';

                                        $sql = "SELECT * FROM location";
                                        $result = $conn->query($sql);
                        
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo '
                                            
                                                <option value="' . $row["lid"] . '">' . $row["name"] . '</option>
                        
                                        
                                            ';
                                            }
                                        } else {
                                            echo "No Locations Found";
                                        }
                                        $conn->close();


                                        ?>

                                    </select>
                                         
                                         
                        
                             </div>
                            
                             
                             
                             <div class="col-md-3">
                                 
                                  <button class="btn btn-danger form-control" style="margin-top:22px" >Search</button>
                       
                             </div>
                             
                             
                             
                             
                             
                             
                         </form>
                    </div>
                    
                  
                        
                
                </div>
                
                </div>
 
 </div>
  
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align:center">
             <h1 style="margin-top:50px">Explore Parking</h1>
        </div>
        
    </div>
    
    <div class="row">
         <?php
                                        
                                         include 'config.php';
                           
            
                            $sql = "SELECT * FROM `location`";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-3">
                               
                               <div class="jumbotron">
                               
                
                                   <a style="text-align:center" href="viewslocations.php?id='. $row['lid'] .'">
                                   <img src="' . $row["image"] . '"  style="width:100%;height:300px" />
                                    
                                  </a>
                                    
                                    <h3 style="text-align:left">
                                    
                                     <a style="text-align:left" href="#">' . $row["name"] . '</a>
                               
                                    </h3>
                                    
                                  
                                   
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

</body>
</html>
