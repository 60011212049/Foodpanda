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
            <tr>
                <div class="clearfix" style="border: 5px solid #cc0066;width: 50%;padding: 3px;">
                    <img src="img/pro1.png" style="width:50%;float: right;">
                    <!--<h3>Kito B.Duck BE4</h3>-->
                    <!--<p class="price">388.- baht</p>-->
                    <p><button>ดูรายละเอียดเพิ่มเติม</button></p>
                </div>
            </tr>
        </table>



    </center>
    <script language="javascript" type="text/javascript">
        function myFunction() {
            window.location.href = "index.php";
        }
    </script>

</body>

</html>