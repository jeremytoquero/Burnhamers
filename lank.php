<html>
<head>
<title>GRAB FROM VALUES</title>
</head>
<body>

<?php 

$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$age=$_POST["agee"];
$email=$_POST["email"];


$conn=mysqli_connect("localhost","root","","webtech");
$insert="INSERT into subscriber VALUES ('$f_name','$l_name','$age','email')";
$ipasok=mysqli_query($conn, $insert);
$RetValues=mysqli_query($conn, "SELECT * FROM subscriber");
$CountRows=mysqli_num_rows($RetValues);
?>

</body>
</html>