<?php  
$m_id=rand(0,4);
if($m_id==1)
	$m_color="colors.css";
else
	$m_color="colors_".$m_id.".css";

?>


<!DOCTYPE html>
<html lang="en">

<head>
<?include("redirect.php"); ?>
<?include("headlink.php"); ?>
</head>

<body id="home">
            
			<?include("menu.php"); ?>
			<?include("header.php"); ?>
            <?//include("events.php"); ?>
			<?//include("team.php"); ?>
            <?//include("gallery.php"); ?>
			<?//include("sponsors.php"); ?>
			<?//include("counters.php"); ?>
			<?//include("social.php"); ?>
			<?//include("contact.php"); ?>
 			<?//include("footer.php"); ?>
			<?include("jqscripts.php"); ?>   
</body>

</html>
