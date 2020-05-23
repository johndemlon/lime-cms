<?php
function getUserIpAddr(){if(!empty($_SERVER['HTTP_CLIENT_IP'])){$ip = $_SERVER['HTTP_CLIENT_IP'];}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}else{$ip = $_SERVER['REMOTE_ADDR'];}return $ip;}
$servername = "sql209.epizy.com";
$username = "epiz_25762947";
$password = "Gj2QepldlP";
$dbname = "epiz_25762947_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
$a = getUserIpAddr();
$b = $_SERVER['HTTP_USER_AGENT'];
$c = $_SERVER['HTTP_REFERER'];
$d = date("Y-m-d");
$check=mysqli_query($conn,"SELECT a FROM b 
WHERE a='$a'");
if(mysqli_num_rows($check)>=1){
$check=mysqli_query($conn,"SELECT a FROM b WHERE b='$b'");
if(mysqli_num_rows($check)>=1){
echo "<center>Hello Again</center><br>";
}else{
$sql = "INSERT INTO b (a, b, c, d)
VALUES ('$a', '$b','$c', '$d')";
if ($conn->query($sql) === TRUE) {
echo "<center>Hello</center><br>";
} else {
echo "<center>Error: " . $sql . "<br>" . $conn->error."</center>";
}
}
}else{
$c = $_SERVER['HTTP_REFERER'];
$d = date("Y-m-d");
$sql = "INSERT INTO b (a, b, c, d)
VALUES ('$a', '$b','$c', '$d')";
if ($conn->query($sql) === TRUE) {
echo "<center>Hello</center><br>";
} else {
echo "<center>Error: " . $sql . "<br>" . $conn->error."</center>";
}
}
$conn->close();
?>
<html>
<head>
<title>Lime</title>
<style>
#main{
    border: solid black 4px;
}
</style>
</head>
<body>
<nav>
<center>Lime</center><br>
</nav>
<?php 
if(isset($_POST["d"])){
$servername = "sql209.epizy.com";
$username = "epiz_25762947";
$password = "Gj2QepldlP";
$dbname = "epiz_25762947_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$a = $_POST["a"];
$b = date("Y-m-d");
$stmt = $conn->prepare("DELETE FROM a WHERE a=? ");
$stmt->bind_param("s", $_POST["d"]);
$stmt->execute();
$stmt->close();
$conn->close();
}
if(isset($_POST["e"])){
$servername = "sql209.epizy.com";
$username = "epiz_25762947";
$password = "Gj2QepldlP";
$dbname = "epiz_25762947_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$a = $_POST["a"];
$b = date("Y-m-d");
$stmt = $conn->prepare("UPDATE a SET a=? WHERE a = ?");
$stmt->bind_param("ss", $_POST["et"],$_POST["e"]);
$stmt->execute();
$stmt->close();
$conn->close();
}
?>
<?php
$servername = "sql209.epizy.com";
$username = "epiz_25762947";
$password = "Gj2QepldlP";
$dbname = "epiz_25762947_a";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT a, b FROM a";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo '<div id="main"><center><a href="http://lime.rf.gd/?p='.$row["a"].'">'.$row["a"].'</a><form method="post" autocomplete="off"><button type="submit" name="d" value="'.$row["a"].'">delete</button><br><button type="submit" name="e" value="'.$row["a"].'">edit</button><br><input name="et"><br></form></center></div>';
}
} else {
echo '<div id="main"><center>0</center><br></div>';
}
$conn->close();
?>
<footer>
<center>email : a@u5u5.ml</center><br>
</footer>
</body>
</html>