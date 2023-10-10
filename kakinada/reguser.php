<?php
$servername = "mkavya.in";
$username = "kavya";
$password = "Kavitha00";
$dbname = "test";

$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysql_error($conn));
}
$user=$_POST['USERNAME'];
$pwd=$_POST['PASSWORD'];
$mail=$_POST['EMAIL ID'];
$age=$_POST['AGE'];
$gen=$_POST['GENDER'];
$texp=$_POST['TEACHING EXPERIENCE'];
$cfrom=$_POST['HANDLING CLASSES FROM'];
$cto=$_POST['HANDLING CLASSES TO'];
$ctime=$_POST['CONVENIENT TIMINGS'];
$qual=$_POST['QUALIFICATION'];
$tsub=$_POST['TEACHING SUBJECTS'];
$mob=$_POST['MOBILE NUMBER'];
$city=$_POST['CITY'];
$addr=$_POST['ADDRESS'];
$pin=$_POST['PINCODE'];
//print_r($_POST);

mysql_select_db($dbname);
$inssql = "'".$user ."','".$pwd ."','".$gen."','".$qual."','".$mail."','".$mob."',".$age.",'".$addr."','".$city."','".$pin."','";
$inssql =$inssql.$texp."','".$cfrom."','".$cto."','".$ctime."','".$tsub."'";
$inssql= "insert into tutors values(".$inssql.")";
$result = mysql_query( $inssql);

if ($result==true) 
{
      $message = "Registered Successfully";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('Location:/kakinada/TUTOR.html');
}
 else 
    echo "Registration is Not Completed..........!".mysql_error($conn);
?>