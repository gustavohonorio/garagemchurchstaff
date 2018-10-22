<?php 
	//MYSQLI
/*$servername="localhost";
$username="garag014_admin";
$password="adminDBgaragem1204";
$dbname="garag014_dbgaragem";*/
$servername="localhost";
$username="root";
$password="";
$dbname="dbgc_staff";

$mysqli=new mysqli($servername, $username, $password, $dbname);

if($mysqli->connect_errno) {
	echo "Falha na conexao: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
else{
	//echo "Conectado";
}

?>