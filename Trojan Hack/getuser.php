<?PHP
$q=$_GET["q"];
$n=$_GET["n"];

$user_name = "alextestdatabase";
$password = "Maxmisty9";
$database = "alextestdatabase";
$server = "alextestdatabase.db.8323874.hostedresource.com";

$con = mysql_connect($server, $user_name, $password);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("alextestdatabase", $con);

if($q!=""&$n!="") {
	$sql="INSERT INTO Session (ID, Name) VALUES ('".$q."','".$n."')";
}

mysql_query($sql);

mysql_close($con);
?>