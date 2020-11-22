<?php 
include 'conn.php';
session_start();
// dayrect home na kholi sake 
if(!isset($_SESSION['s_user'])){

    header('location:login.php');

}
// end
// error na matave a mate
error_reporting(0);
// end
//name session thi show karava
$username=$_SESSION['s_user'];
// end
$query= "SELECT * FROM `login` WHERE username ='$username'";
 
$data=mysqli_query($conn,$query);
// $total=mysqli_num_rows($data);
$profile=mysqli_fetch_assoc($data);

// echo $profile['username']

?>
<?php 
include 'menu.php';
?>
<div style="padding-left:16px">
  <h2><?php echo $profile['username'] ?></h2>
  <p>Resize the browser window to see how it works.</p>
</div>