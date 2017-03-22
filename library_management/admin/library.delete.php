<?php
    require '../connect.php';
    //删除图书
    $name=$_GET['delete_book'];
    
    
    $line="delete from library where id='$name'";
    if(mysqli_query($con,$line))     //$con的作用是什么？？？
       echo "<script>alert('删除成功');window.location.href='library.php';</script>";
   else echo "<script>alert('删除失败');window.location.href='library.php';</script>";
?>
