<?php 


$mysqli = mysqli_connect("localhost", "root", "", "iot");
if(!$mysqli){
 echo'connection error: ' . mysqli_connect_error();}
?>

<!DOCTYPE html>
<html>
<head>
<style>
h1 {
  position: absolute;
  left: 500px;
  top: 150px;
}
h2 {
  position: absolute;
  left: 500px;
  top: 50px;
}
h3 {
  position: absolute;
  left: 500px;
  top: 250px;
}
h4 {
  position: absolute;
  left: 300px;
  top: 150px;
}
h5 {
  position: absolute;
  left: 700px;
  top: 150px;
}
</style>
</head>

<body>
<div class="buttons text-center" role="group">
    <form action="" method="post">
<br><br> 


<button type="Submit" name="R" class="btn btn-primary">Right</button>
<button type="Submit" name="L" class="btn btn-primary">Left</button>
<button type="Submit" name="F" class="btn btn-primary">Forward</button>
<button type="Submit" name="B" class="btn btn-primary">Backward</button>
<button type="Submit" name="S" class="btn btn-primary">Stop</button>

</body>
</html>

<?php
$result = "SELECT `Forward`, `Backward`, `Right`, `Left`, `stop` FROM `controlbuttons`
 ORDER BY id DESC
 LIMIT 1";
$query= mysqli_query($mysqli, $result)
?>