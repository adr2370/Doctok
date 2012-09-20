<?PHP
$ID=$_GET["id"];

$user_name = "";
$password = "";
$database = "";
$server = "";

$con = mysql_connect($server, $user_name, $password);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("alextestdatabase", $con);

mysql_query($sql);

$result = mysql_query("SELECT * FROM Medical WHERE ID='".$ID."'")  or die(mysql_error());

$firstname;
$middlename;
$lastname;
$sex;
$birthday;
$birthmonth;
$birthyear;
$address;
$city;
$state;
$zipcode;
$email;
$phone;
$medication;
$familyhistory;
while($row = mysql_fetch_array($result))
  {
		$firstname=$row['FirstName'];
		$middlename=$row['MiddleName'];
		$lastname=$row['LastName'];
		$sex=$row['Sex'];
		$birthday=$row['BirthDay'];
		$birthmonth=$row['BirthMonth'];
		$birthyear=$row['BirthYear'];
		$address=$row['Address'];
		$city=$row['City'];
		$state=$row['State'];
		$zipcode=$row['ZipCode'];
		$email=$row['Email'];
		$phone=$row['Telephone'];
		$medication=$row['Medication'];
		$familyhistory=$row['FamilyHistory'];
  }
mysql_close($con);
  $str='<data>
   <firstname>'.$firstname.'</firstname>
   <middlename>'.$middlename.'</middlename>
   <lastname>'.$lastname.'</lastname>
   <sex>'.$sex.'</sex>
   <birthday>'.$birthday.'</birthday>
   <birthmonth>'.$birthmonth.'</birthmonth>
   <birthyear>'.$birthyear.'</birthyear>
   <address>'.$address.'</address>
   <city>'.$city.'</city>
   <state>'.$state.'</state>
   <zipcode>'.$zipcode.'</zipcode>
   <email>'.$email.'</email>
   <phone>'.$phone.'</phone>
   <medication>'.$medication.'</medication>
   <familyhistory>'.$familyhistory.'</familyhistory>
</data>
';


echo $str;
?>