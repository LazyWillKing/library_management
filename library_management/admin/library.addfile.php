<?php
    require '../connect.php';
    //添加图书
    $name=$_GET['book_name'];
    $content=$_GET['content'];
    $price=$_GET['price'];
   $line="insert into library(name,content,price,borrow) values('$name','$content','$price','未借出')";
   if($name&&$price&&mysqli_query($con,$line))     //$con的作用是什么？？？
       echo "<script>alert('添加成功');window.location.href='library.add.php';</script>";
   else echo "<script>alert('添加失败');window.location.href='library.add.php';</script>";
?>
