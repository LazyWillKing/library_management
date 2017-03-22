<?php
    require '../connect.php';    //重载一次php文件
    $id=$_GET['id'];
    echo $id;
    $line="update library set borrow='借出' where id='$id'";
    if (mysqli_query($con, $line)){
        echo "<script>alert('借书成功');window.location.href='library.borrow.php';</script>";
    }
    else echo "<script>alert('借书失败');window.location.href='library.borrow.php';</script>"
?>