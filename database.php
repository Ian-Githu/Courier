<?php

	require("db.php");

	//echo "Connected successfully";

	//die();

	function dbQuery($conn, $sql)
	{
		
		$result = mysqli_query($conn, $sql);
		
		return $result;
	 }

// echo "Connected successfully";

// 	die();

function checkUser($un, $pwd, $city, $conn) {

	if($un == 'admin' && $pwd = 'admin123') {

		$_SESSION['user_name'] = 'Admin';
		$_SESSION['user_type'] = 'admin-role';

		header('Location: admin.php');

		//echo 'Iam here.......';
	}else {

		$sql = "SELECT officer_name
				FROM tbl_courier_officers
				WHERE officer_name = '$un'
				AND off_pwd = '$pwd'
				AND office = '$city'";

				// echo"conn successfully";
				// die();

		$result = dbQuery($conn, $sql);

		$no = dbNumRows($result);

		if($no >= 1) {

			$_SESSION['user_name']= $un;
			$_SESSION['user_type']= 'officer';

			header('Location: admin.php');

			//echo"conn successfully";
				//die();

		}//else
		else {
			
			return "Your Credintials are not a Valid. Please try Again.";
		}		
	}//else
}//checkUser

function isUser(){
	if(!isset($_SESSION['user_name'])){
		header('Location: login.php');
	}
	
}
	


	function dbAffectedRows()
	{
		global $dbConn;
		
		return mysql_affected_rows($dbConn);
	}

	function dbFetchArray($result, $resultType = MYSQL_NUM) {
		return mysql_fetch_array($result, $resultType);
	}

	function dbFetchAssoc($result)
	{
		return mysqli_fetch_assoc($result);
	}

	function dbFetchRow($result) 
	{
		return mysql_fetch_row($result);
	}

	function dbFreeResult($result)
	{
		return mysql_free_result($result);
	}

	function dbNumRows($result)
	{
		return mysqli_num_rows($result);
	}

	function dbSelect($dbName)
	{
		return mysql_select_db($dbName);
	}

	function dbInsertId()
	{
		return mysql_insert_id();
	}

?>