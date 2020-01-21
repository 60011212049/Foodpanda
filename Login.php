<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>FoodPanda - Login</title>
    </head>
    <body style="background-image: url('img/background1.jpg'); ">
        <div class="topnav" id="myTopnav">
            <p>foodpanda</p>
            <a href="index.php">หน้าหลัก</a>
            <a class="active">เข้าสู่ระบบ</a>
            <a href="Register.php">สมัครสมาชิก</a>
            <a href="#Promotion">โปรโมชั่น</a>
            <a href="Aboutus.php">เกี่ยวกับเรา</a>
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
            <img src="img/logo1.png" style="width:408px; margin-top:100px;">
        </center>
        <div class="setformLogin" style="margin-left:auto; margin-right:auto;">
            <form name="formLogin" method="POST" enctype="multipart/form-data" action="check.php">       
                <label style="font-weight: 1000; color: white;" for="user">ชื่อผู้ใช้งาน :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputLogin" type="text" id="user" name="user" minlength="4" maxlength="30" required><br><br>

                <label style="font-weight: 1000; color: white;" for="pass">รหัสผ่าน :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputLogin" type="password" id="pass" name="pass" minlength="4" maxlength="30" required><br><br>

                <center>
                    <input class="btLogin" type="submit" name="submit" value="เข้าสู่ระบบ">
                </center>
            </form>
        </div>
                
    </body>
</html>
