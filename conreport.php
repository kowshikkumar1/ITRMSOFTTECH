<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
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
    <div id="sidebar" style="height: 1155px;">
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
    <div id="content" class="container">
    <!--consumable-->
        <h2 class="text-warning my-3">Consumable :-</h2><hr>
        <div class="row mx-5">
            <div class="col-md-12"><a href="consumable.php" class="dropdown-item nav-item py-3" style="font-size:16px;"><b>Total of Consumable List</b></a></div>
            <div class="col-md-6">
            <button class="btn mx-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">1.Computers & Laptops</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Computers & Laptops</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
            <li><a href="Total_con_comp_lap/comp_and_lap.php" class="dropdown-item nav-item py-3" style="font-size:16px;">Total List of Computers & Laptops</a></li>
            <li><a href="con_comp_lap/con_comp_lap-TCP.php" class="dropdown-item nav-item py-3" style="font-size:16px;">Thermal Compound Paste</a></li>
            <li><a href="con_comp_lap/con_comp_lap-CMOSBAT.php" class="dropdown-item nav-item py-3" style="font-size:16px;">CMOS Battery</a></li>
            <li><a href="con_comp_lap/con_comp_lap-RJ45CON.php" class="dropdown-item nav-item py-3" style="font-size:16px;">RJ 45 Connector</a></li>
            <li><a href="con_comp_lap/con_comp_lap-CAT6CABLE.PHP" class="dropdown-item nav-item py-3" style="font-size:16px;">CAT 6 Cable</a></li>
            <li><a href="con_comp_lap/con_comp_lap-CAT6PC.php" class="dropdown-item nav-item py-3" style="font-size:16px;">CAT 6 Patch Cable</a></li>
            <li><a href="con_comp_lap/con_comp_lap-IOBOX.php" class="dropdown-item nav-item py-3" style="font-size:16px;">I/O Box</a></li>
            </ol>
            </div>
            </div>
            <!-- -->
            <div class="col-md-8">
            <button class="btn mx-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">2.printers & Scanners</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Printers & Scanners</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
            <li><a href="Total_con_comp_lap/Total_printers.php" class="dropdown-item nav-item py-3" style="font-size:16px;">Total List of Printers & Scanners</a></li>
            <li><a href="con_printers_scanner/con_12A_caterage.php" class="dropdown-item nav-item py-3" style="font-size:16px;">12A Catrage</a></li>
            <li><a href="con_printers_scanner/con_12A_Powder.php" class="dropdown-item nav-item py-3" style="font-size:16px;">12A Powder</a></li>
            <li><a href="con_printers_scanner/con_12A_PCR.php" class="dropdown-item nav-item py-3" style="font-size:16px;">12A PCR</a></li>
            <li><a href="con_printers_scanner/con_12A_OPC_Durm.php" class="dropdown-item nav-item py-3" style="font-size:16px;">12A OPC Drum</a></li>
            <li><a href="con_printers_scanner/con_12A_Docter_blade.php" class="dropdown-item nav-item py-3" style="font-size:16px;">12A Doctor Blade</a></li>
            <li><a href="con_printers_scanner/con_12A_Wiper_blade.php" class="dropdown-item nav-item py-3" style="font-size:16px;">12A Wiper Blade</a></li>
            <li><a href="con_printers_scanner/con_12A_Magnetic_Roller.php" class="dropdown-item nav-item py-3" style="font-size:16px;">12A Megnetic Roller</a></li>
            <li><a href="con_printers_scanner/con_88A_caterage.php" class="dropdown-item nav-item py-3" style="font-size:16px;">88A Caterage</a></li>
            <li><a href="con_printers_scanner/con_88A_Powder.php" class="dropdown-item nav-item py-3" style="font-size:16px;">88A Powder</a></li>
            <li><a href="con_printers_scanner/con_88A_PCR.php" class="dropdown-item nav-item py-3" style="font-size:16px;">88A PCR</a></li>
            <li><a href="con_printers_scanner/con_88A_OPC_Durm.php" class="dropdown-item nav-item py-3" style="font-size:16px;">88A OPC Drum</a></li>
            <li><a href="con_printers_scanner/con_88A_Docter_blade.php" class="dropdown-item nav-item py-3" style="font-size:16px;">88A Doctor Blade</a></li>
            <li><a href="con_printers_scanner/con_88A_Wiper_blade.php" class="dropdown-item nav-item py-3" style="font-size:16px;">88A Wiper Blade</a></li>
            <li><a href="con_printers_scanner/con_88A_Magnetic_Roller.php" class="dropdown-item nav-item py-3" style="font-size:16px;">88A Magnetic Roller</a></li>
            </ol>
            </div>
            </div>
</div>
            <!-- -->
            <div class="row">
            <div class="col-md-6">
            <button class="btn mx-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight4" aria-controls="offcanvasRight3">3.CCTV</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight4" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel4">CCTV</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
            <li><a href="Total_con_comp_lap/Total_cctv.php" class="dropdown-item nav-item py-3" style="font-size:16px;">Total List of CCTV</a></li>
            <li><a href="con_CCTV/cctv_3+1_cable.php" class="dropdown-item nav-item py-3" style="font-size:16px;">CCTV 3+1 Cable</a></li>
            <li><a href="con_CCTV/cctv_BNC_Connector.php" class="dropdown-item nav-item py-3" style="font-size:16px;">BNC Connector</a></li>
            <li><a href="con_CCTV/cctv_DC_pin.php" class="dropdown-item nav-item py-3" style="font-size:16px;">DC PIN</a></li>
            </ol>
            </div>
            </div>
            <!-- -->
            <div class="col-md-6">
            <button class="btn mx-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight5" aria-controls="offcanvasRight3">4.Others</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight5" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel5">Others</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
            <li><a href="Total_con_comp_lap/Total_others.php" class="dropdown-item nav-item py-3" style="font-size:16px;">Total List</a></li>
            <li><a href="con_OTHERS/can_others_TAP_ROLL.php" class="dropdown-item nav-item py-3" style="font-size:16px;">Tap Roll</a></li>
            <li><a href="con_OTHERS/can_others_pin_plug.php" class="dropdown-item nav-item py-3" style="font-size:16px;">Pin Blug</a></li>
            <li><a href="con_OTHERS/can_others_Hand_cloves_mask.php" class="dropdown-item nav-item py-3" style="font-size:16px;">Hand cloves/Mask</a></li>
            </ol>
            </div>
            </div>
            </div>
        
        
            </div>
        </div>


</div>

</div>
   
</body>
</html>
