<?php
    require '../connect.php';   
    $id=$_GET['id'];
    echo $id;
    $line="update library set borrow='未借出' where id='$id'";
    if (mysqli_query($con, $line))
        echo "<script>alert('还书成功');window.location.href='library.return_book.php';</script>";
    else echo "<script>alert('还书失败');window.location.href='library.return_book.php';</script>"
?>