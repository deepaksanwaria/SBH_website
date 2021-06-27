<?php


$con= mysqli_connect('localhost:3307','root');
// Change port to 3306 if needed.

if($con){
   echo "Connection Sucessfull"; 
}else{
	?>
	<script>
	alert("Unable to sumbit your feedback\n\n Kindly try after sometime or reach us at agarwaldeepak491@gmail.com.");
	window.location.replace("index.php");
</script>
<?php
}

mysqli_select_db($con, 'sbh_website');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query="insert into contact_us (name,email,phone,message) values ('$user','$email','$mobile','$comments');";

mysqli_query($con,$query);

if($con){
?>
<script>
	alert("Thank You for your feedback ");
	window.location.replace("index.php");
</script>
<?php
}else{
?>
<script>
	alert("Thank You for your feedback ");
</script>
<?php
}

?>
