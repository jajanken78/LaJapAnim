<?php     

$con = mysqli_connect("bxmc25ia6zofh0ezoaab-mysql.services.clever-cloud.com","ufomk00jcspxwtot","mQ2WSmG2FEr00mYhtaC9");




if ($con)
{
  echo 'omg';
}
else
{
   echo 'nononon';
}

$Name =$_POST["nom"];
$UserName =$_POST["username"];

$sql = "INSERT INTO `bxmc25ia6zofh0ezoaab`.UserProfile (Nom,Prenom) VALUES ('$Name','$UserName')";


if (!mysqli_query($con,$sql))
{
 echo 'nototot';

}
else
{
  echo 'yesyeye';
}

header("refresh:2; url=index.html");

?>