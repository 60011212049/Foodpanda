<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>FoodPanda - Register</title>
    </head>
    
    <body style="background-image: url('img/background1.jpg'); ">
    <?php
    session_start();
        $i=$_REQUEST['i'];
        $id=$_SESSION["id"];   
        //echo $id;
    ?>
        
        <?php if ($i == 1) { ?>
            <div class="topnav" id="myTopnav">
            <p>foodpanda</p>
            
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
            function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
        <center>
            <img src="img/logo1.png" style="width:408px; margin-top:70px;">
        </center>

        <div class="setformRegister" style="margin-left:auto; margin-right:auto;">
            <form name="form" method="POST" enctype="multipart/form-data" action="check.php">
                
                <label style="font-weight: 1000; color: white;" for="fname">ชื่อ อาหาร:</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="fname" name="fname" maxlength="20" required><br><br>

                <label style="font-weight: 1000; color: white;" for="lname">ราคา :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="lname" name="price" maxlength="20" required><br><br>

                <input type='file' onchange="readURL(this);" />
                <img id="blah" src="http://placehold.it/180" alt="your image" style = "margin-bottom: 10px"/>

                <center>
                    <input class="btRegister" type="submit" name="submit" value=เพื่มรายการ>
                </center>
            </form>
        </div>
        <?php } 

         else if($i == 2){

            require_once './ActionDB.php';
            $con = new ConnectDB();
            $sql = "select * from food where id=".$id;
            $result = mysqli_query($con->connect(), $sql);
            $row = mysqli_fetch_array($result);
        ?>
            <div class="topnav" id="myTopnav">
                <p>foodpanda</p>
                    
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
            <form name="form" method="POST" enctype="multipart/form-data" action="check.php?id=<?php echo $id?>">

                <label style="font-weight: 1000; color: white;" for="fname">ชื่อ อาหาร:</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="fname" name="fname" maxlength="20" value=<?php echo $row['name'];?> required><br><br>

                <label style="font-weight: 1000; color: white;" for="lname">ราคา :</label><br>
                <div style="margin-top: 5px;">
                <input class="setinputRegister" type="text" id="lname" name="lname" maxlength="20" value=<?php echo $row['price'];?> required><br><br>
                
                <input type='file' onchange="readURL(this);" />
                <img id="blah" src="http://placehold.it/180" alt="your image" style = "margin-bottom: 10px"/>

              
                

                <center>
                    <input class="btRegister" type="submit" name="submit" value=ยืนยันการเเก้ไข>
                </center>
            </form>
        </div>
        <?php }
          

        

           
        ?>
           

        
                
    </body>
</html>
