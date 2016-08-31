<?php
include("config.php");



if (!empty($_REQUEST['term'])) {



$term = mysql_real_escape_string($_REQUEST['term']);



$sql = "SELECT * FROM checkins WHERE full_name LIKE '%".$term."%'";

$r_query = mysql_query($sql);



while ($row = mysql_fetch_array($r_query)){

echo '<br /> full_name : ' .$row['full_name'] . '<br /> arrival_time : ' .$row['arrival_time'] ;



}



}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cherche form</title>
  </head>
  <body>
    <form   action="" method="post">
      <input type="text" name="search" value="" placeholder="tapez le nom ici pour chercher.....">
      <input type="submit" name="name" value="cherchez">
    </form>
  </body>
</html>
