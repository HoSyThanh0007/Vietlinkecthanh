<?php 
        session_start();
        require "./php.php";

        $query = "SELECT * FROM login";
        $use = getAll($query);
       
        
      
        foreach($use as $suv){
            if(isset($_POST["btn"])){
                if(!$_POST["email"] == "" && !$_POST["pass"] == ""){
                    // var_dump($suv["Email"]);die;
                    
                    if($_POST["email"] == $suv["gmail"] && $_POST["pass"] == $suv["Pass"]){
                        $_SESSION["email"] = $_POST["gmail"];
                     header('location:./home.php');
                    }else{
                        
                    }
                }
              
            }
        }

    ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./dangnhap.php" method="POST">
        <input type="text" name="email" id="">
        <input type="password" name="pass" id="">
        <input type="submit" name="btn" id="">
       
    </form>
</body>
</html> -->