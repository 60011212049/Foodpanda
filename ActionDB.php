<?php

class ConnectDB {
    public function connect() {
        $dbhost="localhost";
        $dbuser="root";
        $dbpassword="";
        $db="db_pandafood";
        $conn=new mysqli($dbhost, $dbuser, $dbpassword, $db) or
            die("Connect failed %s\n". $conn->erro);
        mysqli_set_charset($conn, "utf8");
        return $conn;
    }
    public function ckuser($user, $pass){
        session_start();
        $sql  = "SELECT * FROM `user_food` WHERE iduser='".$user."' AND pass='".$pass."'";
        $result= mysqli_query($this->connect(), $sql);
        
        if(mysqli_num_rows($result) == 1){
            $row=mysqli_fetch_array($result);
            $_SESSION['id']=$row['id'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['email']=$row['email'];
            $_SESSION['stuatus']=$row['status'];
            $_SESSION['user']=$row['user'];
            $_SESSION['pass']=$row['pass'];

            if($_SESSION['stuatus'] == 'user'){
                header("Location:admin.php");
            }
            else if($_SESSION['stuatus'] == 'driver'){
                header("Location:indexDriver.php?state=logout");
            }
            else if($_SESSION['stuatus'] == 'admin'){
                header("Location:Pageadmin.php");
            }
            else
                header("Location:Login.php");

        }else{
            header("Location:Login.php");
            echo "Cannot Login";

        }
        
    }
    public function ckstore($user, $pass){
        session_start();
        $sql  = "SELECT * FROM `store` WHERE idstore='".$user."' AND pass='".$pass."'";
        $result= mysqli_query($this->connect(), $sql);
        
        if(mysqli_num_rows($result) == 1){
            $row=mysqli_fetch_array($result);
            $_SESSION['id']=$row['id'];
            $_SESSION['fname']=$row['name'];
            $_SESSION['lname']=$row['tel'];
            $_SESSION['user']=$row['user'];
            $_SESSION['pass']=$row['pass'];

            
            header("Location:Pagestore.php");

        }else{
            #header("Location:Login2.php");
            echo "Cannot Login";

        }
        
    }
     public function insert($user,$pass,$fname,$lname,$stuatus,$email,$tel) {
       
       $sql =  "INSERT INTO `user_food`(`fname`, `lname`, `email`, `tel`, `iduser`, `pass`, `status`) 
       VALUES ('".$fname."','".$lname."','".$email."','".$tel."','".$user."','".$pass."','".$stuatus."')";
       
       if(mysqli_query($this->connect(), $sql)){
           header("Location:index.php");
           echo "Insert";
       }else echo "Cannot Insert";
        echo $sql;
    }
    public function insertstore($user,$pass,$fname,$loc,$tel) {
       
        $sql =  "INSERT INTO `store`( `name`, `tel`, `loc`, `idstore`, `pass`) 
        VALUES ('".$fname."','".$tel."','".$loc."','".$user."','".$pass."')";
        
        if(mysqli_query($this->connect(), $sql)){
            header("Location:Pageadmin.php");
            echo "Insert";
        }else header("Location:Pageadmin.php");;
         echo $sql;
     }

    public function updateuser($id,$user,$pass,$fname,$lname,$status,$email,$tel){
        
        $sql = "UPDATE `user_food` SET 
        `fname`='".$fname."',`lname`='".$lname."',`email`='".$email."',`tel`='".$tel."',`iduser`='".$user."',`pass`='".$pass."',`status`='".$status."' 
        WHERE id=".$id ;
        echo $sql;
        if(mysqli_query($this->connect(), $sql)){
            echo 'update';
           if($_SESSION['stuatus'] == "admin"){
                header("Location:Pageadmin.php");
           }
           else if($_SESSION['stuatus'] == "user"){
                header("Location:member.php");
           }
           else if($_SESSION['stuatus'] == 'driver'){
                header("Location:indexDriver.php");
           }
        
       }else  header("Location:Pageadmin.php");
    }

    public function updatestore($id,$user,$pass,$fname,$loc,$tel){
        
        $sql = "UPDATE `store` SET 
        `name`='".$fname."',`tel`='".$tel."',`loc`='".$loc."',`idstore`='".$user."',`pass`='".$pass."' 
        WHERE id=".$id ;
        
        if(mysqli_query($this->connect(), $sql)){
            echo 'update';
           
            header("Location:Pageadmin.php");
           
       }else  header("Location:Pageadmin.php");
       
    }







    public function update($fname, $lname, $sex, $stuatus, $user, $pass){
        session_start();
        $sql = "UPDATE `db_user` SET `user`=[value-2],`pass`=[value-3],`fname`=[value-4],`lname`=[value-5],`sex`=[value-6],
        `stuatus`=[value-7],`age`=[value-8],`email`=[value-9],`img`=[value-10] WHERE 1" ;
        echo $sql;
        if(mysqli_query($this->connect(), $sql)){
            echo 'update';
           $_SESSION['fname']=$fname;
           $_SESSION['lname']=$lname;
           $_SESSION['sex']=$sex;
           $_SESSION['stuatus']=$stuatus;
           $_SESSION['user']=$user;
           $_SESSION['pass']=$pass;
           header("Location:member.php");
       }else echo "Cannot update";
    }
    
     public function delete($del){
            $sql ="Delete from db_user where iduser=".$del;
            echo $sql;
        if(mysqli_query($this->connect(), $sql)){
            header("Location:admin.php");
        }else echo "Cannot update";
    }
    
   
    
}
 ?>