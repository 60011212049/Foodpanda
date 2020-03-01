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

        tr:nth-child(even) {
            background-color: #dddddd;
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
            session_start();
            require_once './ActionDB.php';
            $id = $_REQUEST['id'];
            $connect = new connectDB();
            if ($connect->connect()) {
                $sql = "select * from store where id=" . $id . "";
                $sql_food = "select * from food where id_store=" . $id . "";
                $result = mysqli_query($connect->connect(), $sql);
                $result_food = mysqli_query($connect->connect(), $sql_food);
            } else echo "Cannot connect!!!";
            $x = 0;
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<div class=clearfix><form action=check.php?shop=" . $row['id'] . "&order=sent method=POST enctype=multipart/form-data>";
                echo "<p class=tagP >ชื่อร้านค้า : " . $row['store_name'] . "</p>";
                echo "<p class=tagP >ติดต่อ : " . $row['tel'] . "</p>";
                echo "<p class=tagP >ที่อยู่ร้านค้า : " . $row['loc'] . "</p>";
                echo "</form></div>";
                echo "</tr>";
            }
            echo "</form></div>";
            echo "</tr>";
            ?>
        </table>
        <div class="clearfix">
            <form name="checkForm" action=check.php?shop=<?php echo $id; ?>&order=sent method=POST enctype=multipart/form-data onSubmit="JavaScript:return check();">
                <table>
                    <?php while ($row_food = mysqli_fetch_array($result_food)) {?>
                        <tr>
                            <td><input type="checkbox" id="food<?php echo $i ?>" name="food[]" value=<?php echo $row_food['id_food']; ?>></td>
                            <td><?php echo $row_food['food_name']; ?></td>
                            <td><?php echo $row_food['price']; ?></td>
                        </tr>
                    <?php } ?>
                    <tr></tr>
                </table>
                <br>
                <center><input type=submit value="submit"></center>
            </form>
        </div>
    </center>
    <script type="text/javascript">
        function check() {
            var checkboxes = document.getElementsByName('food[]');
            var vals = 0;
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                if (checkboxes[i].checked != true) {
                    vals = vals + 1;
                }
            }
            if(vals == checkboxes.length){
                alert("กรุณาเลือกอาหารอย่างน้อย 1 อย่าง");
                return false;
            }
            
            return true;

        }
    </script>

</body>

</html>