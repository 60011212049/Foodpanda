<?php
require_once 'ActionDB.php';
error_reporting(E_ALL^E_NOTICE);

$user = $_POST['user'];
$pass = $_POST['pass'];
$submit = $_POST['submit'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tel = $_POST['tel'];
$email = $_POST['email'];
#echo $submit;
$con=new ConnectDB();
if ($submit == 'Login'){
    $con->ckuser($user, $pass);
}
else if($submit == 'ยืนยันการสมัคร'){
    $stuatus = "user";
    $con->insert($user,$pass,$fname, $lname, $stuatus ,$email ,$tel);
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