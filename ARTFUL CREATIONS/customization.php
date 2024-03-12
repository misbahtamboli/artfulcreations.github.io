<?php
include 'db_connect.php';
$artwork=$_POST["artwork"];
$art=$_POST["art"];
$type=$_POST["type"];
$category=$_POST["category"];
$Description=$_POST["Description"];


$in="INSERT INTO `customization`(`artwork`, `art`, `type`, `category`, `Description`) 
    VALUES ('$artwork','$art','$type','$category','$Description')";
$query=mysqli_query($con,$in);
if($query)
{
    ?>
    <script>alert("Insert Successfully!")
 header('location: customization.html');
</script>
    <?php
 
}
else
{
    ?>
    <script>alert("Insert UnSuccessfully!")</script>
    <?php
}

?>