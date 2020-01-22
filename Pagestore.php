<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
        <title></title>
        <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        td,
        th {
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
        if($_SESSION['fname'] == ''){
            header("Location:Login2.php");
        } 
    ?>
        <div class="topnav" id="myTopnav">
            <p>foodpanda</p>
            <a href="logout.php">ออกจากระบบ</a>
            <a href="" data-toggle="collapse" data-target="#li1" >แก้ไขรายการอาหาร</a>
            <a href="addfood.php?i=1&id=<?PHP echo $_SESSION["id"]; ?>">เพิ่มรายการอาหาร</a>
            <a href="register.php?i=2&ID=<?PHP echo $_SESSION["id"]; ?>">จัดการร้านค้า</a>
            <a class="active"> ชื่อร้าน : <?php echo $_SESSION['fname']; ?> </a>

        </div>
        <div style="margin-top:3%"></div>
    <center>
        <div class="card">
        
        </div>
     </center>

     <div id="li1" class="collapse">
        <table style="margin-top: 5%;">
            <tr>
                <th>ลบ</th>
                <th>เเก้ไง</th>
                <th>ชื่อ</th>
                <th>ราคา</th>
                
            </tr>
            <?php
            require_once './ActionDB.php';
            $con = new ConnectDB();
            $sql = "select * from food where id_store=".$_SESSION["id"];
           
            $result = mysqli_query($con->connect(), $sql);

            while ($row = mysqli_fetch_array($result)) {

            
            ?>
            <tr>
                <td> <a href=check.php?d=1&ID=<?PHP echo $row["id"]; ?>><button type="button" class="btn btn-outline-danger">ลบ</button></a></td>
                <td> <a href=addfood.php?i=2&ID=<?PHP echo $row["id"]; ?>><button type="button" class="btn btn-outline-info">เเก้ไข</button></a></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["price"];?></td>
                
            </tr>
           
          <?php
              }
          ?>
            
        </table>
        
        
    </div>
                
    </body>
</html>
