<?php
if(isset($_POST['submit'])){
   
    $min=8;

    $first=$_POST['first'];

    if(strlen($first) < $min)
    {
        echo("nope $min");
    }
}


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

<form action="form.php" method="post">
<input type="text" name="first" id="">
<input type="text" name="last">

<input type="submit" value="submit"  name="submit">

</form>
    
</body>
</html>