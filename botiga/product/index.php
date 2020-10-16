<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Products</title>
    <link rel="stylesheet" href="../css/product.css">
</head>
<body>
    <form action="./submit.php" method="post">
        <label for="lname">Name:</label>
        <input type="text" name="name" id="name" placeholder="Name..." required>
        <label for="lname">Description:</label>
        <input type="text" name="description" id="description" placeholder="Description..." required>
        <label for="lname">Price:</label>
        <input type="text" name="price" id="price" placeholder="Price..." required>
        <input type="submit" value="Add Product">
    </form>
</body>
</html>