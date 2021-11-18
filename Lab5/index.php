<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Book</title>
</head>
<body>
    <form action="handle.php" method="POST">
        <label>Title: </label>
        <input type="text" name="title" value="">
        <br><br>
        <label>Year: </label>
        <input type="text" name="year" value="">
        <br><br>
        <label>Copyright: </label>
        <input type="text" name="copyright" value="">
        <br><br>
        <label>Content: </label>
        <textarea name="content" rows="8" cols="80"></textarea>
        <br>
        <input type="submit" name="" value="SUBMIT">
    </form>
</body>
</html>