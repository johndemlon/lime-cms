<html>
<head>
<title></title>
<style>
#main{
    border: solid black 4px;
}
</style>
</head>
<body>
<?php
$servername = "sql209.epizy.com";
$username = "epiz_25762947";
$password = "Gj2QepldlP";
$dbname = "epiz_25762947_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, a, b, c, d FROM b";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo '<div id="main"><center>NUMBER : '.$row["id"].'</center><br><center>IP : '.$row["a"].'</center><br><center>AGENT : '.$row["b"].'</center><br><center>REFFER : '.$row["c"].'</center><br><center>DATE : '.$row["d"].'</center><br></div>';
}
} else {
echo '<div id="main"><center>0</center><br></div>';
}
$conn->close();
?>
</body>
</html>