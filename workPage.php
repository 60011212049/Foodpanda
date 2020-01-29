<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
    <link rel="stylesheet" type="text/css" href="CSSButton.css" title="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FoodPanda - Login</title>
    <style>
        .clearfix {
            overflow: auto;
            background-color: antiquewhite;
            border: 5px solid #cc0066;
            width: 50%;
            padding: 3px;
        }

        .imgfix {
            width: 50%;
            float: right;
        }

        .tagP {
            text-align: left;
            font-size: 100%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body style="background-image: url('img/background1.jpg'); ">
    <div class="topnav" id="myTopnav">
        <p>foodpanda</p>
        <a href="logout.php">ออกจากระบบ</a>
        
    </div>

    <div style="margin-top:3%"></div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <center>
        <table>
            <?php
            error_reporting(E_ALL ^ E_NOTICE);
            require_once './ActionDB.php';
            $connect = new connectDB();
            if ($connect->connect()) {
                $sql = "select * from food_order";
                $result = mysqli_query($connect->connect(), $sql);
            } else echo "Cannot connect!!!";
            $x = 0;
            while ($row = mysqli_fetch_array($result)) {
                $sql_user = "select * from user_food where id = ".$row['id_cus'];
                $result_user = mysqli_query($connect->connect(), $sql_user);
                $row_user = mysqli_fetch_array($result_user);

                $sql_shop = "select * from store where id = ".$row['id_shop'] ;
                $result_shop = mysqli_query($connect->connect(), $sql_shop);
                $row_shop = mysqli_fetch_array($result_shop);
                echo "<tr>";
                echo "<div class=clearfix><form action=sentOrder.php?id=" . $row['id'] . " method=POST enctype=multipart/form-data>";
                echo "<p class=tagP >ชื่อลูกค้า : " . $row_user['fname'] . "</p>";
                echo "<p class=tagP >ชื่อร้านค้ส : " . $row_shop['store_name'] . "</p>";
                echo "<p class=tagP >ที่อยู่ลูกค้า : " . $row_user['loc'] . "</p>";
                echo "<br><center><button class=button >รับออเดอร์</button></center>";
                echo "</form></div>";
                
                echo "</tr>";
            }
            ?>
        </table>



    </center>
    <script language="javascript" type="text/javascript">
        function myFunction() {
            window.location.href = "index.php?";
        }
    </script>

</body>

</html>