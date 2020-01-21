<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="newcss2.css">
        <style>
            label{
                color: blue;
            }
        </style>
        <script src="javascript.js"></script>
    </head>
    <body>
        <?php
        require_once './ActionDB.php';
            $i=$_REQUEST['i'];    
            if($i==1){
                $text = "Insert";
                $id=$_REQUEST['ID'];
                
            }else{
                $text = "Update";   
            }
        
        $con = new ConnectDB();
        $sql = "select * from db_user where id=".$id;
        $result = mysqli_query($con->connect(), $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <?php if( $i == 1){ ?>
        <div id="coutainer" >   
            <form class="box" action="check.php" method="GET" onsubmit="return  ck()">
                    <label>fName:</label><br>
                    <input type="text" name="fname" id="fname" value=<?php echo $row['fname'];?> ><br>
                    <label>lName:</label><br>
                    <input type="text" name="lname" id="lname" value=<?php echo $row['lname'];?> ><br>
                    <label>User:</label><br>
                    <input type="text" name="user" id="user" value=<?php echo $row['user'];?> ><br>
                    <label>Pass:</label><br>
                    <input type="text" name="pass" id="pass" value=<?php echo$row["pass"];?> ><br>
                    <label>email:</label><br>
                    <input type="text" name="email" id="email" value=<?php echo$row["email"];?> ><br>
                    <label>age:</label><br>
                    <input type="number_format" name="age" id="age" value=<?php echo$row["age"];?> ><br>                      
                    <label>Sex:</label><br>
                    <input type="radio" name="sex" value="M" <?php echo ($row['sex']=='M')?'checked':''?> >Male <br>
                    <input type="radio" name="sex" varlue="F" <?php echo ($row['sex']=='F')?'checked':''?> >Female <br>
                    <label>Stuatus:</label><br>
                    <input type="radio" name="stuatus" value="admin" <?php echo ($row['stuatus']=='admin')?'checked':''?> >admin <br>
                    <input type="radio" name="stuatus" varlue="user" <?php echo ($row['stuatus']=='user')?'checked':''?> >user <br>
                    <input type="file" name="img" id="img">
                    
                    <center><input type="submit" name="submit" value=<?php echo $text;?> ></center>
                </form>
        </div>
        <?php } ?>
    <center><a href="index.php">Home</a></center>
    </body>
</html>
