<?php include 'conn.php';?>
<?php 


echo $username=$_REQUEST['username'];
echo $psw=$_REQUEST['psw'];
echo $cpsw=$_REQUEST['cpsw'];

$sql="INSERT INTO login (username,password,cpassword) VALUES ('$username','$psw','$cpsw')";



if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. ";
}
// header('Location:show.php');

?>
<?php include 'login.php';?>
