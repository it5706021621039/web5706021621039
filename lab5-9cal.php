<html>
<head><title>Detail Profile</title></head>
<body>
  <center>
  <?php
  $Name = $_GET['Name'];
  $Lastname = $_GET['Lastname'];
  $Code = $_GET['Code'];
  $Age = $_GET['Age'];
  $Phone = $_GET['Phone'];
  $Nickname = $_GET['Nickname'];
  $University = $_GET['University'];
  $Color = $_GET['Color'];
  $Sport = $_GET['Sport'];
  $Hobby = $_GET['Hobby'];
  $Sex = $_GET["Sex"];


  echo "<p>";
  echo "<b>About User</b><br />";
  echo "Name : <i> $Name </i> <br/>";
  echo "Lastname : <i> $Lastname </i> <br/>";
  echo "Nickname : <i> $Nickname </i> <br/>";
  echo "Sex : <i> $Sex </i> <br/>";
  echo "University : <i> $University </i> <br/>";
  echo "Code : <i> $Code </i> <br/>";

  if($Age > 100) echo "!! Please check your age !!<br/>" ;
  else echo "Age : <i> $Age </i> <br/>";

  echo "Phone : <i> $Phone </i> <br/>";
  echo "Color : <i> $Color </i> <br/>";
  echo "Sport : <i> $Sport </i> <br/>";
  echo "Hobby : <i> $Hobby </i> <br/>";



  ?>
  </center>
</body>
</html>
