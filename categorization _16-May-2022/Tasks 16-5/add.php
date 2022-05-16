<?php
    include_once 'connect.php';

    try {
        // if (!empty($_SESSION['pname'])) {
            $product_name = $_POST['pname'];
            $product_price = $_POST['price'];
            $product_category = $_POST['category'];

            $query1 = "INSERT INTO product(name, price, category)
            VALUES (:name, :price, :category) ";
            $statment2 = $conn->prepare($query1);
            $statment2->execute([
                ':name' => $product_name,
                ':price' => $product_price,
                ':category' => $product_category
            ]);
            echo "New record created successfully";
            header('location:show.php');
        }catch (PDOException $e) {
            echo $query1 . "<br>" . $e->getMessage();
        } finally {
            $conn = NULL;
        }
            ?>