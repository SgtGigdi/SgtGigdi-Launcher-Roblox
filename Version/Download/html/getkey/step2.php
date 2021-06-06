<?
ini_set('display_errors', 'Off');
 error_reporting(0);
session_start();

if(time() - $_SESSION['time'] < 20 || !isset($_SESSION['time']))
{
	echo "you did not complete the linkvertise";
	echo "<meta http-equiv='Refresh' Content='4;url=lol'>"; 
	return;
}

$_SESSION['timetwo'] = time();

header("Refresh: 5; URL=https://direct-link.net/144159/GigdiSploitKeystep2");  
?>

<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">


<title>GigdiSploit Key System</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="MainDesign.css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<div class="keysyscontainer">
    <div class="box">
        <span class="title">GigdiSploit Key System | Step 2</span>
        <span class="text"> You have completed one linkvertise, three more to go! Redirecting in 5 seconds... </span>
        <span class="text"> No one likes advertisments, but going through this supports the creators of GigdiSploit. </span>
</html>
