<?php

$server="localhost";

$userid="kavya_user";

$password="vrsec@1977";

$database="kavya_test";


$conn = mysqli_connect($server, $userid, $password,$database);

if (!$conn)
   
    die("Connection failed: " . mysqli_error($conn));
    

mysqli_select_db($database,$conn);

$login=$_POST['uname'];

$pwd=$_POST['psw'];


$query = "select * from student where uname='".$login ."' and password='".$pwd."'";
     
 
 $result=mysqli_query($conn,$query);		  
  
$r=mysqli_num_rows($result);		
					          
	  if($r>=1)
           
                      header('Location:ABOUT.html');
      
                  else
            
                     echo "Invalid User Name / Password";  

?>
