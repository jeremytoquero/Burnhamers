<?Php

  $server="localhost";
  $user="root";
  $pass="";
  $db="proposal";

  $con=mysqli_connect($server,$user,$pass,$db);
  if($con){
    echo "connected";

  } else{echo "fail";}

?>