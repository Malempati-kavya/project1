<?php
$server="mkavya.in";
$userid="kavya";
$password="Kavitha00";
$database="test";

      $con=mysql_connect($server,$userid,$password);        // connection establishment
      if(!$con)
            die("Connection Error: ".mysql_error());
      
      $login=$_POST['uname'];				      //accessing form data
      $pwd=$_POST['psw'];

      mysql_select_db($database,$con);			    // select database

      $query = "select * from regusers where name='".$login ."' and passkey='".$pwd."'";
     
//      echo $query;
   $result=mysql_query($query,$con);		  // execute sql query
      

      $r=mysql_num_rows($result);		
					          //find number of rows in the query result

      if($r==1)
      {
            header('Location:/kakinada/ABOUT.html');
            echo "Welcome  " ."$login";
            
      }
      else
            echo "Invalid User Name / Password";  

?>