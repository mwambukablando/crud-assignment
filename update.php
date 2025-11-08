<?php 

      $bla=new mysqli("localhost","root","","classA");
      if (isset($_GET['phone_number'])) {
      	$phone_number=$_GET['phone_number'];
      	$sele=$bla->query("SELECT*FROM information where phone_number='$phone_number'");
      	while($row=mysqli_fetch_array($sele)){
      		$firstname=$row['firstname'];
      		$lastname=$row['lastname'];
      		$gender=$row['gender'];
      		$province=$row['province'];

      	}
      }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
	firstname:<input type="text" name="fn" placeholder="firstnames" value="<?php echo$firstname?>"><br>
	lastname:<input type="text" name="ln" placeholder="lastname" value="<?php echo$lastname?>"><br>
 		gender:<input type="text" name="gender" placeholder="gender" value="<?php echo$gender?>"><br>
 		province:<input type="text" name="province" placeholder="province" value="<?php echo$province?>"><br>
 		<button type="submit" name="update"> update </button>
</form>
<?php
if (isset($_POST['update'])) {
	$firstname=$_POST['fn'];
	$lastname=$_POST['ln'];
	$gender=$_POST['gender'];
	$province=$_POST['province'];
	$up=$bla->query("UPDATE information set firstname='$firstname',lastname='$lastname',gender='$gender',province='$province' where phone_number='$phone_number'");
	if ($up)
		 {
             			header("location:table.php");
             		}
					else {

	echo "goodz";
	}
}
         

 ?>
</body>
</html>