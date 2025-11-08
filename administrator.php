
<html>

<head>
    <title>
        admins portal
    </title>
    <style>
        table{

           margin:auto;
           margin-top:10vh;
            
        }
    </style>
</head>
<body>
    
       
    <table border=2>
        <tr>
            <th>phone number</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>gender</th>
            <th>province</th>
            <th>update</th>
            <th>delete
            </th>
        </tr>
        <?php
        
 $connect=new mysqli("localhost","root","","classA");
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
        </tr>
        <?php
         }
        
        ?>

    </table>
</body>


</html>