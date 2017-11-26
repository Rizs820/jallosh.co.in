<div class="tab-pane fade"id="user">



                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;User Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							$query=mysql_query("select * from user")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$id=$row['user'];
							?>
                              
								<tr class="del<?php echo $id ?>">
                                  
                                       <td><?php echo $row['username']; ?></td>
                                       <td><?php echo $row['password']; ?></td>
                                       <td><?php echo $row['firstname']; ?></td>
                                       <td><?php echo $row['lastname']; ?></td>
                                       <td width="100"><a class="delete_user"  id="<?php echo $id; ?>"><i class="icon-trash"></i>&nbsp;Delete</a></td>

                                </tr>
								<?php } ?>
                         
						 
                                
						 
						 
                            </tbody>
                        </table>
						
						
						<script type="text/javascript">
        $(document).ready( function() {

	
	
            $('.delete_user').click( function() {
		
                var id = $(this).attr("id");
         
                if(confirm("Are you sure you want to delete this User?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_user.php",
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

