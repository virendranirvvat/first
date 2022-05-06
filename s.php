<?php
$db = mysqli_connect('localhost', 'root', 'root', 'practics')or die("failed");
//print_r($db);exit;
?>
<html>
    <head>
        <title>Form Design</title>
    </head>
    <body>
    <h2>Please Enter Your Login Details</h2>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        <table style=" height:auto" ; width="20%";>
        <tr>
            <td>UserId</td><td><input type="email" name="email" placeholder="Please Enter Your Email" required></td>
        </tr>
        <tr>
            <td>password </td><td><input type="password" name="password" placeholder="Please Enter Your Password" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="create" value="submit"> </td>
        </tr>
        
        </form>
        </table>
    </body>
</html>
<?php 
    if(isset($_POST['create'])){
        $email=$_POST['email'];
        $password=md5($_POST['password']);

        $var=mysqli_query($db,"SELECT * from detail where email='$email'");
        $data=mysqli_fetch_array($var);
        $vari=mysqli_query($db,"SELECT * from detail where password='$password'");
        $datas=mysqli_fetch_array($vari);
        
        if($data['email']==$email and $datas['password']==($password)){
            echo '<script>window.location.href = "show.php";</script>';

        }
        else{
            echo "Wrong Email Id & Password";
        }
    }
?>



