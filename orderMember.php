<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSSButton.css" title="style">
    <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
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
        <a href="index.php">ออกจากระบบ</a>


    </div>
    <div style="margin-top:3%"></div>
    <center>
        <br>
        <table>
            <?php
            error_reporting(E_ALL ^ E_NOTICE);
            require_once './ActionDB.php';
            $id = $_REQUEST['id'];
            $connect = new connectDB();
            if ($connect->connect()) {
                $sql = "select * from store where id=".$id."";
                $result = mysqli_query($connect->connect(), $sql);
            } else echo "Cannot connect!!!";
            $x = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<div class=clearfix><form action=check.php?shop=" . $row['id'] . "&order=sent method=POST enctype=multipart/form-data>";
                echo "<p class=tagP >ชื่อร้านค้า : " . $row['name'] . "</p>";
                echo "<p class=tagP >ติดต่อ : " . $row['tel'] . "</p>";
                echo "<p class=tagP >ที่อยู่ร้านค้า : " . $row['loc'] . "</p>";
                echo "<textarea id=text name=text >Some text...</textarea>";
                echo "<br><center><button class=button type=submit >สั่งอาหาร</button></center>";
                echo "</form></div>";

                echo "</tr>";
            }
            ?>
        </table>
    </center>

</body>

</html>