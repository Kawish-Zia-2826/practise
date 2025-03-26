<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "php Toutorial" ?></title>
</head>
<body>
  <p>this is php</p>

  <!-- <form method="post">
    <input type="text" name="name">
    <input type="submit" value="submit">
  </form>
  -->
  <?php
  // if($_SERVER["REQUEST_METHOD"] == "post" && $_POST['name']){
  //   $name = $_POST["name"];
  //   echo $name;
  // }else{
  //   echo "heres Nothong";
  // }
print_r( $_SERVER['REMOTE_HOST']);
  
  ?> 
</body>
</html>