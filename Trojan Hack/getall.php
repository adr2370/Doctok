<?PHP

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

$result = mysql_query("SELECT * FROM Session")  or die(mysql_error());

while($row = mysql_fetch_array($result))
  {
	  echo "<option value = \"".$row['ID']."\">";
	  echo $row['Name'];
	  echo "</option>";
  }

mysql_close($con);
?>