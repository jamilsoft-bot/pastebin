<?php

  $login = "";
  


function check_login(){
    global $login;
    if(isset($_POST['Login'])){
        $db = new mysqli("localhost","root","","pastebin");
        $sql = "SELECT * FROM `users` WHERE login='".$_POST['login']."'  AND pass= '".$_POST['pass']."'";
        $row = $db->query($sql);
        $r = $row->fetch_assoc();
        $user = $r['login'];
        
        $login = "test global";
        if ($user == null) {
            echo "<br><h1>record not found <a href='login.php?action=create'>create</a></h1><br>";
        }else{
            echo "<br>record found:" . $user;
            
           session_start();
           // $login;
            $_SESSION['user'] = $user;

           // $login = "test login";

  

  

        }
        
        
    }
}

function addPaste(){
    if(isset($POST['paste'])){
        /*global $title, $content;
        $title = $_POST['title'];
        $content = $_POST['content'];*/
       // echo "I see you";
    
    $db = new mysqli("localhost","root","","pastebin");
    $sql = "INSERT INTO `posts`(`title`,`content`) VALUES('".$_POST['title']."','".$_POST['content']."')";

    if($db->query($sql)){
        echo "<h1>Recordv added success</h1>";
    }else{
        $db->error;
    }

}
}

function adduser($user = "",$pass = ""){
    $db = new mysqli("localhost","root","","pastebin");
    $sql = "INSERT INTO `users`(`login`,`pass`) VALUES('".$user."','".$pass."')";

    if($db->query($sql)){
        echo "<h1>added success</h1>";
    }else{
        $db->error;
    }
}

function paste($single = false,$id = 0){
    if($single){
        $db = new mysqli("localhost","root","","pastebin");
    $sql = "SELECT * FROM posts WHERE id=".$id;
    $row = $db->query($sql);

    foreach ($row as $item) {
        echo "<h1>". $item['title']. "</h1>";
        echo "<div>". $item['content'] . "</div>";
        echo "<p>" . $item['date'] . "</p>";
    }
    }else {
        $db = new mysqli("localhost","root","","pastebin");
    $sql = "SELECT * FROM posts";
    $row = $db->query($sql);

    foreach ($row as $item) {
        echo "<li>". $item['title']. "</li>";
        echo "<a href='single.php?id=". $item['id'] . "'> Check</a>";
    }
    }
    
    
}

?>