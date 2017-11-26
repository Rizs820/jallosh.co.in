<?php 
include('header.php');
?>
<body>
<div class="container">

<br><br>
    <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#"><i class="icon-group icon-large"></i>&nbsp;Event Registration System</a>
    </div>
    </div>

     <div class="row-fluid">
    <div class="span6">
	<div class="alert alert-success">Please Enter The Detials Below</div>
	    <form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail">Username</label>
    <div class="controls">
    <input type="text" id="inputEmail" name="username" placeholder="Username" required>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" id="inputPassword" name="password" placeholder="Password" required>
    </div>
    </div>
    <div class="control-group">
    <div class="controls">

    <button type="submit" name="login" class="btn btn-success"><i class="icon-signin"></i>&nbsp;Login</button>
    </div>
    </div>
    </form>
	</div>
    <div class="span6">...</div>
    </div>
	
	<?php
	if (isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysql_query("select * from user where username='$username' and password='$password'")or die(mysql_error());
	$count=mysql_num_rows($query);
	$row=mysql_fetch_array($query);

		
	if ($count > 0){
	    session_start();
                            session_regenerate_id();
                            $_SESSION['id'] = $row['user'];
                            header('location:home.php');
                            session_write_close();
	}
	}
	?>
	
</div>
</body>
</html>