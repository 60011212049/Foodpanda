<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>admin</title>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            
            }

            td, th {
            border: 3px solid #dddddd;
            text-align: left;
            padding: 8px;
            }
            tr:nth-child(odd) {
            background-color: #ffffff;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
            
        </style>
    </head>
    <body style="background-image: url('img/background1.jpg'); ">
    <?php
        session_start();
    ?>
        <div class="topnav" id="myTopnav">
            <p>foodpanda</p>
            <a href="index.php">ออกจากระบบ</a>
            <a href="" data-toggle="collapse" data-target="#li1" >จัดการผู้ใช้</a>
            <a href="" data-toggle="collapse" data-target="#li2">จัดการรายชื่อคนขับ</a>
            <a href="" data-toggle="collapse" data-target="#li3">จัดการรายชื่อร้านค้า</a>
            <a class="active" > ชื่อ : <?php echo $_SESSION['fname'];?> </a>
        </div>
        <div style="margin-top:3%"></div>
    <div id="li1" class="collapse"  >
        <table style="margin-top: 5%;">
            <tr>
                <th>ลบ</th>
                <th>เเก้ไง</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>Email</th>
                <th>เบอร์โทร</th>
                <th>id</th>
                <th>password</th>
                <th>status</th>
            </tr>
            <?php
                require_once './ActionDB.php';
                $con = new ConnectDB();
                $sql = "select * from user_food where status!='driver'";
                $result = mysqli_query($con->connect(), $sql);
                
                while($row = mysqli_fetch_array($result)){
                    
            ?>
            <tr>
                <td> <a href=check.php?d=1&ID=<?PHP echo $row["id"]; ?>><button type="button" class="btn btn-outline-danger">ลบ</button></a></td>
                <td> <a href=register.php?i=2&ID=<?PHP echo $row["id"]; ?>><button type="button" class="btn btn-outline-info">เเก้ไข</button></a></td>
                <td><?php echo $row["fname"];?></td>
                <td><?php echo $row["lname"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["tel"];?></td>
                <td><?php echo $row["iduser"];?></td>
                <td><?php echo $row["pass"];?></td>
                <td><?php echo $row["status"];?></td>
            </tr>
           
          <?php
              }
          ?>
            
        </table>
        <a href=register.php?i=4><button type="button" class="btn btn-success">เพิ่มรายชื่อผู้ดูเเล</button></a> 
        
    </div>
    <div id="li2" class="collapse"  >
    <table style="margin-top: 5%;">
            <tr>
                <th>ลบ</th>
                <th>เเก้ไง</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>Email</th>
                <th>เบอร์โทร</th>
                <th>id</th>
                <th>password</th>
                <th>status</th>
            </tr>
            <?php
                
                $sql = "select * from user_food where status='driver'";
                $result = mysqli_query($con->connect(), $sql);
                
                while($row = mysqli_fetch_array($result)){
                    
            ?><tr>
            <td> <a href=check.php?d=1&ID=<?PHP echo $row["id"]; ?>><button type="button" class="btn btn-outline-danger">ลบ</button></a></td>
            <td> <a href=register.php?i=2&ID=<?PHP echo $row["id"]; ?>><button type="button" class="btn btn-outline-info">เเก้ไข</button></a></td>
            <td><?php echo $row["fname"];?></td>
            <td><?php echo $row["lname"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["tel"];?></td>
            <td><?php echo $row["iduser"];?></td>
            <td><?php echo $row["pass"];?></td>
            <td><?php echo $row["status"];?></td>
          </tr>
          <?php
              }
          ?>
            
            
        </table>
        <a href=register.php?i=3><button type="button" class="btn btn-success">เพิ่มรายชื่อคนขับ</button></a>      
    </div>
    <div id="li3" class="collapse"  >
        <table style="margin-top: 5%;">
            <tr>
                <th>เเก้ไง</th>
                <th>ลบ</th>
                <th>ชื่อร้าน</th>
                <th>เบอร์โทร</th>
                <th>id</th>
                <th>password</th>
            </tr>
            <?php
                
                $sql = "select * from store ";
                $result = mysqli_query($con->connect(), $sql);
                
                while($row = mysqli_fetch_array($result)){
                    
            ?><tr>
            <td> <a href=check.php?d=2&ID=<?PHP echo $row["id"]; ?>><button type="button" class="btn btn-outline-danger">ลบ</button></a></td>
            <td> <a href=register.php?i=5&ID=<?PHP echo $row["id"]; ?>><button type="button" class="btn btn-outline-info">เเก้ไข</button></a></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["tel"];?></td>
            <td><?php echo $row["idstore"];?></td>
            <td><?php echo $row["pass"];?></td>       
          </tr>
          <?php
              }
          ?>
            
            
        </table>
        <a href=register.php?i=4><button type="button" class="btn btn-success">เพิ่มรายร้านค้า</button></a> 
    </div>
        

        
    </body>
</html>
