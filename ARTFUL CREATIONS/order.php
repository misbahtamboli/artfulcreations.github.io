<?php
include 'db_connect.php';
$name=$_POST["name"];
$lname=$_POST["lname"];
$country=$_POST["country"];
$houseadd=$_POST["houseadd"];
$town=$_POST["town"];
$state=$_POST["state"];
$number=$_POST["no"];
$email=$_POST["email"];
$order=$_POST["order"];

$in="INSERT INTO `order`(`name`, `lname`, `country`, `houseadd`, `town`, `state`, `number`, `email`, `order`) 
VALUES ('$name','$lname','$country','$houseadd','$town','$state','$number','$email','$order')";
$query=mysqli_query($con,$in);
if($query)
{
    ?>
    <script>alert("Insert Successfully!")</script>
    <?php
 
}
else
{
    ?>
    <script>alert("Insert UnSuccessfully!")</script>
    <?php
}
?>