

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Jallosh : Regitration</title>
   <?if($person) {?>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/DT_bootstrap.css" rel="stylesheet" type="text/css" media="screen">
	<?} else {?>
		<!-- The stylesheets -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" />
    <?}?>
       
    </head>
	   <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
 
    <script src="js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="js/bootstrap-transition.js" type="text/javascript"></script>
    <script src="js/DT_bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.js" type="text/javascript"></script>
 

<?
include('dbcon.php');
?>

		</div>
	</div>