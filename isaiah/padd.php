<?php
include 'pdb.php';
include 'navigationbar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', $price)";
    if (mysqli_query($conn, $sql)) {
        header('Location: pindex.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>


<div style="padding-left:650px">
    <h1>Add Product</h1>
</div>

<div style="padding-left:665px">
    <form method="POST">
        <label>Name:</label><br>
        <input type="text" name="name"><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br>
        <label>Price:</label><br>
        <input type="number" name="price"><br><br>
        <input type="submit" value="Add">

        </form>
</div>
     
