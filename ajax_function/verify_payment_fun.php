<?php
require ("database/connection.php");
require ("database/connection2.php");

if(isset($_POST["submit"])){

$dealer_id = $_POST["dealer_id"];
$total = $_POST["total"];
$password = $_POST["password"];
$phone = $_POST["phone"];

// update m-pesa tables

   $sql = "SELECT * FROM dealers_mpesa_tbl WHERE cus_phone='".$phone."' AND password='".$password."'";
    $result = mysqli_query($connect,$sql);
    $num = mysqli_num_rows($result);
    if($num>0){

        while($row=mysqli_fetch_array($result)){
            $balance = $row["balance"];
            if($balance > $total){

                $sql1 = " UPDATE companys,dealers_mpesa_tbl SET companys.balanc = companys.balanc+'".$total."',dealers_mpesa_tbl.balance=dealers_mpesa_tbl.balance-'".$total."' WHERE cus_phone='".$phone."'";
                $result2 = mysqli_query($connect,$sql1);
                if($result2){

                    header('location:index.php?p=thank'); 
                    
                }
            }else{

            echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b> Your Do Not Have Enough Money For Your Account Please Recharge Your Account And Try Again ............! </b>
            </div>

            ";
            }
        }
    }else{

        echo "
            <div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b> Please Check Your PIN Again Or Your Phone Number If Is Right And Try Again ............! </b>
            </div>

        ";
    }




}

?>