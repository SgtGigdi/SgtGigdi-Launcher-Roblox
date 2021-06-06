<?
ini_set('display_errors', 'Off');
 error_reporting(0);
session_start();

if(time() - $_SESSION['timetwo'] < 20 || !isset($_SESSION['timetwo']))
{
	echo "you did not complete the linkvertise";
	echo "<meta http-equiv='Refresh' Content='4;url=http://sgtgigdi.rf.gd/'>"; 
	return;
}

$_SESSION['timethree'] = time();

header("Refresh: 5; URL=https://direct-link.net/144159/GigdiSploitKeystep3");  
?>

<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">


<title>GigdiSploit</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="MainDesign.css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<div class="keysyscontainer">
    <div class="box">
        <span class="title">GigdiSploit | Step 3</span>
        <span class="text"> You have completed two linkvertise, two more to go! Redirecting in 5 seconds... </span>
        <span class="text"> No one likes advertisments, but going through this supports the creators of GigdiSploit. </span>
</html>
