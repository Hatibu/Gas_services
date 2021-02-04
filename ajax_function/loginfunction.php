 <?php
//session_start();
//require ("database/connection.php");

if(isset($_POST["submit"])){

    $username = $_POST["username"]; 
    $password = $_POST["password"];
    $passhash = MD5($password);
    
    $sql = "SELECT * FROM Account_tbl WHERE username ='".$username."' AND password ='".$passhash."'";
    $result = mysqli_query($connection,$sql);
    $num = mysqli_num_rows($result);

    if ($num > 0){
        while($row = mysqli_fetch_array($result)){
            $userid = $row["ID"];
            $usernamedb = $row["username"];
            $level = $row["level"];
            //echo $level;
           // echo $usernamedb;

            if ($level == "Administrator"){
                $_SESSION["username"]= $usernamedb;
                $_SESSION["level"] = $level;
               header('location:index.php?p=dashboard');

            }elseif($level == "Accountant"){
                $_SESSION["username"]= $usernamedb;
                $_SESSION["level"] = $level;
                header('location:index.php?p=dashboard');

            }elseif($level == "Dealer"){
                $_SESSION["username"]= $usernamedb;
                $_SESSION["level"] = $level;
                header('location:index.php?p=dashboard');

            }elseif($level == "SuperDealer"){
                $_SESSION["username"]= $usernamedb;
                $_SESSION["level"] = $level;
                header('location:index.php?p=dashboard');

            }elseif($level == "StoreKeeper"){
                $_SESSION["username"]= $usernamedb;
                $_SESSION["level"] = $level;
                header('location:index.php?p=dashboard');
                
            }else{
                echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>wrong username or password...!</b>
            </div>
        ";
            }
            
        }
        
    }else{

        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>wrong username or password...!</b>
            </div>
        ";
    }
}

































?>