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
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="images/logo.webp"  style="height:60px;margin-top:10px"/>
    </div>
    <ul class="nav navbar-nav navbar-right">
     
      <li ><a href="logout.php"><button class="btn btn-danger navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Logout</button></a></li>
    
    </ul>
    
    
    
  </div>
</nav>
  
<div class="container-fluid">
  <div class="row">
      <div class="col-md-3" style="height:700px;background-color:#d9534f">
          
          
   
     <div class="form-group">
         
      <!--<img src="images/logo.webp"  style="height:60px;margin-top:10px"/>-->
  
         </div>
          <div class="form-group">
               <hr/>
          </div>
           <div class="form-group">
               <h2 style="color:white">Dashboard</h2>
          </div>
     <a href="managelocations.php" style="color:white;margin:10px;font-size:20px;text-align:left" >
         
         <button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">Location</button>
         </a><br/>
     <a href="managesublocations.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">Sub Location</button></a><br/>
      <a href="manageparkings.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">Parking</button></a><br/>
      <a href="viewallbookings.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">All Bookings</button></a><br/>
     <a href="viewusers.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">User Information</button></a><br/>
      <a href="viewcontacts.php" style="color:white;margin:10px;font-size:20px;text-align:left"><button class="btn btn-danger form-control" style="text-align:left;font-size:20px;height:70px">Contact Information</button></a><br/>
          
      </div>
      <div class="col-md-9">
          
          <h3>Update Parking</h3>
          
          <p style="text-align:right">
               <a href="manageparkings.php" style="color:white;margin:10px;font-size:20px;text-align:left" >
              <button class="btn btn-danger" ><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back</button></a>
          </p>
          
        
          <br/>
          
           <div class="jumbotron">
          
           <form method="POST" action="editparkings.php" enctype="multipart/form-data">
                   
                    <div class="form-group row">
                        
                        
                        <div class="col-md-6">
                          <label>Location Id</label>
                           <input class="form-control"  id="pid" name="pid" type="text" value="<?php echo $_GET['id'] ?>" placeholder="Enter Location name" readonly required>
                       </div>

                       <div class="col-md-6">
                          <label>Location Name</label>
                           <input class="form-control"  id="name" name="name" type="text" value="<?php echo $_GET['name'] ?>" placeholder="Enter Location name" required>
                       </div>
                       
                      
                   </div>
                   
                   
                   <div class="form-group row">
                        
                        
                        <div class="col-md-6">
                          <label>Address</label>
                           <input class="form-control"  id="address" name="address" type="text" value="<?php echo $_GET['address'] ?>" placeholder="Enter Address" required>
                       </div>

                       <div class="col-md-6">
                          <label>Per Hour</label>
                           <input class="form-control"  id="p_hour" name="p_hour" type="text" value="<?php echo $_GET['p_hour'] ?>" placeholder="Enter Price" required>
                       </div>
                       
                      
                   </div>
                   
                    <div class="form-group row">
                        
                     
                       <div class="col-md-6">
                          <label>Per Month</label>
                           <input class="form-control"  id="p_month" name="p_month" type="text" value="<?php echo $_GET['p_month'] ?>" placeholder="Enter Price" required>
                       </div>
                       
                      
                   </div>
                   
                   
                                 <div class="form-group row">

                       <div class="col-xs-12">
                          

               <button class="btn btn-danger">Update</button>
                       </div>

                   </div>
                   
                   
        
               </form>
          </div>
          
      </div>
  </div>
</div>

</body>
</html>
