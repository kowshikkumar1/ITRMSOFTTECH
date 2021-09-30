<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WorkDone Details</title>
  <link rel="shortcut icon" type="image" href="gct1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
  <center><h1 class="mb-3 text-primary"><u>WorkDone Details</u></h1></center>
<table class="table table-hover table-striped table-bordered">
  <tr class="bg-warning"><th>S.No</th><th>Worker Name</th><th>Work Details</th><th>Starting date</th><th>Ending Date</th></tr>
  <?php 
  $con=new mysqli("localhost","root","","addworks");
    $sql = "SELECT * FROM addworks";
    $result=mysqli_query($con,$sql);
    $no=1;
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr>
      <td>".$no."</td>
      <td>".$row['wname']."</td>
      <td>".$row['Work']."</td>
      <td>".$row['std']."</td>
      <td>".$row['etd']."</td>
      </tr>";
      $no++;
    }
    
?>	

</table>
</div>
</body>
</html>