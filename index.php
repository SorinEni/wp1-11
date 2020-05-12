<?php
define ('MAX', 30);
define ('MIN', 5);
$pocet = rand(MIN, MAX);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 while ($pocet > 0) { 
     $pocet = $pocet - 1; 
     echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQjbzCS2xFL1TMhVE7nSa-xHYEYPxYeniznvsGgTQaedXCYpTl0&usqp=CAU" width="100" height="66" alt="?:D"/>';
 }   
 ?>
</body>
</html>