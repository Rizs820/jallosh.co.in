
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("meta.php"); ?>
    <title>Jallosh'16</title>


    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main stylesheet -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Color stylesheet -->
    <!-- <link href="assets/css/colors.css" rel="stylesheet"> -->
	<?if($m_id!=0)
		echo '<link href="assets/css/'. $m_color.'"rel="stylesheet">'; ?>
    <!-- <link href="assets/css/colors_3.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/colors_4.css" rel="stylesheet"> -->


    <!-- Plugin stylesheets -->
    <link href="assets/css/plugins/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/plugins/parallax.css" rel="stylesheet">
    <link href="assets/css/plugins/owl.theme.css" rel="stylesheet">
    <link href="assets/css/plugins/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/plugins/animate.css" rel="stylesheet">
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/plugins/jquery.mb.YTPlayer.min.css" rel="stylesheet">
	

	
    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script>
        document.createElement('video');
      </script>
    <![endif]-->
<script language="JavaScript">


var message="Sorry Dude! Function Disabled!";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}


if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")
//alert(message);
</script>