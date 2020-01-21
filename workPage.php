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
            float: left;
            font-size: 100%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
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
        <table>
            <?php
            $x = 0;
            while ($x < 5) {
                echo "<tr>";
                echo "<div class=clearfix>";
                echo "<img class=imgfix src=img/pro1.png>";
                echo "<p class=tagP >ชื่อลูกค้า : ต้า</p><br>";
                echo "<p>รายการที่สั่ง : ตำไทย</p><br>";
                echo "</div>";
                echo "</tr>";
                $x = $x+1;
                echo $x;
            }

            ?>
        </table>



    </center>
    <script language="javascript" type="text/javascript">
        function myFunction() {
            window.location.href = "index.php";
        }
    </script>

</body>

</html>