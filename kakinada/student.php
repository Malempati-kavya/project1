<?php

$server="localhost";

$userid="kavya_user";

$password="vrsec@1977";

$database="kavya_test";


$conn = mysqli_connect($server, $userid, $password,$database);

if (!$conn) {
   
 die("Connection failed: " . mysqli_error($conn));
}

$user=$_POST['NAME'];

$pwd=$_POST['PASSWORD'];

$mail=$_POST['EMAIL ID'];

$age=$_POST['AGE'];

$gen=$_POST['GENDER'];

$grad=$_POST['GRADE'];

$ctime=$_POST['CONVENIENT TIMINGS'];

$qual=$_POST['YOUR QUALIFICATION'];

$mob=$_POST['MOBILE NUMBER'];

$state=$_POST['STATE'];

$addr=$_POST['ADDRESS'];

$pin=$_POST['PINCODE'];






mysqli_select_db($database,$conn);

$inssql = "'".$user ."','".$pwd ."','".$mail."','".$age."','".$gen."','".$grad."',".$ctime.",'".$qual."','".$mob."','".$state."','".$addr ."','".$pin."'";

$inssql= "insert into student values(".$inssql.")";

$result = mysqli_query( $conn,$inssql);


if ($result==true) 
{
      $message= "Registered Successfully";
   
   echo "<script type='text/javascript'>alert('$message');</script>";
    
  header('Location:tutors.html');
}

 else 
    
echo "Registration is Not Completed..........!".mysqli_error($conn);

?>