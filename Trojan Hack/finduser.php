<?PHP
$q=$_GET["q"];

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

$result = mysql_query("SELECT * FROM Session WHERE ID='".$q."'")  or die(mysql_error());

$count = 0;
while($row = mysql_fetch_array($result))
  {
	  $count = 1;
  }
if($count == 1) {
	mysql_query("DELETE FROM Session WHERE ID='".$q."'");
	echo "YES";
}

mysql_close($con);
?>