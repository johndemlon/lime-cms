<html>
<head>
<title>Lime - post</title>
</head>
<body>
<nav>
<center>lime - post</center><br>
</nav>
<?php
$servername = "sql209.epizy.com";
$username = "epiz_25762947";
$password = "Gj2QepldlP";
$dbname = "epiz_25762947_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["s"])){
$a = $_POST["a"];
$b = date("Y-m-d");
$stmt = $conn->prepare("INSERT INTO a (a, b) VALUES (?, ?)");
$stmt->bind_param("ss", $a,$b);
$stmt->execute();
$stmt->close();
$conn->close();
}
?>
<form method="post" autocomplete="off">
<center><p>index : </p><input name="a"><br>
<button type="submit" name="s">post</button></center>
</form>
<div id="main"><center>USERS :</center><br></div>
<?php
$servername = "sql209.epizy.com";
$username = "epiz_25762947";
$password = "Gj2QepldlP";
$dbname = "epiz_25762947_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT a FROM c";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    //<center>NUMBER : '.$row["id"].'</center><br>
    echo '<div id="main"><center>'.$row["a"].'</center><br></div>';
}
} else {
echo '<div id="main"><center>0</center><br></div>';
}
$conn->close();
?>
</body>
</html>