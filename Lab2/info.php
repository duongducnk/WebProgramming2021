<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Simple Form</title>
</head>
<body>
    <h1>Thank for your submit</h1>
    
    <?php
        $name = $_POST['name'];
        $class = $_POST["class"];
        $uni = $_POST["university"];
        $hobby = $_POST["hobby"];
        $others = $_POST["others"];

        echo "<h1>Hello, $name</h1>";
        echo "<p>You are studying at $class, $uni</p>";
        echo "<p>Your hobby is:</p>";
        echo "<ol>";
        foreach ($hobby as $h) {
            echo "<li>$h</li>";
        }
        echo "<li>$others</li>";
        echo "</ol>";
    ?>
</body>
</html>