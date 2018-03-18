
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="sql_search_improved.php" method="POST">
		Search:<input type="search" name="search" placeholder="enter here..." />
		<select name="filter">
			<option value="" disabled selected>Filter:</option>
			<option value="username">Username</option>		
			<option value="firstname">First name</option>
			<option value="lastname">Last name</option>
			<option value="gender">Gender</option>
			<option value="salary">Salary</option>
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
		$filter = @$_POST['filter'];
		
		$tbl = 'employees';

		$sql="SELECT * FROM $tbl WHERE $filter LIKE :keyword;";
		$search=$dbh->prepare($sql);
		$search->bindValue(':keyword','%'.$keyword.'%');
		$search->execute();

		if(!($search->rowCount() == null)) {

			echo '<div><b>Result(s) found: </b></div><br>';
			echo '<table border="1" cellspacing="0" cellpadding="12">';
			echo '<tr style="background-color:#f1c40f;">
					<th>Username</th><th>Firstname</th><th>Lastname</th>
					<th>Gender</th><th>Age</th><th>Salary</th><th>Absent</th>
					<th>Status</th>
				 </tr>';

			while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
			    //echo"<pre>".print_r($row,true)."</pre>";
			    //string
			    $username = $row['username'];
			    $firstname = $row['firstname'];
			    $lastname = $row['lastname'];
			    $gender = $row['gender'];
			    $age = $row['age'];
			    $salary = $row['salary'];
			    $absent = $row['absent'];
			    $status = $row['status'];
?>
	
		<tr style="background-color:#f4e8ba;">
			<td><?= $username; ?></td>
			<td><?= $firstname; ?></td>
			<td><?= $lastname; ?></td>
			<td><?= $gender; ?></td>
			<td><?= $age; ?></td>
			<td><?= $salary; ?></td>
			<td><?= $absent; ?></td>
			<td><?= $status; ?></td>
		</tr>
<?php			    
			}
		echo '</table>';
		} else {
			echo 'Results not found!';
		}
}
?>




