<body>
 <div class="navbar  navbar-fixed-top">
    <div class="navbar-inner1">
	<table width="100%">
	<tr>
	<td width="20%"><img src="../assets/images/logo.png">
	<td width="50%"><center><h2>Jallosh 2k16 Registration</h2></center>
	<td align=right>
	<p class="greeting" align=right>Welcome, <b><?php echo htmlspecialchars($person->name)?></b> <a href="#myModal" data-toggle="modal" <?/*href="?logout"*/?> class="">Logout</a><br></p>
	
	<p class="register_info" align=right>You registered <b><?php echo new RelativeTime($person->registered)?></b></p>
	</tr>
	</table>
    </div>
    </div>
<div class="container">

<br>
<br>
<br>
<br>

   
<div class="thumbnail">
     <div class="row">
	<div class="span3 offset1"></div>
    <div class="span8">
	<br>
	
	<div class="alert alert-info"><strong><i class="icon-file"></i>&nbsp;Please Fill up all the details Below (Field Marked with * are required)</strong></div>
	<div class="alert alert-info"><strong><i class="icon-file"></i>&nbsp;Any queries regarding Online Registration Cnotact : +91 9922592979</strong></div>
	 <form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail" >Name*</label>
    <div class="controls">
    <input type="text" class="span4"  readonly name="pname"  id="inputEmail" placeholder="Enter Your Name" pattern="[a-zA-Z ]+" value="<?php echo htmlspecialchars($person->name)?>" required>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Email Adress*</label>
    <div class="controls">
    <input type="text" class="span4"  readonly name="pemail"  id="inputEmail"  placeholder="Enter Your Email Address" value="<?php echo htmlspecialchars($person->email)?>"required>
    </div>
    </div>
	
	
	 <div class="control-group">
    <label class="control-label" for="inputEmail">Contact Number*</label>
    <div class="controls">
    <input type="text" class="span4" name="pc_number" id="inputEmail" pattern="[0-9]{10}" maxlength="10" placeholder="Enter Your Contact Number" required>
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="inputEmail">Secondary Contact No</label>
    <div class="controls">
    <input type="text" class="span4" name="psc_number" id="inputEmail" pattern="[0-9]{10}" maxlength="10" placeholder="Enter Your Secondary Contact Number">
    </div>
    </div>
 
	<div class="control-group">
    <label class="control-label" for="inputEmail">Gender*</label>
    <div class="controls">
	<select class="span2" name="pgender" required>
	<option value="" selected>Select</option>
	<option>Male</option>
	<option>Female</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">College Name*</label>
    <div class="controls">
    <input type="text" class="span4" name="pclgname" id="inputEmail" pattern="[a-zA-Z ]+" placeholder="Enter Your College Name" required>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="inputEmail">Branch*</label>
    <div class="controls">
    <input type="text" class="span4" name="pbranch" id="inputEmail" pattern="[a-zA-Z ]+" placeholder="Enter Your Branch" required>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="inputEmail">Event Name*</label>
    <div class="controls">
	<select class="span2" name="event" id="event" onchange="events(this)" required>
	<option value="" selected>Select</option>
	<?php
	$query=mysql_query("select * from events")or die(mysql_error());
							while($row=mysql_fetch_array($query))
							{
								$v=$row['ename'];
								echo '<option>'.$v.'</option>';
							}
	?>
	<!--option>Rangoli</option>
	<option>Sketching</option>
	<option>Dance</option>
	<option>Music</option>
	<option>Installation</option>
	<option>Spot Painting</option-->
	</select>
    </div>
    </div>
	<!--div class="control-group">
	<div class="controls">
    <label class="control-label" id="members"></label>
	</div></div-->
	<div class="control-group">
    <label class="control-label" for="inputEmail">Members*</label>
    <div class="controls">
	<table><tr><td>
	<select class="span2" name="membs" id="membs" onchange="member_add(this)" required>
	<?php/*
	$query=mysql_query("select * from events where ")or die(mysql_error());
							while($row=mysql_fetch_array($query))
							{
								$v=$row['ename'];
								echo '<option>'.$v.'</option>';
							}
	*/?>
	<option value="" selected>Select</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	</select><td>
	<label   id="members"></label>
	</tr></table><!--label type="label"  name="memebers" id="memebrs" readonly placeholder="Min Max"></label-->
    </div>
    </div>
	
	<div class="control-group">
    <div id="mem_name"></div>
    <div class="controls">
    <div id="new_mem"></div><br>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Accomodation Required*</label>
    <div class="controls">
	<select class="span2" name="accd" required>
	<option value="" selected>Select</option>
	<option>Yes</option>
	<option>No</option>
	</select>
    </div>
    </div>
	
	
    <div class="control-group">
    <div class="controls">

    <button type="submit" name="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Submit</button>
    </div>
    </div>
    </form>
	</div>
    <div class="span2">.</div>
    </div>
	</div>
	
	<?php 
include('modal.php');
?>
	   <div class="navbar navbar-inverse">
    <div class="navbar-inner ">
   <center id="color_white">
	Jallosh 2k16 Registration Designed By Rizwan Syed & Akshay Ghodake
   </center>
    </div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$m_pname=$_POST['pname'];
	$m_pemail=$_POST['pemail'];
	$m_pc_no=$_POST['pc_number'];
	$m_psc_no=$_POST['psc_number'];
	$m_pgender=$_POST['pgender'];
	$m_pclgname=$_POST['pclgname'];
	$m_pbranch=$_POST['pbranch'];
	$m_event=$_POST['event'];
	$m_membs=$_POST['membs'];
	$m_accd=$_POST['accd'];
	$m_m1=$_POST['member1'];
	$m_m2=$_POST['member2'];
	$m_m3=$_POST['member3'];
	$m_uid=uniqid().rand();
	if($m_event=="Rangoli"&&$m_membs==1)
		{
			$fees=100;	
		}
		else if($m_event=="Rangoli"&&$m_membs==2)
		{
			$fees=150;
		}
		else if($m_event=="Dance (Solo)"&&$m_membs==1)
		{
			$fees=100;
		}
		else if($m_event=="Dance (Duet/Trio)")
		{
			$fees=300;
		}
		else if($m_event=="Dance (Group)")
		{
			$fees=100*$m_membs;
		}
		else if($m_event=="Installation")
		{
			$fees=100*$m_membs;
		}
		else if($m_event=="Music")
		{
			$fees=200;
		}
		else if($m_event=="Spot Painting")
		{
			$fees=100;
		}
		else if($m_event=="Sketching")
		{
			$fees=100;
		}
		/*else
			echo no;
		*/
	$query=mysql_query("select * from dataregister")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							if($m_event==$row['event']&&$m_pemail==$row['pemail']){

							?>
	<script type="text/javascript">
	alert('You Have Already Applied For This Event');
	window.location="index.php?logout";

	</script>

	<?php
								break;
								}
								}
	/* Duplication Check */
	$sql_row=mysql_query("select * from dataregister");
	$no=mysql_num_rows($sql_row);
	$m_reg="J".$no;
if(!($m_event==$row['event']&&$m_pemail==$row['pemail'])){
	mysql_query("insert into dataregister (pname,pemail,pc_no,psc_no,pgender,pclgname,pbranch,event,membs,accd,date,uid,member1,member2,member3,fees,regid)
	values('$m_pname','$m_pemail','$m_pc_no','$m_psc_no','$m_pgender','$m_pclgname','$m_pbranch','$m_event','$m_membs','$m_accd',NOW(),'$m_uid','$m_m1','$m_m2','$m_m3','$fees','$m_reg')
	")or die(mysql_error());
	?>
	<script type="text/javascript">
	
	alert('Your Reg.Id is <?php echo $m_reg?> & Fees is Rs.<?php echo $fees?>');
	window.location="index.php?logout";

	</script>

	<?php
	}
	}
	?>
	
	
</div>

<script type="text/javascript">
function member_add(){
			 var  textbox;
			  var e1 = document.getElementById("membs");
				var member_n = e1.options[e1.selectedIndex].value; 
				//	alert(member_n);
				if(document.getElementById('new_mem')!==null)
					document.getElementById('new_mem').innerHTML="";
			 if(member_n>1)
			 {
				document.getElementById('mem_name').innerHTML="Members Name";
				 for(var i=2;i<=member_n;i++){
			textbox = document.createElement('input');
			textbox.type = 'text';
			textbox.name="member"+(i-1);
			//alert(textbox.name);
			textbox.placeholder="Memebr "+i+" Name";
			textbox.required=true;
			document.getElementById('new_mem').appendChild(textbox);
			
			 }}
		 }
		 
		 function events()
         {
						//alert("Hi...");
						//var event_sel=document.registration.event1.options[document.registration.event1.selecetdIndex].value;
						  var e = document.getElementById("event");
						var event = e.options[e.selectedIndex].value;
						//r=event;
						var memb=document.getElementById('members');

		if(event=="Rangoli")
		{
			memb.innerHTML="Min 1 Max 2";
		}
		else if(event=="Rangoli")
		{
			memb.innerHTML="Min 1 Max 2";
		}
		else if(event=="Dance (Solo)")
		{
			memb.innerHTML="Min 1 Max 1";
		}
		else if(event=="Dance (Duet/Trio)")
		{
			memb.innerHTML="Min 2 Max 3";
		}
		else if(event=="Dance (Group)")
		{
			memb.innerHTML="Min 4 Max 10";
		}
		else if(event=="Installation")
		{
			memb.innerHTML="Min 1 Max 3";
		}
		else if(event=="Music")
		{
			memb.innerHTML="Min 1 Max 1";
		}
		else if(event=="Spot Painting")
		{
			memb.innerHTML="Min 1 Max 1";
		}
		else if(event=="Sketching")
		{
			memb.innerHTML="Min 1 Max 1";
		}
		else
		{
			memb.innerHTML="";
		}
		
    }
</script>
</body>