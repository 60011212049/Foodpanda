<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>FoodPanda - About Us</title>
    </head>
    <body style="background-image: url('img/background1.jpg'); ">
        <div class="topnav" id="myTopnav">
            <p>foodpanda</p>
            <a href="index.php">หน้าหลัก</a>
            <a href="Login.php">เข้าสู่ระบบ</a>
            <a href="Register.php">สมัครสมาชิก</a>
            <a href="#Promotion">โปรโมชั่น</a>
            <a class="active">เกี่ยวกับเรา</a>
        </div>

        <div style="margin-top:3%"></div>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } 
                else {
                    x.className = "topnav";
                }
            }
        </script>
        <center>
            <img src="img/logo1.png" style="width:408px; margin-top:70px;">
        </center>
        
    </body>
</html>
