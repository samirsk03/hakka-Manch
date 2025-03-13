<?php
function company_detail($val)
{
	$comp_result=select("tbl_company_details",$val." AS RtnVal","fld_company_id=1","LIMIT 1");
	$row_comp=fetch($comp_result);
	return $row_comp['RtnVal'];
}


function baseurl()
{
	//return $baseurl="http://localhost/hakka";
	return $baseurl="http://shikshanhakkamanch.com/";	
	//return $baseurl="https://www.taubys.com";
}
$baseurl=baseurl();


function adminbaseurl()
{
	//return $adminbaseurl=baseurl()."/admin/";
	//return $adminbaseurl="http://localhost/hakka/admin";
	return $adminbaseurl="http://shikshanhakkamanch.com/admin";
}
$adminbaseurl=adminbaseurl();

$link=$_GET['link'];
$page=$_GET['page'];

$category=$_GET['category'];
function category()
{
	return $_GET['category'];
}

$timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

$pdate=date("Y-m-d");
$pdate_time=date("Y-m-d H:i:s");


//session_start();
//sid=session_id();
//session_regenerate_id(); // regenerate session id

/* if(isset($_SESSION['Logid']) && $_SESSION['Logid']!="")
{
	//time out 
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1000))
	{
		// last request was more than 5 minutes ago
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
		//header("location:http://catchmeon.com/home.php?link=logout");
		//exit();
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
} */

/// Start Function's
function insert($tablename,$query)
{	
	$sql="INSERT INTO " .$tablename." SET ".$query;
	mysqli_query($_SESSION['db_connection'],$sql);
	return mysqli_insert_id($_SESSION['db_connection']);
}

function select($tablename,$query,$condition,$limit)
{	
	$sql="SELECT ".$query." FROM ".$tablename." WHERE ".$condition." " .$limit;
	return $result=mysqli_query($_SESSION['db_connection'],$sql);
}

//selectjoin("tbl_reg AS A","A.*,B.cityname,C.statename","LEFT JOIN tbl_city AS B on A.city=B.cityid LEFT JOIN tbl_state AS C on A.stateid=C.stateid","A.keyactive!='D'","");
function selectjoin($maintable,$query,$join_on,$condition,$limit)
{	
	$sql="SELECT ".$query."	FROM ".$maintable." ".$join_on." WHERE ".$condition." ".$limit;
	return $result=mysqli_query($_SESSION['db_connection'],$sql);
}

function update($tablename,$query,$condition)
{	
	$sql="UPDATE " .$tablename." SET ".$query." WHERE ".$condition;
	mysqli_query($_SESSION['db_connection'],$sql);
}
function delete($tablename,$condition)
{	
	$sql="DELETE FROM " .$tablename." WHERE ".$condition;
	mysqli_query($_SESSION['db_connection'],$sql);
}

function fetch($result)
{	
	return mysqli_fetch_array($result);
}
function numrow($result)
{	
	return mysqli_num_rows($result);
}
?>