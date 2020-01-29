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
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

    </style>
</head>

<body style="background-image: url('img/background1.jpg'); ">
    <?php include 'header.php'; ?>

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
            <?php
            error_reporting(E_ALL ^ E_NOTICE);
            require_once './ActionDB.php';
            $id = $_REQUEST["id"];
            $connect = new connectDB();
            if ($connect->connect()) {
                $sql = "select * from list_food where id_bill = " . $id . "";
                $result = mysqli_query($connect->connect(), $sql);
                $row = mysqli_fetch_array($result);
            } else echo "Cannot connect!!!";
            $x = 0;
            ?>
                    <table>
            <?php

                $sql_food = "select * from food_order where id=" . $id . "";
                $result_food = mysqli_query($connect->connect(), $sql_food);
                $row_food = mysqli_fetch_array($result_food);

                $sql_food1 = "select * from store where id=" . $row_food['id_shop'] . "";
                $result_food1 = mysqli_query($connect->connect(), $sql_food1);
                $row_food1 = mysqli_fetch_array($result_food1);

                $sql_food11 = "select * from user_food where id=" . $row_food['id_cus'] . "";
                $result_food11 = mysqli_query($connect->connect(), $sql_food11);
                $row_food11 = mysqli_fetch_array($result_food11);

                echo "<tr>";
                echo "<div class=clearfix><form action=check.php?shop=" . $row['id'] . "&order=sent method=POST enctype=multipart/form-data>";
                echo "<p class=tagP >ชื่อร้านค้า : " . $row_food1['store_name'] . "</p>";
                echo "<p class=tagP >ที่อยู่ร้านค้า : " . $row_food1['loc'] . "</p>";
                echo "<p class=tagP >ที่อยู่ลูกค้า : " . $row_food11['loc'] . "</p>";
                echo "</form></div>";

                echo "</tr>";
            
            echo "</form></div>";

            echo "</tr>";
            ?>


        </table>
            <div class="clearfix">
                <form action=check.php?shop=<?php echo $id ?>&order=sented method=POST enctype=multipart/form-data> <table>
                    <?php while ($row_food = mysqli_fetch_array($result)) { ?>
                        <?php 
                        $sql1 = "select * from food where id_food = " . $row_food['id_food'] . "";
                        $result1 = mysqli_query($connect->connect(), $sql1);
                        $row_food1 = mysqli_fetch_array($result1) ?>
                        <tr>
                            <td><?php echo $row_food1['food_name']; ?></td>
                            <td><?php echo $row_food1['price']; ?></td>
                        </tr>
                    <?php } ?>
                    <tr></tr>


        </table>

        <br>
        <center><button class=button type=submit >ส่งของเรียบร้อย</button></center>
        </form>
        </div>



    </center>
    <script language="javascript" type="text/javascript">
        function myFunction() {
            window.location.href = "workpage.php";
        }
    </script>

</body>

</html>