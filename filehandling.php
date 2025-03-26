

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

<input type="file" name="image">
<input type="submit" value="submit">
</form>
<?php 
// print_r($_POST);
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
if(isset($_FILES['image'])){

  $file = $_FILES['image'];
  echo "<pre>";
  print_r($file);
  echo "</pre>";
  
  
  move_uploaded_file($file['tmp_name'],$file['full_path']);
}
  
?>

</body>
</html>