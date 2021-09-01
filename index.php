<?php
    include("functions.php");

   // check_login();
    addPaste();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to pastbin</title>
</head>
<body>
    <h1><?php 
    echo $login;
    
    ?></h1>
    <a href="add.php">add</a>
    <a href="login.php?action=login">login</a><br>
   <?php 
    if(isset($_GET['login'])){

        switch ($_GET['login']) {
            case 'create':
                adduser($_POST['login'],$_POST['pass']);
                break;
            case 'login':
                check_login();
                break;
            
            default:
                addPaste();
                break;
        }

    }
   ?>
    <?php
    paste();
    ?>
</body>
</html>