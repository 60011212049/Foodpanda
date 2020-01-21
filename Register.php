<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>FoodPanda - Register</title>
    </head>
    <body style="background-image: url('img/background1.jpg'); ">
        <div class="topnav" id="myTopnav">
            <p>foodpanda</p>
            <a href="index.php">หน้าหลัก</a>
            <a href="Login.php">เข้าสู่ระบบ</a>
            <a class="active">สมัครสมาชิก</a>
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
            <img src="img/logo1.png" style="width:408px; margin-top:70px;">
        </center>
        <div class="setformRegister" style="margin-left:auto; margin-right:auto;">
            <form name="form" method="POST" enctype="multipart/form-data" action="check.php">
                <label style="font-weight: 1000; color: white;" for="fname">ชื่อ :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="fname" name="fname" maxlength="20" required><br><br>

                <label style="font-weight: 1000; color: white;" for="lname">นามสกุล :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="lname" name="lname" maxlength="20" required><br><br>

                <label style="font-weight: 1000; color: white;" for="email">อีเมล :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="email" name="email" maxlength="40" required><br><br>
                
                <label style="font-weight: 1000; color: white;" for=tel>เบอร์โทรศัพท์มือถือ :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="tel" name="tel" maxlength="10" required><br><br>

                <label style="font-weight: 1000; color: white;" for="user">ชื่อผู้ใช้งาน :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="user" name="user" minlength="4" maxlength="30" required><br><br>

                <label style="font-weight: 1000; color: white;" for="pass">รหัสผ่าน :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="password" id="pass" name="pass" minlength="4" maxlength="30" required><br><br>

                <center>
                    <input class="btRegister" type="submit" name="submit" value=ยืนยันการสมัคร>
                </center>
            </form>
        </div>
                
    </body>
</html>
