<?php
// Get the product data
/*$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');*/
$name = filter_input(INPUT_POST, 'name');
/*$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);*/

// Validate inputs
if ($name == null) {
    $error = "Invalid category data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO categories_guitar1
                 (categoryName)
              VALUES
                 (:name)';
    $statement = $db->prepare($query);
    /*$statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);*/
    $statement->bindValue(':name', $name);
    /*$statement->bindValue(':price', $price);*/
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('category_list.php');
}
?>