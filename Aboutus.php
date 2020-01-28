<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>FoodPanda - About Us</title>
    </head>
    <style>
    .column3 {
        background-color: #ffcce4;
        float: left;
        width: 19%;
        height: 390px;
        padding: 10px;
        border: 5px solid #cc0066;
        border-radius: 5px;
        margin-left:10px;
    }
    </style>
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

        <center>
            <div class="row" style="width:80%">
                <div class="column3">
                    <div class="card">
                        <img src="img/tar.jpg" style="width:100%">
                        <h3>60011212049</h3>
                        <!--<p class="price">388.- baht</p>-->
                    </div>
                </div>
                <div class="column3">
                    <div class="card">
                        <img src="img/bas.jpg" style="width:100%">
                        <h3>60011212105</h3>
                        <!--<p class="price">388.- baht</p>--> 
                    </div>
                </div>
                <div class="column3">
                    <div class="card">
                        <img src="img/joker.jpg" style="width:100%">
                        <h3>60011212214</h3>
                        <!--<p class="price">379.- baht</p>-->
                    </div>
                </div>
                <div class="column3">
                    <div class="card">
                        <img src="img/tang.jpg" style="width:100%">
                        <h3>60011212xxx</h3>
                        <!--<p class="price">1080.- baht</p>-->

                    </div>
                </div>
                <div class="column3">
                    <div class="card">
                        <img src="img/nice.jpg" style="width:100%">
                        <h3>60011212048</h3>
                        <!--<p class="price">388.- baht</p>-->
                    </div>
                </div>
            </div>
        </center>
        
    </body>
</html>
