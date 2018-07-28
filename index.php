<?php 
include_once('todo.php');

$a_file =file_get_contents('./todo.json');

$a_content =json_decode($a_file)->items;

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Todo App</title>
	<style>
		body{
			background: #66e;
			font-family: "roboto", sans-serif;
		}

		.wrapper{
			max-width: 300px;
			margin: 0 auto;
			padding: 20px 14px;
			text-align: left;
			align-content: center;
			background: #fff567;
		}

		.tx{text-align: center;}
	</style>
</head>
<body>
<div class="wrapper">
	<div class="tx">
		<h1>Todo App</h1>
		<form action="todo.php" method="POST">
			<input type="text" name="todo_item" placeholder="Enter todo item..." />
			<input type="submit" name="add_item" value="add Item" />
		</form>
	</div>
	<div class="todo-items">
		<ul>
			<?php for ($i=0; $i< count($a_content); $i++):?>
			<li>
			<?php echo $a_content[$i]->title; ?>
			</li>
			<?php endfor ?>
		</ul>
	</div>
</div>
</body>
</html>