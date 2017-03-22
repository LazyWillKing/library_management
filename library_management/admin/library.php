<?php
    require '../connect.php';    //重载一次php文件


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                background-color: #C5E1F3;
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
				    <li><a href="library.borrow.php">借书</a></li>
				    <li><a href="library.return_book.php">还书</a></li>
				    <li><a href="library.find_book.php">查找图书</a></li>
				    <li><a href="library.add.php">添加图书</a></li>
				    <li><a href="library.manage.php">图书管理</a></li>
				</ul>
			</div>
			<div id="content_body">
				<div id="name">
					<table border="1">
						<!--<tr>
						    <td width="50">10</td>
						    <td width="50">20</td>
						    <td width="50">30</td>
						    <td width="50">40</td>
					 		<td width="100">50</td>	
					  	</tr>-->
					</table>
				</div>
			</div>
			<div id="floor">版权所有LWK</div>
		</div>
	</body>
</html>