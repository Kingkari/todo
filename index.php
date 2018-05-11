<!Doctype html>
<?php
	require_once('tddb.php');
	require_once('users_db.php');
	require_once('user.php');
	$users = UsersDB::getUsers();
?>
<html>
	<head>
		<title>Todo List</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
        <?php echo "Hello " . 
		<table class="usertable">
			<tr>
				<th>ID</th>
				<th>email</th>
				<th>fname</th>
				<th>lname</th>
				<th>phone</th>
				<th>birthdate</th>
				<th>gender</th>
				<th>password</th>
			</tr>	
			<?php foreach ($users as $user) : ?>
				<?php echo $user->displayUserRow(); ?>
			<?php endforeach; ?>		
		</table>
	</body>		
</html> 