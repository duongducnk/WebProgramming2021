<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Convert</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="">Select conversion:</label>
        <br>
        <input type="radio" name="choice" id="" value="1" required>Radian to Degree
        <input type="radio" name="choice" id="" value="2">Degree to Radian
        <br><br>
        <label for="">Enter Number:</label>
        <input type="text" name="number" id="" required>
        <br><br>
        <button type="Submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <?php
    if(array_key_exists('choice', $_POST)){
      echo "<h1>Result</h1>";
        $choice = $_POST['choice'];
        $number = $_POST['number'];
        if ($choice == 1) {
           echo "<br>$number <i>rad</i> ≈ ";
           $number = rad2deg($number);
           echo "$number °";
        }
        if ($choice == 2) {
            echo "<br>$number <i>°</i> ≈ ";
            $number = deg2rad($number);
            echo "$number <i>rad</i>";
        }
        
    }
    ?>
</body>

</html>