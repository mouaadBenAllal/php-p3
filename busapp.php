<html>
<head><title>some title</title></head>
<body>
  <form method="POST" action="">
    <input type="text" name="leeftijd" value="" />
    <input type="submit" name="submit" />
  </form>

<?php


if(isset($_POST['submit'])) {
  $leeftijd = $_POST ['leeftijd'];
      if (!empty($leeftijd)){
          if ($leeftijd < 3){
              echo "Uw kaartje is gratis.";
          }
          else if ($leeftijd > 65 || $leeftijd <= 12) {
              echo "Uw kaartje is 5 euro";  
          }
          else {
              echo "10 euro";
          }
          }
          else {
              echo "";
          }
          }

?>


</body>
</html>