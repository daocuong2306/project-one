<?php
include 'data.php';
include 'hamxuly.php';

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

    <table border="1">
 
        <tr>
            <td>tên giảng viên</td>
            <td>tuổi </td>
            <td>lương </td>
        </tr>

        <?php   
        if(isset($_SESSION['ten']) && isset($_SESSION['matkhau'])){
         foreach($mang2 as $item =>$value){

        ?>
         <tr>
            <td> <?php echo $value['ten_gv'] ?></td>
            <td> <?php echo tinhtuoi($value['nam_sinh']) ?></td>
            <td> <?php echo tinhluong($value['luong_cb'],$value['so_gio_day'])?> </td>
        </tr>
        <?php
         }
        }        
        ?>
    </table>

    <form method='post' action="">
        <button type="submit" name="gui" value="gửi"> đăng xuất</button>
    </form>
    <?php  
    if(isset($_POST['gui'])){
   unset($_SESSION['ten']);
   unset($_SESSION['matkhau']);
   header('location:login.php');
   exit;
    }
?>
</body>
</html>