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
   <style>
  <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 15px;
            width: 350px;
            margin: 0 auto 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input {
            width: 95%;
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }

        table {
            width: 95%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th {
            background: #007bff;
            color: #fff;
            padding: 10px;
        }

        td {
            padding: 8px;
            text-align: center;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .update-btn {
            background: #28a745;
            color: white;
        }

        .delete-btn {
            background: #dc3545;
            color: white;
        }
    </style>
   </style>
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
