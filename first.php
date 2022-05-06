<?php
$db = mysqli_connect('localhost', 'root', 'root', 'practics')or die("failed");
//print_r($db);exit;
?>
<html>
    <head>
        <title>Form Design</title>
    </head>
    <body>
    <h2>Please Enter Your Details</h2>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        <table style=" height:auto" ; width="20%";>
            <tr>
                <td>First Name </td>
                <td><input type="text" name="f_name" placeholder="Please Enter Your First Name" style="width: 80%;" required></td>
            </tr>
            <tr>
                <td>Last Name </td>
                <td><input type="text" name="l_name" placeholder="Please Enter Your Last Name" style="width: 80%;" required></td>
            </tr>
            <tr">
                <td>Date of Birth </td>
                <td><input type="date" name="dob" placeholder="Please Enter Your Date Of Birth" style="width: 80%;" required></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Please Enter Your Email" style="width: 80%;" required></td>
            </tr>
            <tr>
                <td>Number </td>
                <td><input type="text" name="number" placeholder="Please Enter Your Number" style="width: 80%;" required></td>
            </tr>
            <tr>
                <td>Address </td>
                <td><textarea name="address" placeholder="Please Enter Your Address..." style="width: 80%;"></textarea></td>
            </tr>
            <tr>
                <td>Password </td>
                <td><input type="password" name="password" placeholder="Please Enter Your Password" style="width: 80%;" required></td>
            </tr>
            <tr>
                <td style="padding-left:50%"><input type="submit" name="create" value="submit"> </td>
            </tr>
        </form>
        </table>
    </body>
</html>
<?php
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
           
            $f_name=$_POST['f_name'];
            $l_name=$_POST['l_name'];
            $dob=$_POST['dob'];
            $email=$_POST['email']; 
            $number=$_POST['number'];  
            $address=$_POST['address'];   
            $password =$_POST['password'];
            // $password=md5($password);
            
          
            //echo "$password";
            
            $sql= "INSERT INTO detail (f_name, l_name, dob,  email, number, address, password) 
			values ('" . $f_name . "', '" . $l_name . "', '$dob', '$email' , '$number','$address',MD5('$password'))";
            $inst = mysqli_query($db,$sql);
            
            if($inst)
            {
                echo '<script>alert("Data Submitted")</script>';
            }
            else{
                echo '<script>alert("Data Not Submitted")</script>';
            }
        }
        // if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     echo "Email address '$email' is considered valid.\n";
        // } else {
        //     echo "Email address '$email' is considered invalid.\n";
        // }

        // function test_input($data) {
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        //   }
        ?>



