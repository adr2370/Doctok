<?PHP
$firstname=$_GET["firstname"];
$middlename=$_GET["middlename"];
$lastname=$_GET["lastname"];
$sex=$_GET["sex"];
$birthday=$_GET["birthday"];
$birthmonth=$_GET["birthmonth"];
$birthyear=$_GET["birthyear"];
$address=$_GET["address"];
$city=$_GET["city"];
$state=$_GET["state"];
$zipcode=$_GET["zipcode"];
$email=$_GET["email"];
$phone=$_GET["phone"];
$medication=$_GET["medication"];
$familyhistory=$_GET["familyhistory"];
$ID=$_GET["id"];

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

mysql_query("DELETE FROM Medical WHERE ID='".$ID."'");

$sql="INSERT INTO Medical (FirstName, MiddleName, LastName, BirthDay, BirthMonth, BirthYear, Sex, Address, City, State, ZipCode, Email, Telephone, Medication, FamilyHistory, ID) VALUES ('".$firstname."','".$middlename."','".$lastname."','".$birthday."','".$birthmonth."','".$birthyear."','".$sex."','".$address."','".$city."','".$state."','".$zipcode."','".$email."','".$phone."','".$medication."','".$familyhistory."','".$ID."')";

mysql_query($sql);

mysql_close($con);
?>