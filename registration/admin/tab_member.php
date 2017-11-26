<div class="tab-pane fade in active" id="member">
   
	
	
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Registered Member</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    <th>College</th>
                                    <th>Email_Address</th>
                                    <th>Gender</th>
                                    <th>Date Register</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							/*$query = " SELECT * FROM dataregister";  										
									  //echo $query;
                            $result = mysql_query($query);
                              */      
							$query=mysql_query("select * from dataregister")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$id=$row['sysid'];
							?>
                              
                           		<tr class="del<?php echo $id ?>">
                                       <td><?php echo $row['pname']; ?></td>
                                       <td><?php echo $row['pc_no']; ?></td>
                                       <td><?php echo $row['pclgname']; ?></td>
                                       <td><?php echo $row['pemail']; ?></td>
                                       <td><?php echo $row['pgender']; ?></td>
                                       <td><?php echo $row['date']; ?></td>
                                       <td><a  id="<?php echo $id;?>" class="delete_member"><i class="icon-trash"></i>&nbsp;Delete</a></td>
                                </tr>
								<?php } ?>
                         
						 
                                
						 
						 
                            </tbody>
                        </table>
					
					
						<script type="text/javascript">
        $(document).ready( function() {

	
	
            $('.delete_member').click( function() {
		
                var id = $(this).attr("id");
         
                if(confirm("Are you sure you want to delete this Member?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_member.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                            $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });				
        });
    </script>


</div>