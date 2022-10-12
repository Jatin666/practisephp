<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <h2>Enter you name</h2>
        <input type = "text" name = "name">
        <input type = "submit" name = "submit" value ="submit">
    </form>
    <?php
    $name= $_POST['name'];
    echo "<h3>Hello $name</h3>"
    ?>
    
</body>
</html>