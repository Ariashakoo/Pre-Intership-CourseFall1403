<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To PHP Form</title>
</head>
<body>
    <form method="POST">
        <label for="name">FirstName:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Enter your age">
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $age = (int)$_POST['age'];

        echo "<h2>Welcome, $name!</h2>";
        echo "<p>You are $age years old.</p>";
    }
    ?>
</body>
</html>
