<?php

$error=''; //Variable to Store error message;

if(isset($_POST['submit'])){

    if(empty($_POST['user']) || empty($_POST['pass'])){
        $error = "Username or Password is Invalid";
    }
    else
    {
        //Define $user and $pass
        session_start(); 
        $user = $_POST['user'];
        $_SESSION["user_email"] = $user;
        
        $pass=$_POST['pass'];
        //Establishing Connection with server by passing server_name, user_id and pass as a patameter
        $conn = mysqli_connect("localhost", "root", "");
        //Selecting Database
        $db = mysqli_select_db($conn, "cp");
        //sql query to fetch information of registerd user and finds user match.
        $query = mysqli_query($conn, "SELECT * FROM user WHERE user_pass='$pass' AND user_email='$user'");
        
        $rows = mysqli_num_rows($query);
        echo "rows=".count($rows);
        
        if($rows == 1){
            header("Location: catalog.php"); // Redirecting to other page
            $row = $rows->fetch_assoc();
            $id = $row["user_id"];
            $_SESSION["user_id"] = $id;
            echo "id=".$id;
        }
        else
        {
            $error = "Username of Password is Invalid";
        }
        mysqli_close($conn); // Closing connection
    }
}

?>