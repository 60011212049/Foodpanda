<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
    <link rel="stylesheet" type="text/css" href="CSSButton.css" title="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FoodPanda - Login</title>
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
        <img src="img/logo1.png" style="width:408px; margin-top:100px;"><br>
        <button style="margin: 20px 20px; font-size: 18px;" class="button button4" onclick="myFunction()">เริ่มทำงาน</button>
    </center>
    <script language="javascript" type="text/javascript">
        function myFunction() {
            window.location.href="workPage.php";
        }
    </script>

</body>

</html>