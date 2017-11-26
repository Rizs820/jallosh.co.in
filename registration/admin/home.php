<?php 
include('header.php');
include('session.php');
?>
<body>
 <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">

    </div>
    </div>
<br><br>
<div class="container">

 <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#"><i class="icon-group icon-large"></i>&nbsp;Jallosh 2k16 Registration System</a>
    </div>
    </div>

    <div class="row-fluid">
	<div class="span12">
	<ul id="myTab" class="nav nav-tabs">

    <li class="active"><a href="#member" data-toggle="tab"><i class="icon-group icon-large"></i>&nbsp;Registered Member</a></li>
    <li><a href="#user" data-toggle="tab"><i class="icon-user icon-large"></i>&nbsp;User</a></li>
    <li>
   <a  href="#myModal" data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
	</li>

    </ul>
	</div>

    </div>


<div class="tab-content">

<?php 
include('tab_member.php');
?>
<?php
include('tab_user.php');
?>





</div>
<?php 
include('modal.php');
?>	
</div>
</body>
</html>