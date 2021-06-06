<?
ini_set('display_errors', 'Off');
error_reporting(0);
session_start();

if(time() - $_SESSION['timefour'] < 20 || !isset($_SESSION['timefour']))
{
	echo "you did not complete the linkvertise";
	echo "<meta http-equiv='Refresh' Content='4;url=http://sgtgigdi.rf.gd/'>"; 
	return;
}

$key = "G7R0WZ-50D59C-VID1C6-N29R1A-0738IP-NALDNS";

$_SESSION['time'] = NULL;
$_SESSION['timetwo'] = NULL;
$_SESSION['timethree'] = NULL;
$_SESSION['timefour'] = NULL;
?>

<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <script>
        function copyToClipboard() {
            var e = "<?php echo $key ?>";
            var tempItem = document.createElement('input');
            tempItem.setAttribute('type','text');
            tempItem.setAttribute('display','none');
            let content = e;
            if (e instanceof HTMLElement) {
            		content = e.innerHTML;
            }
            tempItem.setAttribute('value',content);
            document.body.appendChild(tempItem);
            tempItem.select();
            document.execCommand('Copy');
            tempItem.parentElement.removeChild(tempItem);
            alert("Successfully copied the key to your clipboard!");
        }
</script>
    
<title>GigdiSploit</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="MainDesign.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<div class="keysyscontainer">
    <div class="box">
        <span class="title">GigdiSploit Key</span>
        <span class="text"> This is your GigdiSploit key. Please do not refresh this page </span>
        <span class="text"> Your key: <?php echo $key ?></span>
        <button onclick = "return copyToClipboard()" class="button Copy">Copy Key</button>
</html>
