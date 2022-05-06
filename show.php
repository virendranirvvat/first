<?php
$db = mysqli_connect('localhost', 'root', 'root', 'practics')or die("failed");
//print_r($db);exit;
?>
<html>
    <head>
        <titile> </titile>
        <style>
            .t
            {
             text-align: center;
            }
        </style>
    </head>
    <body>
        <?php 
            $sql="SELECT * from detail";
            $result=mysqli_query($db,$sql);
        ?>
        <table border="1px solid" style="width: 100%;">
            <tr>
                <th>Sr.</th> 
                <th>Name</th>
                <th>Date Of Birth</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
            </tr>  
        
        <?php
            $serial=1;
            if(mysqli_num_rows($result)>0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
        ?>
        
            <tr>
                <td class="t"><?php echo "$serial"; ?></td>
                <td class="t"><?php echo $row['f_name'] . " " . $row['l_name'];?></td>
                <td class="t"><?php echo $row['dob'];?></td>
                <td class="t"><?php echo $row['email'];?></td>
                <td class="t"><?php echo $row['number'];?></td>
                <td class="t"><?php echo $row['address'];?></td>
            </tr>
            <?php
            
                    }
                }
                ?>    
        </table>
        
    </body>
</html>
