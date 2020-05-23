<?php
include("db.php");
if(isset($_POST["b"])){
if ($conn->connect_error){die("Connection failed: " . $conn->connect_error);}
$a = $_POST["a"];
$sql = "INSERT INTO c (a) VALUES ('$a')";
if ($conn->query($sql) === TRUE) {} else {echo "<center>Error: " . $sql . "<br>" . $conn->error."</center>";}
$conn->close();
header('Location: http://lime.rf.gd/blog/');
} 
if(isset($_GET["p"])){
$p = $_GET["p"];
$stmt = $conn->prepare('SELECT a,b FROM a WHERE a = ?');
$stmt->bind_param('s', $p);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
echo "<center>".$row["a"]."</center><br>";
echo "<center>".$row["b"]."</center><br>";
}
}
else if(isset($_GET["l"])){
$l = $_GET["l"];
$stmt = $conn->prepare('SELECT a,b FROM d WHERE a = ?');
$stmt->bind_param('s', $l);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
header('Location: '.$row["b"].'');
}
} 
else{
    echo '<html><head><title>Lime</title><style>#main{}</style></head><body><nav><center>Lime</center><br></nav><center>ENTER YOUR NAME TO ACCESS THE BLOG</center><br><div id="main"><center><form method="POST" autocomplete="off">name :<br><input name="a"><br><button name="b">send</button></form></center><br></div><footer><center>email : a@u5u5.ml</center><br></footer></body></html>';
} 
?>
