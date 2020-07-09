<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$message =$_REQUEST['message'];


$con =mysqli_connect("localhost","root","","portfolio");
$sql = "INSERT INTO `contacts`(`name`, `email`, `mobile`,`message`) VALUES ('$name','$email','$mobile','$message')";

$res = mysqli_query($con,$sql);

while($res){
    echo '
    <script>
       alert("Thank you for your feedback.");
       location.href ="index.php";
    </script>

    
    ';
}

?>