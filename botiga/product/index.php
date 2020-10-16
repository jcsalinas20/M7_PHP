<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Products</title>
    <style>
        html, body {
            height: 80%;
        }
        body {
            display: flex;
            background-color: lightblue;
        }
        form {    
            margin: auto;
            display: flex;
            background-color: white;
            padding: 20px;
            border: 2px solid black;
            border-radius: 5px;    
            flex-flow: column wrap;
            font-family: sans-serif;
        }
        label {
            font-size: 20px;
        }
        input[type='text'] {
            padding: 2px 7px;
            margin-top: 1px;
            margin-bottom: 10px;
            font-size: 19px;
        }
        input[type='submit'] {
            font-size: 22px;
            margin-top: 20px;
            background-color: black;
            border: 2px solid red;
            color: white;
            border-radius: 25px;
        }
    </style>
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