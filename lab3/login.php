<?php
session_start();
      include 'data.php'; 
      if(isset($_POST['submit'])){    
         foreach($mang1 as $key =>$value){
          if( $_POST['username'] == $value['username'] &&  $_POST['password'] == $value['passwork'] ){
         
            $_SESSION['ten'] = $_POST['username'];
            $_SESSION['matkhau'] = $_POST['password'];
            header('location:file.php');
           exit;
          }else{
            echo 'bạn đã đăng nhập sai ';
          }
         }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method='post' action="">
       username <input type="text" name='username' > <br>
       passwword <input type="text" name='password'>
       <br>
       <button type="submit" name="submit" value="Submit">Đăng nhập</button>
  </form>
</body>
</html>