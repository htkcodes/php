<?php
echo $_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="GET" action="get_post.php">
    <div>
    <label for="">Name</label>
<input type="text" name="name">
     </div>
     <div>
     <label for="">Email</label><br>
     <input type="text" name="email">
     </div>
     <input type="submit" value="Submit">
    </form>
</body>
</html>