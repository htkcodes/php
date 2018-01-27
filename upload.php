<?php

echo <<<_END

<html><head><title>Php form</title></head><body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
Select File:<input type='file' name='filename' size='10' />
<input> type='submit' value='upload'/>
</form>
_END;

if($_FILES)
{
    $name=$_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'],$name);
    echo("Uploading Image '$name'<br/><img src='$name'/>");
}

echo()
?>