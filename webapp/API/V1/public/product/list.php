<?php
	global $database;

	//Read all entries from the database.
	$result = $database->query("SELECT product.*, category.name as id_category FROM product
		LEFT JOIN category as category ON category.category_id = product.id_category
		WHERE product.active = '1'"
	);
	
	$products = array();

	//Put all the entries into an array.
	while ($row = $result->fetch_assoc()) {
		$products[] = $row;
	}

	//Output the entire array.
	echo json_encode($products);
?>