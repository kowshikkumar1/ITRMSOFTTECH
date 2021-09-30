<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movement</title>
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
    
    <div id="content" style="margin-left:375px;height:780px;">
        <div class="container">
        <h3 class="text-warning" align="center">Department Movement</h3>
          <form action="departmovementscrap.php" method="post">
          <label class="my-2">Date<span style="color:red">*</span></label>
          <input type="datetime-local" class="form-control" name="Date" id="">

          <label class="my-2">From<span style="color:red">*</span></label>
          <select class="form-select" aria-label="Default select example" name="Froms">
          <option selected>-- Choose --</option>
          <option value="CSE">CSE</option>
          <option value="AI & DS">AI & DS</option>
          <option value="EEE">EEE</option>
          <option value="ECE">ECE</option>
          <option value="ROBOTICS & AUTOMATIONS">ROBOTICS & AUTOMATIONS</option>
          <option value="MECHANICAL">MECHANICAL</option>
          <option value="CIVIL">CIVIL</option>
          <option value="AGRI">AGRI</option>
          <option value="FOOD TECHNOLOGY">FOOD TECHNOLOGY</option>
          <option value="BIO MEDICAL">BIO MEDICAL</option>
          <option value="BIO TECHNOLOGY">BIO TECHNOLOGY</option>
          <option value="CHEMICAL ENGINEERING">CHEMICAL ENGINEERING</option>
          <option value="MBA">MBA</option>
          <option value="ENGLISH COMMUNICATION LAB">ENGLISH COMMUNICATION LAB</option>
          <option value="GREAT I CENTER">GREAT I CENTER</option>
          <option value="GCT EXAM CELL">GCT EXAM CELL</option>
          <option value="GCE EXAM CELL">GCE EXAM CELL</option>
          <option value="CENTRAL LIBRARY">CENTRAL LIBRARY</option>
          <option value="FIRST YEAR CO-ORDINETER">FIRST YEAR CO-ORDINETER</option>
          <option value="PLACEMENT CELL">PLACEMENT CELL</option>
          <option value="OFFICE">OFFICE</option>
          <option value="CHAIRMAN CABIN">CHAIRMAN CABIN</option>
          <option value="CAO CABIN">CAO CABIN</option>
          <option value="ADMISSION CELL AND CERTIFICATE SEC">ADMISSION CELL AND CERTIFICATE SEC</option>
          <option value="RECEPSION">RECEPSION</option>
          <option value="TRANSPORT DIVISION">TRANSPORT DIVISION</option>
          <option value="MAIN GATE">MAIN GATE</option>
          <option value="HOSTELS">HOSTELS</option>
          </select>

          <label class="my-2">To<span style="color:red">*</span></label>
          <select class="form-select" aria-label="Default select example" name="Tos">
          <option selected>-- Choose --</option>
          <option value="MOVE TO SCRAP">MOVE TO SCRAP</option>
          <option value="CSE">CSE</option>
          <option value="AI & DS">AI & DS</option>
          <option value="EEE">EEE</option>
          <option value="ECE">ECE</option>
          <option value="ROBOTICS & AUTOMATIONS">ROBOTICS & AUTOMATIONS</option>
          <option value="MECHANICAL">MECHANICAL</option>
          <option value="CIVIL">CIVIL</option>
          <option value="AGRI">AGRI</option>
          <option value="FOOD TECHNOLOGY">FOOD TECHNOLOGY</option>
          <option value="BIO MEDICAL">BIO MEDICAL</option>
          <option value="BIO TECHNOLOGY">BIO TECHNOLOGY</option>
          <option value="CHEMICAL ENGINEERING">CHEMICAL ENGINEERING</option>
          <option value="MBA">MBA</option>
          <option value="ENGLISH COMMUNICATION LAB">ENGLISH COMMUNICATION LAB</option>
          <option value="GREAT I CENTER">GREAT I CENTER</option>
          <option value="GCT EXAM CELL">GCT EXAM CELL</option>
          <option value="GCE EXAM CELL">GCE EXAM CELL</option>
          <option value="CENTRAL LIBRARY">CENTRAL LIBRARY</option>
          <option value="FIRST YEAR CO-ORDINETER">FIRST YEAR CO-ORDINETER</option>
          <option value="PLACEMENT CELL">PLACEMENT CELL</option>
          <option value="OFFICE">OFFICE</option>
          <option value="CHAIRMAN CABIN">CHAIRMAN CABIN</option>
          <option value="CAO CABIN">CAO CABIN</option>
          <option value="ADMISSION CELL AND CERTIFICATE SEC">ADMISSION CELL AND CERTIFICATE SEC</option>
          <option value="RECEPSION">RECEPSION</option>
          <option value="TRANSPORT DIVISION">TRANSPORT DIVISION</option>
          <option value="MAIN GATE">MAIN GATE</option>
          <option value="HOSTELS">HOSTELS</option>
          </select>
          <label class="my-2">Place<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="Place">
          <label class="my-2">System No<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="System_No">
          <label class="my-2">No of System<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="No_of_System">
          <label class="my-2">System Details<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="System_Details">
          <label class="my-2">Incharge Sign<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="Incharge_Sign">

          <button class="btn btn-success float-end my-3" name="send">Move</button>
          </form>
        </div>
    </div>

<?php
  $con = new mysqli("localhost","root","","deptentry");
  if(isset($_POST['send']))
  {
    $date = $_POST['Date'];
    $froms = $_POST['Froms'];
    $tos = $_POST['Tos'];
    $Place = $_POST['Place'];
    $System_No=$_POST['System_No'];
    $No_of_System = $_POST['No_of_System'];
    $System_Details = $_POST['System_Details'];
    $Incharge_Sign = $_POST['Incharge_Sign'];
    $sql = "INSERT INTO departmovementscrap(Date,Froms,Tos,Place,System_No,No_of_System,System_Details,Incharge_Sign) VALUES ('$date','$froms','$tos','$Place','$System_No','$No_of_System','$System_Details','$Incharge_Sign');";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('successfully inserted')</script>";
    }
    else
    {
        echo "<script>alert('failed')</script>";
    }
  }

?>


<?php
$con = new mysqli("localhost","root","","deptentry");
if(isset($_POST['send']))
{
  $System_No=$_POST['System_No'];
  $No_of_System = $_POST['No_of_System'];
  $mysql = "UPDATE deptstockentry SET numofsystem=numofsystem-'$No_of_System' WHERE S_No='$System_No';";
  if($con->query($mysql))
  {
    echo "<script>alert('Movement successfully')</script>";
  }
  else
  {
      echo "<script>alert('Movement failed')</script>";
  }
}

?>

















</body>
</html>
