<?php
$con=new mysqli("localhost","root","","addworks");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work done</title>
    <link rel="shortcut icon" type="image" href="gct1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css ">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,700&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
<style>
    .ml:hover{
       background-color:white;
    }
</style>

</head>
<body>
    <!--header area start-->
    <header style="height:200px; background-color: gainsboro; padding-top:20px; paddin-bottom:30px;">
    <img src="1.png" width=450px height=150px class="text-primary my-3 float-start">
 <center>  <h1 class="mt-3" style="font-size:65px; font-family: 'Noto Serif', serif; margin-right:250px;">ITRM SOFTWARE</h1></center>
   <center><h2 style="font-size:25px; color:orange; font-family: 'Lobster', cursive; margin-right:250px;">Daily Tickets & Stock Management System</h2></center>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div id="sidebar" style="height: 940px;">
        <div class="nav" style="width: 250px;">
        <a class="nav-link nav-item py-3" style="font-size:15px;" href="dashboard.php">
                <i class="fas fa-laptop-house" style="font-size:20px; margin-right:10px;"><span style="margin-left:10px;">DASHBOARD</span></i>
                </a>
            <li class="nav-item dropdown" style="width: 250px;">
            <a class="nav-link nav-item py-3" style="font-size:15px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-layer-group" style="font-size:20px; margin-right:10px;"><span style="margin-left:10px;">STOCK</span></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><b><i class="far fa-folder-open mx-2"></i>ITRM STOCKS</b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ITRM STOCKS
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="newaccessionentry.php"><b>1. NEW ACCESSION STOCK ENTRY</b></a></li>
                             
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="report.php"><b>2. REPORTS</b></a></li>
                            </ul>
                        </li>
                   </li>
                    <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><b><i class="fas fa-coins mx-2"></i>DEPARTMENT STOCKS</b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ITRM STOCKS
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="department_stock_entry.php"><b>1.DEPARTMENT STOCK ENTRY</b></a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departments.php"><b>2. DEPARTMENTS</b></a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departmentreport.php"><b>3. REPORTS</b></a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departmovementscrap.php"><b>4. MOVEMENT</b></a></li>
                            </ul>
                        </li>
                   </li>
                  
                     

                   <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><i class="fas fa-tools mx-2"></i><b>SERVICES <small>(Outsources)</small></b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>SERVICES <small>(Outsources)</small>
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                            <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="outsrc.php"><b>1.SEND TO / RETURN</b></a></li>
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="servicesreport.php"><b>2. REPORTS</b></a></li>
                            </ul>
                        </li>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li><a class="dropdown-item nav-item py-2" style="font-size:15px;" href="movement.php"><h6 class="scrap" style="font-weight:bolder;"><i class="fas fa-angle-double-right"></i>MOVEMENT</h6></a></li>
                   <li><hr class="dropdown-divider"></li>
                   <li><a class="dropdown-item nav-item py-2" style="font-size:15px;" href="scrap.php"><h6 class="scrap" style="font-weight:bolder;"><i class="fas fa-prescription-bottle mx-2"></i>SCRAP</h6></a></li>
                  </ul>
                  </li>
                </ul>
                <a class="nav-link nav-item py-3" style="font-size:15px; width:250px;" href="work.php">
                <i class="far fa-calendar-alt" style="font-size:20px; margin-right:10px;"><span style="margin-left:10px;"><b>WORKDONE</b></span></i>
                </a>
              </li>
        </div>

    <!--sidebar end-->    
    <div id="content" class="container" style="height:750px;">

    <div class="row my-4">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <center><h3 class="text-warning my-2" style="font-family: 'Crimson Text', serif;">Add Works</h3></center>
            <form action="work.php" method="post">
            <div class="form-group my-2">
                <label>Worker Name <span style="color:red;">*</span></label>
                <input type="text" name="wname" class="form-control" placeholder="Enter Work Details">
                </div>
                <div class="form-group my-2">
                <label>Work Details<span style="color:red;">*</span></label>
                <input type="text" name="Work" class="form-control" placeholder="Enter Work Details">
                </div>
                <div class="form-group my-2">
                <label>Starting date<span style="color:red;">*</span></label>
                <input type="datetime-local" name="std" class="form-control">
                </div>
                <div class="form-group my-2">
                <label>Ending date<span style="color:red;">*</span></label>
                <input type="datetime-local" name="etd" class="form-control">
                </div>
                <div class="form-group my-2">
                    <label for="work">Working Status<span style="color:red;">*</span></label>
                    <select class="form-select" name="workstatus">
                    <option value="Incomplete">Incomplete</option>
                    <option value="complete">complete</option></select>
                </div>
                
                <div class="form-group my-2">
                <label>S.No</label>
                <input type="number" name="Id" class="form-control" placeholder="Only use for Updation">
                </div>
                <div class="form-group my-2">
                    <label for="work">Working Status<span style="color:red;">*</span></label>
                    <select class="form-select" name="workstatus">
                    <option value="Incomplete">Incomplete</option>
                    <option value="complete">complete</option></select>
                </div>
                <button class="btn btn-success my-2" name="update">update</button>
                <div class="form-group float-end my-1 mb-3">
                    <button class="btn btn-success float-end" name="Add">Add</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
   <?php 
   $con=new mysqli("localhost","root","","addworks");
   if(isset($_POST['Add']))
   {
       $wname=$_POST['wname'];
       $Work=$_POST['Work'];
       $std=$_POST['std'];
       $etd=$_POST['etd'];
       $workstatus=$_POST['workstatus'];
       $sql="INSERT INTO addworks(wname,std,Work,etd,workstatus) VALUES('$wname','$std','$Work','$etd','$workstatus');";
       $result=mysqli_query($con,$sql);
       if($result)
       {
           echo "<script>alert('Inserted')</script>";
       }
       else
       {
           echo "failed";
       }
   }

   ?>




<?php 
   $con=new mysqli("localhost","root","","addworks");
   if(isset($_POST['update']))
   {
       $workstatus=$_POST['workstatus'];
       $Id=$_POST['Id'];
       $sql="UPDATE addworks SET workstatus='$workstatus' WHERE Id = '$Id'";
       if($con->query($sql))
       {
           echo "<script>alert('updated')</script>";
       }
       else
       {
           echo "failed";
       }
   }
   ?>
</body>
</html>
