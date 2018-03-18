
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="sql_search.php" method="POST">
		Search:<input type="search" name="search" placeholder="enter here..." />
		<select name="filter">
			<option value="" disabled selected>Filter:</option>
			<option value="username">Username</option>
			<option value="gender">Gender</option>
			<option value="firstname">First name</option>
			<option value="lastname">Last name</option>
		</select>
		<input type="submit" name="find" value=" Find ">
	</form>
</body>
</html>
<br><br>

<?php
//selecting data
 try {
 	$dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
 	printf("Connection error: %s", $exception->getMessage());
 }

if(isset($_POST['find'])) {

		$keyword = @$_POST['search'];
		//$filter = @$_POST['filter'];
		
		$sql="SELECT * FROM `employees` WHERE `firstname` LIKE :keyword;";
		$search=$dbh->prepare($sql);
		$search->bindValue(':keyword','%'.$keyword.'%');
		$search->execute();

		if(!($search->rowCount() == null)) {
			echo '<div>Result(s) found: </div><br>';
			while ($row=$search->fetch(PDO::FETCH_ASSOC)) {
			    //echo"<pre>".print_r($row,true)."</pre>";
			    //string

			    $firstname = $row['firstname'];
			    echo $firstname.'<br>';
			}
		} else {
			echo 'Results not found!';
		}
}
?>



