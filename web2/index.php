<?php include 'server-info.php';?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="materialize/css/materialize.css" />
</head>
<body>
    <div class="container">
    <h1>Server Info</h1>
    <?php if($Cars): ?>
    <table>
    <thead>
      <tr>
          <th>Name</th>
          <th>Item Name</th>
          <th>Item Price</th>
      </tr>
    </thead>

    <tbody>
    <tr>
    <?php foreach($Cars as $key => $value): ?>
     <td>
    <strong><?php echo $key;?>:</strong>
     </td>
     <?php endforeach;?>
    </tr>
    </tbody>
  </table>
        
<?php endif;?>
    </div>
</body>
</html>