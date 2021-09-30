<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css ">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,600;0,700;1,700&display=swap" rel="stylesheet">
<style>
    body{
        background-image:url('gct4.jpg');
        background-repeat: no-repeat;
        background-size: 100% 1200px;
    }
    form{
        
        border:1px solid lightgray;
        padding-left:60px;
        padding-top:30px;
        border-radius: 30px;
        height:600px;
        width:650px;
        margin-right:100px;
    }
    .eye{
        position:absolute;
    }
    #hide1{
        display:none;
    }
</style>

</head>
<body>
    <!-- <h1>Hello world</h1>
    <h2>Hello world</h2> -->
    <div class="container" style="margin-top:170px;">
    <h2 class="text-primary" style="font-family: 'Crimson Text', serif; font-size:50px; margin-bottom:90px;"><center>ITRM STOCK MANAGEMENT</center></h2>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5"><form action="index.php" method="post">
        <table>
            <tr><td colspan="2" style="background-color:; border-radius:20px;" class="py-4"><img src="1.png" alt=""></td></tr>
     <tr>
         <td class="py-4"><i class="fas fa-user mx-2"  style="color:yellow; font-size:20px;"></i><span><b style="color:white; font-size:20px;">Name</b></span> <span style="color:red;">*</span></td><td><input type="text" class="form-control" placeholder="Enter Your Name" name="Name" autocomplete="off"></td>
     </tr>
     <tr>
         <td  class="py-4"><i class="fas fa-key mx-2"  style="color:yellow; font-size:20px;"></i><b style="color:white; font-size:20px;">Password</b></span><span style="color:red;">*</span></td>
         <td><input type="password" class="form-control" placeholder="Enter Your Password" name="Password" id="myInput">
         </td><td style="padding-bottom:35px;">
         <span class="eye btn" style="color:white;" onclick="myfunction()">
             <i id="hide1" class="fas fa-eye mx-2"></i>
             <i id="hide2" class="fas fa-eye-slash mx-2"></i>
            </span></td>
     </tr><br><br>
     <tr>
         <!-- <td colspan="2" ><center><button class="btn btn-lg btn-success mx-3" name="save">Register</button> -->
         <td colspan="2"  class="py-3"><center><button class="btn btn-lg btn-primary" name="login" style="width:100px;">login</button></center></td>
     </tr>
    </table>
        </form></div>
        <div class="col-md-4"></div>
        </div>
    </div>







<script>
    function myfunction(){
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");
        if(x.type === 'password')
        {
            x.type='text';
            y.style.display='block';
            z.style.display='none';
        }
        else
        {
            x.type='password';
            y.style.display='none';
            z.style.display='block';
        }
    }
</script>


</body>
</html>
<?php 
$con = new mysqli("localhost","root","","userreg");

// if(isset($_POST['save'])){
//     $name = $_POST['Name'];
//     $psw = $_POST['Password'];
//     $sql = "INSERT INTO person(Name,Password) VALUES('$name','$psw')";
//     if($con->query($sql))
//     {
//         echo "<script>alert('Registration Successfully Completed')</script>";
//     }
//     else
//     {
//         echo "<script>alert('Registration Failed')</script>";
//     }
// }


if(isset($_POST['login']))
{
    $name = $_POST['Name'];
    $psw = $_POST['Password'];
    $sql = "SELECT * FROM person WHERE Name='$name'and Password='$psw'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==0)
    {
        echo "<script>alert('User Name Or Password Is Wrong')</script>";
    }
    else
    {
        header("Location:dashboard.php");
    }
}


?>