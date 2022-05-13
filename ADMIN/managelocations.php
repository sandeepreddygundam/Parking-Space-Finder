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
          
          <h3>Manage Locations</h3>
          
          <p style="text-align:right">
               <a href="adminhome.php" style="color:white;margin:10px;font-size:20px;text-align:left" >
              <button class="btn btn-danger" ><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back</button></a>
          </p>
          
          <p style="text-align:Left">
               <a href="addlocation.html" style="color:white;margin:10px;font-size:20px;text-align:left" >
              <button class="btn btn-danger" >Add Location</button></a>
          </p>
          
          <br/>
           <table class="table table-striped" style="border:1px solid black">
                    
                        <tr>
                            <th>Location ID</th>
                            <th>Location Name</th>
                            <th>Image</th>
                          
                            <th>Action</th>
                           
                        </tr>
                     
                        <?php



                        include 'config.php';
                 
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM location";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                <td> " . $row['lid'] . "</td>
                                <td> " . $row['name'] . "</td>
                             
                                 <td> <img src=" . $row['image'] . " style='width:100px;height:100px'  /></td>
                                
                            <td>
                            
                            <a href='editlocation.php?id=" . $row['lid'] . "&name=" . $row['name'] . "'>
                                            <img src='images/edit.jpeg' style='width:50px'/>
                                        </a>
                            
                            
                              <a href='deletelocation.php?id= " . $row['lid'] . "'><img src='images/delete.jpeg' style='width:50px'/> </a>
                 
                            </td>
                                
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
