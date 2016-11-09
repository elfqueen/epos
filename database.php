<?php
// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'dbpos';

// XAMPP
// $dbConn = mysql_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysql_error());
// mysql_select_db($dbName) or die('Cannot select database. ' . mysql_error());

//WAMP
$dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($dbConn->connect_error) {
    die("Sorry, there are some problem:  " . $dbConn->connect_error);
}






function dbQuery($sql)
{
	// XAMPP
	// $result = mysqli_query($sql) or die(mysql_error());

	global $dbConn;
	$result = $dbConn->query("$sql") or die ($dbConn->error);
	return $result;
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
	global $dbConn;
	// return mysql_fetch_assoc($result);
	// return $result->fetch_all(mysqli_assoc);
	return $result->fetch_object();
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
	// return mysql_num_rows($result);
	global $dbConn;
	return $result->num_rows;
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