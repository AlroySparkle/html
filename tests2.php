<?php
session_start();
    if(isset($_POST["name"], $_POST["password"])){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        if($name == "ali" && $pass == "123"){
            $_SESSION["username"] = $name;
            echo "success";
        }
        else{
            echo "failed";
        }
    }
    else{    
     header("Location:tests.php");
    }
?>