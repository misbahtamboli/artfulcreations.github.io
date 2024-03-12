<?php
include 'db_connect.php';
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];



$in="INSERT INTO `contact`(`name`, `email`, `subject`, `Message`) VALUES ('$name','$email','$subject','$message')";
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