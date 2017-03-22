<?php
	require_once('../connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	$id_user = $_GET['id'];
	$sql = "select * from library where id=$id_user";
	$query  = mysqli_query($con,$sql);     //查询对应的书籍	
	//sprint_r(mysqli_fetch_array($query));   //输出查找到的数据
	if($query&&mysqli_num_rows($query)){       //判断数据是否有效
		while($row =mysqli_fetch_assoc($query) ){
			//if($row['id_user']!=0)
				$data[] = $row;         //将数据存放到数组中
		}
	}else{
		$data = array();
		echo "<script>alert('此书不存在');window.location.href='library.Find_book.php';</script>";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>图书管理</title>
		<style type="text/css">
            /*定义全局的div布局*/
            div#global{
                /*设置宽度，设置百分比可以根据浏览器自适应宽度*/
                width: 100%;
                /*设置高度，950px是设置是实体高度，不能自适应的*/
                height: 500px;
                /*设置背景颜色，方便区分布局*/
                background-color: silver; 
            }
            /*定义头部布局，前面的div可以不用写，#号前面默认有个id，凡事定义了id的标签，都可以用#号来表示*/
            #heading{
                width: 100%;
                height: 100px;
                background-color: #BB80F7;
            }
            #content_menu{
                width: 20%;
                height: 500px;
                background-color: #C5E9F3;
                /*定义浮动，不定义的话，界面会乱*/
                float: left;
            }
            #content_body{
                width: 80%;
                height: 500px;
                background-color: #F7575d;
                float: right;
            }
            #floor{
                /*删除浮动，不然会被其他的浮动给遮住*/
                clear: both;
                height: 100px;
                background-color: #8080FF
            }
        </style>
	</head>
	<body>
		<div id="global">
			<div id="heading"><h1 align="center"><strong>图书管理系统</strong></h1></div>
			<div id="content_menu">
				<ul class="nav">
				    <li><a href="library.php">返回</a></li>
				</ul>
			</div>
			<div id="content_body">
            	<table width="1000" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
                  <tr>
                    <td colspan="6" align="center" bgcolor="#FFFFFF">图书列表</td>
                    </tr>
                  <tr>
                    <td width="50" bgcolor="#FFFFFF">图书编号</td>
                    <td width="100" bgcolor="#FFFFFF">书名</td>
            		<td width="250" bgcolor="#FFFFFF">状态</td>
            		<td width="100" bgcolor="#FFFFFF">价格</td>
            		<td width="100" bgcolor="#FFFFFF">状态</td>
            		<td width="100" bgcolor="#FFFFFF" align="center">管理</td>
                  </tr>
                <?php 
            		if(!empty($data)){
            			foreach($data as $value){
            	?>
                  <tr>
                    <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
                    <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['name']?></td>
            		<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['content'];?></td>
            	    <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['price'];?></td>
            	    <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['borrow'];?></td>
            	    <td bgcolor="#FFFFFF">&nbsp;
            	    <a href="library.delete.php?delete_book=<?php echo $value['id']?>">删除</a>
            	    <a href="library.change.php?id=<?php echo $value['id']?>&name=<?php echo $value['name']?>&content=<?php echo $value['content']?>&price=<?php echo $value['price']?>">修改</a>
            	    </td>

                    <?php
                    		}
            		}
                    ?>
                </table>
			</div>
			<div id="floor">版权所有LWK</div>
		</div>
	</body>
</html>