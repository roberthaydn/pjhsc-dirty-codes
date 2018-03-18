<?php

//selecting data
 try {
    $dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
 } catch (PDOException $exception) {
    printf("Connection error: %s", $exception->getMessage());
 }
 
//query
 $sql = "INSERT INTO `employees` SET 
                     `id`=:id,
                     `username`=:username, 
                     `firstname`=:firstname,
                     `lastname`=:lastname,
                     `password`=:password,
                     `gender`=:gender,
                     `age`=:age,
                     `salary`=:salary,
                     `absent`=:absent,
                     `status`=:status";
//prepare statement
 $stmt = $dbh->prepare($sql);

 @$field_source = $_POST['id'];

 $query = 'SELECT * FROM `employees` WHERE `id`=:id';
 $select = $dbh->prepare($query); 
 $select->bindValue(':id', $field_source);
 $select->execute();

 if ($row = $select->fetch(PDO::FETCH_ASSOC)) {
     $u = $row['username'];
     $f = $row['firstname'];
     $l = $row['lastname'];
     $g = $row['gender'];

    //info nga karuyag ig insert
     $id = '';
     $username = $u;
     $firstname = $f;
     $lastname = $l;
     $password = $g;
     $gender = 'test5';
     $age = '11';
     $salary = '330000';
     $absent = '0';
     $status = 'test6';

    //retrieve info by its named parameters
     $stmt->bindParam(':id', $id);
     $stmt->bindParam(':username', $username); 
     $stmt->bindParam(':firstname', $firstname);
     $stmt->bindParam(':lastname', $lastname); 
     $stmt->bindParam(':password', $password);
     $stmt->bindParam(':gender', $gender);
     $stmt->bindParam(':age', $age); 
     $stmt->bindParam(':salary', $salary); 
     $stmt->bindParam(':absent', $absent);
     $stmt->bindParam(':status', $status);
     $stmt->execute();

      echo '<pre>';
      print_r($stmt->errorInfo());
      echo '</pre>';
}

?>