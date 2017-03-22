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
               	<form action="library.addfile.php" id="add" method="get">
                	<table width="250px" >
                		<tbody>
            	    			<tr>
            	    				<td><p align="center">添加新书</p></td>
            	    			</tr>
            	    			<tr>
            	    				<td width="200px">书名</td>
            	    				<td width="300px"><input type="text" name="book_name"/></td>
            	    			</tr>
            	    			<tr>
            	    				<td >介绍</td>
            	    				<td width="400px">
            	    					<input width="300px" type="text" name="content"/>
            	    				</td>
            	    			</tr>
            	    			<tr>
            	    				<td>价格</td>
            	    				<td><input type="text"/ name="price"></td>
            	    			</tr>
            	    			<tr>
            	    				<td width="500px" align="right"><input type="submit" value="提交"/></td>
            	    			</tr>
                		</tbody>
                	</table>
                </form>
			</div>
			<div id="floor">版权所有LWK</div>
		</div>
	</body>
</html>