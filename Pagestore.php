<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>
    <body style="background-image: url('img/background1.jpg'); ">
    <?php
        session_start();
        if($_SESSION['fname'] == ''){

        } 
    ?>
        <div class="topnav" id="myTopnav">
            <p>foodpanda</p>
            <a href="logout.php">ออกจากระบบ</a>
            <a href="">ลบรายการอาหาร</a>
            <a href="">แก้ไขรายการอาหาร</a>
            <a href="">เพิ่มรายการอาหาร</a>
            <a href="">จัดการร้านค้า</a>
            <a class="active"> ชื่อ : <?php echo $_SESSION['fname']; ?> </a>

        </div>
        <div style="margin-top:3%"></div>
    <center>
        <div class="card">
        
        </div>
     </center>
                
    </body>
</html>
