
<?php
	
	// $host	= "elite.devilwebhut.com";
	// $dbuser = "devilweb_otms";
	// $dbpass = "w4Pdi*H3,pY3";
	// $dbname	= "devilweb_otms";
	$host	= "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname	= "otms";

	function dbConnection(){
		global $host;
		global $dbname;
		global $dbuser;
		global $dbpass;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}

?>