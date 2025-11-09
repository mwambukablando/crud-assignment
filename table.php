<?php
$connect=new mysqli("localhost","root","","classA");
if(isset($_POST["submit"])){
$phone_number=$_POST['number'];
$firstname=$_POST['fn'];
$lastname=$_POST['ln'];
$gender=$_POST['gender'];
$province=$_POST['province'];
$insert=$connect->query("INSERT INTO information SET phone_number='$phone_number',firstname ='$firstname',lastname='$lastname',gender='$gender',province='$province'");
}

?>
<html>
    <head>
        <title>
            registration
        </title>
   
   
    </head>
    <body>
        <form action="" method="post">
            phone-number:<input type="number" name="number"><br>
            firstname:<input type="text" name="fn"><br>
            lastname:<input type="text" name="ln"><br>
            gender:<input type="text" name="gender"><br>
            province:<input type="text" name="province"><br>
            <button name="submit">submit</button>
        </form>
        
       
    <table border=2>
        <tr>
            <th>phone number</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>gender</th>
            <th>province</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <?php
        

        $sele=$connect->query("select * from information");
        while($row=mysqli_fetch_array($sele)){
            $phone_number=$row['phone_number'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $gender=$row['gender'];
            $province=$row['province'];
       
        ?>
        <tr>
            <td><?php echo $phone_number?></td>
            <td><?php echo $firstname?></td>
            <td><?php echo $lastname?></td>
            <td><?php echo $gender?></td>
            <td><?php echo $province?></td>
            
            <td><a href="update.php?phone_number=<?php echo $phone_number?>">update</a></td>
            <td><a href="blpdele.php?phone_number=<?php echo $phone_number?>">delete</a></td>
     
        </tr>
        <?php
         }
        
        ?>

    </table>

    </body>
</html>
