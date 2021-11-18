<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Simple Form</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>

<body>
    <h1>PHP Form Example</h1>
    <form action="info.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" />
        <br><br>

        <label for="class">Class</label>
        <input type="text" name="class" />
        <br><br>

        <label for="uni">University</label>
        <input type="text" name="university" />
        <br><br>

        <label for="hobby[]">Hobbies:</label>
        <br>
          <input type="checkbox" name="hobby[]" value="Listening to music" />Listening to music
        <br>
          <input type="checkbox" name="hobby[]" value="Playing game" />Playing game
        <br>
          <input type="checkbox" name="hobby[]" value="Watching movies" />Watching movies
        <br>
          <input type="checkbox" name="others" value="others" />Others <input type="text" name="others"/>
        <br><br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>