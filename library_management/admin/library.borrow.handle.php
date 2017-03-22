<?php
    require '../connect.php';    //重载一次php文件
    $id=$_GET['id'];        //获取传递的数据
    //echo $id;
    $line="update library set borrow='借出' where id='$id'";  //编辑借书的查询语句
    if (mysqli_query($con, $line)){
        echo "<script>alert('借书成功');window.location.href='library.borrow.php';</script>";
                //成功之后跳转到指定的界面，使用了JS语句
    }
    else echo "<script>alert('借书失败');window.location.href='library.borrow.php';</script>"
?>