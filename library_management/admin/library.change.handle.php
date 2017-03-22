<?php
    require '../connect.php';
    //添加图书
    $id=$_GET['id'];        //得到传递的四个值
    $name=$_GET['book_name'];
    $content=$_GET['content'];
    $price=$_GET['price'];
    //写入到数据库中
    $line="update library set name='$name',content='$content',price='$price' where id='$id'";
    if($name&&$price&&mysqli_query($con,$line))     //$con的作用是什么？？？
        echo "<script>alert('修改成功');window.location.href='library.php';</script>";
    else echo "<script>alert('修改失败');window.location.href='library.php';</script>";
?>