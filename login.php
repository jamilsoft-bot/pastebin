<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php
    if (isset($_GET['action'])) {

        switch ($_GET['action']) {
            case 'create':
                echo "<h1>user creation page</h1>";
                echo "<form action='index.php?login=create' method='post'>";
                echo "<input type='text' name='login' id=''><br>";
                echo "<input type='text' name='pass' id=''><br>";
                echo "<input type='submit' name='Login' value='login'>";
                echo "</form>";
                break;
            
            default:
            echo "<h1>user login page</h1>";
                echo "<form action='index.php?login=login' method='post'>";
                echo "<input type='text' name='login' id=''><br>";
                echo "<input type='text' name='pass' id=''><br>";
                echo "<input type='submit' name='Login' value='login'>";
                echo "</form>";
                break;
        }
        
    }
    

     ?>
    
</body>
</html>