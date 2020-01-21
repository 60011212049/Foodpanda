<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSSTopnav.css" title="style">
    <title>FoodPanda - Login</title>
</head>
<body>

<div class="topnav" id="myTopnav">
    <p>foodpanda</p>
    <a href="Login.php">เข้าสู่ระบบ</a>
    <a href="Register.php">สมัครสมาชิก</a>
    <a href="#Promotion">โปรโมชั่น</a>
    <a href="Aboutus.php">เกี่ยวกับเรา</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

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

</body>
