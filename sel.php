<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <?php 
    $aa=$_GET["no"]
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description</title>
    <style>
    table {
      border-collapse: collapse;
      margin-top:50px; 
      text-align:center;
      width:400px;
      height:250px;
      font-size:20px;
    }
    td, th {
      border: 1px solid black;
      padding: 5px;
    }
    button{
        background:white;
        border:2px solid black;
        border-radius:10px;
        font-size:15px;
    }
    button:hover{
        background:lightgray;
    }
  </style>
</head>
<body>
    <center>
    <table>
        <th colspan="2" > <?php echo "Description for Jop Number: ".$aa ?></th>
        <?php
$coo =new mysqli("localhost","root","","cisjops");
$st=$coo ->query(" SELECT * FROM `jops` where id='$aa'");
if ($st->num_rows>0){   
    while($row = $st->fetch_assoc())
    {   
        echo "<tr><td>".$row["id"]."</td> <td>ID</td></tr> <tr><td>".$row["jname"]."</td> <td>Jop Name</td></tr> <tr><td>".$row["jloc"]."</td><td>Location</td> </tr><tr><td>".$row["edu"]."</td><td>Education</td> </tr>";        
    }
}
else {
    echo "0results";
}
$coo->close();
?>
</table>
<br>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<button type="submit" name="btnback">Back to Jops Page</button>
</form>
<?php 
 if (isset($_POST["btnback"])) {
    header('Location: frstpr.php');
 }
?>
</center>
</body>
</html>


