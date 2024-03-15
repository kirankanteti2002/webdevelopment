<?php
$server="localhost";
    $user="root";
    $pass="";
    $dbname="kiran";
    $con =mysqli_connect($server,$user,$pass,$dbname);
    if(!$con)
    {
        die("Error : :  ".mysqli_connect_error());}
if(isset($_POST['uname']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phno=(float)$_POST['phone'];
$query = "INSERT INTO registrationk VALUES ('$uname', '$pass', '$email', '$phno')";
$res = mysqli_query($con,$query);
if($res)
{
$script = "<script>alert('User Registration Successful');
window.location = 'registration.html';
</script>";
echo $script;
}
else
echo "<script>alert('User Registration Failed');
 window.location = 'registration.html';
</script>"; 
} 
?>