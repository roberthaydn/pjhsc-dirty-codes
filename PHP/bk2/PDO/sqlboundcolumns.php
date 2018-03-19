<?php


function readData() {

	try {
		 $dbh = new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
	} catch (PDOException $e) {
		 printf("Connection error: %s", $e->getMessage());
	}

  $sql = 'SELECT sku, title FROM product';
  try {
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    /* Bind by column number */
    $stmt->bindColumn(1, $sku);
    //$stmt->bindColumn(2, $colour);
    
    /* Bind by column name */
    $stmt->bindColumn('title', $cals);

    while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
      $data = $sku . " " . $cals . "<br />";
      print $data;
    }
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }
}

readData();

?>