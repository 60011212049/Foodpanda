<?php

class ConnectDB
{
    public function connect()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $db = "db_pandafood";
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db) or
            die("Connect failed %s\n" . $conn->erro);
        mysqli_set_charset($conn, "utf8");
        return $conn;
    }
    public function ckuser($user, $pass)
    {
        session_start();
        $sql  = "SELECT * FROM `user_food` WHERE iduser='" . $user . "' AND pass='" . $pass . "'";
        $result = mysqli_query($this->connect(), $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['status'] = $row['status'];
            $_SESSION['user'] = $row['user'];
            $_SESSION['pass'] = $row['pass'];

            if ($_SESSION['status'] == 'user') {
                header("Location:PageUser.php");
            } else if ($_SESSION['status'] == 'driver') {
                header("Location:indexDriver.php?state=logout");
            } else if ($_SESSION['status'] == 'admin') {
                header("Location:Pageadmin.php");
            } else
                header("Location:Login.php");
        } else {
            header("Location:Login.php");
            echo "Cannot Login";
        }
    }
    public function ckstore($user, $pass)
    {
        session_start();
        $sql  = "SELECT * FROM `store` WHERE store_name='" . $user . "' AND pass='" . $pass . "'";
        $result = mysqli_query($this->connect(), $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['store_name'];
            $_SESSION['lname'] = $row['tel'];
            $_SESSION['user'] = $row['user_name'];
            $_SESSION['pass'] = $row['pass'];


            header("Location:Pagestore.php");
        } else {
            header("Location:Login2.php");
            echo "Cannot Login";
        }
    }
    public function insert($user, $pass, $fname, $lname, $status, $email, $tel)
    {
        session_start();
        $sql =  "INSERT INTO `user_food`(`fname`, `lname`, `email`, `tel`, `iduser`, `pass`, `status`) 
        VALUES ('" . $fname . "','" . $lname . "','" . $email . "','" . $tel . "','" . $user . "','" . $pass . "','" . $status . "')";

        if (mysqli_query($this->connect(), $sql)) {
            if ($status == 'user') {
                header("Location:Login.php");
            }
            else if ($status == 'driver') {
                header("Location:Pageadmin.php");
            } 
            else if ($status == 'user' && $_SESSION['status'] == 'admin') {
                header("Location:Pageadmin.php");
            }
        } else echo "Cannot Insert";
        echo $sql;
    }
    public function insertfood($name, $price, $stoer,$food_img)
    {
        session_start();
        $sql =  "INSERT INTO `food`( `food_name`, `price`, `id_store`, `food_img`) 
        VALUES ('".$name."','".$price."','".$_SESSION['id']."','".$food_img."')";

        if (mysqli_query($this->connect(), $sql)) {
            header("Location:Pagestore.php");
            echo "Insert";
        } else echo "Cannot Insert";
        echo $sql;
    }
    public function updatafood($name, $price,$food_img)
    {
        session_start();
        $sql =  "UPDATE `food` SET `food_name`='".$name."',`price`='".$price."',`food_img`='".$food_img."' WHERE id_food=".$_SESSION["id_food"];

        if (mysqli_query($this->connect(), $sql)) {
            header("Location:Pagestore.php");
            echo "Insert";
        } else echo "Cannot up";
        echo $sql;
    }
    public function insertstore($user, $pass, $fname, $loc, $tel)
    {
        
        $sql =  "INSERT INTO `store`( `store_name`, `user_name`, `pass`, `tel`, `loc`) 
        VALUES ('" . $fname . "','" . $user . "','" . $pass . "','" . $tel . "','" . $loc . "')";

        if (mysqli_query($this->connect(), $sql)) {
            header("Location:Pageadmin.php");
            echo "Insert";
        } else header("Location:Pageadmin.php");
        echo $sql;
    }

    public function insertOrder($bill, $food)
    {
        $sql =  "INSERT INTO `list_food`(`id_bill`, `id_food`) VALUES (".$bill.",".$food.")";
        $result = mysqli_query($this->connect(), $sql);
    }

    public function insertBill($id_bill,$cus, $shop)
    {
        $sql =  "INSERT INTO `food_order`(`id`, `id_cus`, `id_shop`) VALUES (".$id_bill.",".$cus.",".$shop.")";

        if (mysqli_query($this->connect(), $sql)) {
            // header("Location:PageUser.php");
            echo "Success";
        } else header("Location:PageUser.php?error");
        echo "bill : ".$id_bill."<br>";
        echo "cus : ".$cus."<br>";
        echo "shop : ".$shop."<br>";
    }
    public function clearOrder($order)
    {
        $sql =  "DELETE FROM `food_order` WHERE id = " . $order . "";
        if (mysqli_query($this->connect(), $sql)) {
            header("Location:workPage.php");
        } else echo $sql;
    }

    public function updateuser($id, $user, $pass, $fname, $lname, $status, $email, $tel)
    {
        session_start();
        $sql = "UPDATE `user_food` SET 
        `fname`='" . $fname . "',`lname`='" . $lname . "',`email`='" . $email . "',`tel`='" . $tel . "',`iduser`='" . $user . "',`pass`='" . $pass . "',`status`='" . $status . "' 
        WHERE id=" . $id;
        echo $sql;
        if (mysqli_query($this->connect(), $sql)) {
            echo 'update User';
            echo $_SESSION['status'];
            if ($_SESSION['status'] == 'admin') {
                header("Location:Pageadmin.php");
            } else if ($_SESSION['status'] == 'user') {
                header("Location:member.php");
            } else if ($_SESSION['status'] == 'driver') {
                header("Location:indexDriver.php");
            }
        } else  header("Location:Pageadmin.php");
    }

    public function updatestore($id, $user, $pass, $fname, $loc, $tel)
    {
        session_start();
        $sql = "UPDATE `store` SET 
        `id`='" . $id . "',`store_name`='" . $fname . "',`user_name`='" . $user . "',`pass`='" . $pass . "',`tel`='" . $tel . "',`loc`='" . $loc . "' 
        WHERE id=" . $id;

        if (mysqli_query($this->connect(), $sql)) {
            echo 'update';
            if($_SESSION['status'] == 'admin'){
                header("Location:Pageadmin.php");
            }
            else {
                header("Location:Pagestore.php");
            }
            
        } else  header("Location:Pageadmin.php");
    }







    public function update($fname, $lname, $sex, $stuatus, $user, $pass)
    {
        session_start();
        $sql = "UPDATE `db_user` SET `user`=[value-2],`pass`=[value-3],`fname`=[value-4],`lname`=[value-5],`sex`=[value-6],
        `stuatus`=[value-7],`age`=[value-8],`email`=[value-9],`img`=[value-10] WHERE 1";
        echo $sql;
        if (mysqli_query($this->connect(), $sql)) {
            echo 'update';
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['sex'] = $sex;
            $_SESSION['stuatus'] = $stuatus;
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            header("Location:member.php");
        } else echo "Cannot update";
    }

    public function delete($del)
    {
        $sql = "Delete from db_user where iduser=" . $del;
        echo $sql;
        if (mysqli_query($this->connect(), $sql)) {
            header("Location:admin.php");
        } else echo "Cannot update";
    }
}
