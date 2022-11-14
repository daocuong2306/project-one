<?php
session_start();
if(isset($_SESSION['ten']) && isset($_SESSION['matkhau'])){
function tinhTuoi($namSinh) {
    return date("Y") - $namSinh;
}
function tinhluong($luong,$timeword){
    return ($luong*$timeword);
}
}

?>