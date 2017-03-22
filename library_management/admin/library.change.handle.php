<?php
    require '../connect.php';
    //添加图书
    $id=$_GET['id'];
    $name=$_GET['book_name'];
    $content=$_GET['content'];
    $price=$_GET['price'];
    $line="update library set name='$name',content='$content',price='$price' where id='$id'";
    if($name&&$price&&mysqli_query($con,$line))     //$con的作用是什么？？？
        echo "<script>alert('修改成功');window.location.href='library.php';</script>";
    else echo "<script>alert('修改失败');window.location.href='library.php';</script>";
?>