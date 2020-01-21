<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Welcome to FoodPanda</title>
    </head>
    
    <body>
        <div class="topnav" id="myTopnav">
            <p>foodpanda</p>
            <a href="index.php">หน้าหลัก</a>
            <a class="active" href="Login.php" >เข้าสู่ระบบ</a>
            <a href="Register.php?i=1">สมัครสมาชิก</a>
            <a href="Aboutus.php">เกี่ยวกับเรา</a>
        </div>
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
        <div class="bg-img">
            <form class="example" action="#" style="margin:auto;max-width:300px">
                <img src="img/logo1.png" style="width:100%; margin-top:30%;">
                <input type="text" placeholder="ค้นหาร้านอาหาร" name="search" maxlength="40">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        
        <div style="margin-top:20px"></div>
        
        <center>
            <div class="row" style="width:80%">
                <div class="column">
                    <div class="card">
                        <img src="img/pro1.png" style="width:100%">
                        <!--<h3>Kito B.Duck BE4</h3>-->
                        <!--<p class="price">388.- baht</p>-->
                        <p><button>ดูรายละเอียดเพิ่มเติม</button></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="img/pro2.jpg" style="width:100%">
                        <!--<h3>Kito BE7</h3>-->
                        <!--<p class="price">388.- baht</p>--> 
                        <p><button>ดูรายละเอียดเพิ่มเติม</button></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="img/pro3.jpg" style="width:100%">
                        <!--<h3>NEW Fashion Diva </h3>-->
                        <!--<p class="price">379.- baht</p>-->
                        <p><button>ดูรายละเอียดเพิ่มเติม</button></p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="img/pro4.jpg" style="width:100%">
                        <!--<h3>Kito BO4</h3>-->
                        <!--<p class="price">1080.- baht</p>-->
                        <p><button>ดูรายละเอียดเพิ่มเติม</button></p>
                    </div>
                </div>
            </div>
        </center>
          
        <center>  
            <h1>ร้านอาหารทั้งหมด</h1>
            <div class="row" style="width:80%">
                <div class="column2">
                    <div class="card2">
                        <img src="img/pro1.png" style="width:100%">
                        <h3>Kito B.Duck BE4</h3>
                        <!--<p class="price">388.- baht</p>-->
                        <p><button>ดูรายละเอียดเพิ่มเติม</button></p>
                    </div>
                </div>
                <div class="column2">
                    <div class="card2">
                        <img src="img/pro2.jpg" style="width:100%">
                        <h3>Kito BE7</h3>
                        <!--<p class="price">388.- baht</p>--> 
                        <p><button>ดูรายละเอียดเพิ่มเติม</button></p>
                    </div>
                </div>
                
            </div>
        </center>
       
    
    </body>
</html>
