<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSSNavbar.css" title="style">
    <title>FoodPanda - Login</title>
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="#home">FoodPanda</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <div class="dropdown">
        <button class="dropbtn">Dropdown 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <a href="#about">About</a>
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
</html>
