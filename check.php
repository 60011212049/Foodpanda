<?php
require_once 'ActionDB.php';
error_reporting(E_ALL^E_NOTICE);

$order = $_REQUEST['order'];
$shop = $_REQUEST['shop'];
$text = $_POST['text'];

$loc = $_POST['loc'];

$user = $_POST['user'];
$pass = $_POST['pass'];
$submit = $_POST['submit'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tel = $_POST['tel'];
$email = $_POST['email'];
#echo $submit;
$con=new ConnectDB();
if ($submit == 'เข้าสู่ระบบ'){
    $con->ckuser($user, $pass);
}
else if ($submit == 'เข้าสู่ระบบร้าน'){
    $con->ckstore($user, $pass);
}
else if($submit == 'ยืนยันการสมัคร'){
    $stuatus = "user";
    echo "ok";
    $con->insert($user,$pass,$fname, $lname, $stuatus ,$email ,$tel);
}
else if($submit == 'ยืนยันการเเก้ไข'){
    
    $id=$_REQUEST['id'];
    $sql = "select * from user_food where id=".$id;
    $result= mysqli_query($con->connect(), $sql);
        
    if(mysqli_num_rows($result) == 1){
        $row=mysqli_fetch_array($result);
        $status = $row['status'];
        echo $status;
    }
    else echo "not";
    $con->updateuser($id,$user,$pass,$fname,$lname,$status,$email,$tel);
}
else if($submit == 'ยืนยันการเเก้ไขร้านค้า'){
    $id=$_REQUEST['id'];
    
    $con->updatestore($id,$user,$pass,$fname,$loc,$tel);
}
else if($submit == 'ยืนยันการเพื่มรายชื่อคนขับ'){
    $status = "driver";
    echo "ok";
    $con->insert($user,$pass,$fname, $lname, $status ,$email ,$tel);
}
else if($submit == 'ยืนยันการเพื่มร้านค้า'){
    
    echo "ok";
    $con->insertstore($user,$pass,$fname, $loc ,$tel);
}
else if($order == 'sent'){
    $sql = "select * from store where id=".$shop;
    $result= mysqli_query($con->connect(), $sql);
    $row=mysqli_fetch_array($result);
    $con->insertOrder($order,$row['name'],$text);
}
else if($order == 'sented'){
    $con->clearOrder($shop);
}
else if($submit == 'เพื่มรายการ'){
    $price = $_POST['price'];
    $id=$_REQUEST['id'];
    echo $id;
    #$con->insertfood($fname,$price,$stoer);
}
else{
    $d = $_REQUEST['d'];
    echo $d;
    if($d == 1){
        $id=$_REQUEST['ID'];
        $sql = "DELETE FROM `user_food` WHERE id=".$id;
        if(mysqli_query($con->connect(), $sql)){
            header("Location:Pageadmin.php");
        }else echo "Cannot ";
        echo $sql;
    }
    else if($d == 2 ){
        $id=$_REQUEST['ID'];
        $sql = "DELETE FROM `store` WHERE id=".$id;
        if(mysqli_query($con->connect(), $sql)){
            header("Location:Pageadmin.php");
        }else echo "Cannot ";
        echo $sql;
    }
    
    
}


/*$pass = $_POST['pass'];
$fname = $_GET['fname'];
$lname = $_POST['lname'];
$sex = $_POST['sex'];
$stuatus = $_POST['$stuatus'];
$img = $_POST['$img'];
$age = $_GET['$age'];
$email = $__GET['$email'];
$submit=$_GET['submit'];



$con=new ConnectDB();


'''if ($submit == "Insert"){ 
//    echo 'OK';
    
    if($sex == 'on')
        $sex = 'F';
    if($stuatus == "")
        $stuatus = "user";
        // echo $user,$pass,$fname,$lname,$sex,$stuatus,$age;
        echo $age."+++".$email;
    //$con->insert($user,$pass,$fname, $lname, $sex, $stuatus,$age ,$email,$img );
}
else if($submit == 'Update'){
    
    $con->update($fname, $lname, $sex, $stuatus, $user, $pass);
}
else if($submit == ""&&$_REQUEST['ID'] != NULL){
//    echo 'ok';
    $id = $_REQUEST['ID'];
    $con->delete($id);
}
else{
//    echo 'ok2';
    $con->ckuser($user, $pass);
}*/