<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Staff</a>
		</li>
	</ul>
</div>

<div class="page-header">
  <h1>Staff <small>Staff List Management</small></h1>
  </div>
       
  
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-briefcase"></i> Sales Representatives</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
        
        
        <div class="form-actions">
				  <a class="btn btn-warning" href="staffs/addstaff">Add Sales Representative</a>
		  </div>
                
        
			<table class="table table-striped bootstrap-datatable datatable">
			  <thead>
				  <tr>
				    <th width="3%">#</th>
				    <th width="11%">Internal ID</th>
					  <th width="11%">Full Name</th>
					  <th width="24%">Email</th>
					  <th width="17%">Registration Date</th>
					  <th width="9%">Status</th>
					  <th width="25%">Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

			  	<?php //var_dump($data); ?>
			  	<?php if(count($data) > 0 && $data != ''): ?>
			  	<?php foreach($data as $key=>$value): ?>
				
				<tr formember="<?php echo $data[$key]['id'];?>">
				  	<td><?php echo $data[$key]['id'];?></td>
				  	<td><?php echo $data[$key]['Internal_ID'];?></td>
					<td><?php echo $data[$key]['First_Name'] . " " . $data[$key]['Last_Name'];?></td>
					<td><?php echo $data[$key]['Email'];?></td>
					<td class="center"><?php echo $data[$key]['Reg_Date'];?></td>
					<td class="center">
						<?php if($data[$key]['Status'] == 'active'): ?>
							<span class="label label-success"><?php echo $data[$key]['Status'];?></span>
						<?php else:?>
							<span class="label"><?php echo $data[$key]['Status'];?></span>
						<?php endif;?>
					</td>
					<td class="center">
						<a class="btn btn-small btn-success" href="staffs/viewstaff?id=<?php echo $data[$key]['id'];?>">
							<i class="icon-zoom-in icon-white"></i>  
							View                                            
						</a>
						<a class="btn btn-small btn-info" href="staffs/editstaff?id=<?php echo $data[$key]['id'];?>">
							<i class="icon-edit icon-white"></i>  
							Edit                                            
						</a>
						<a class="btn btn-small btn-danger btn-delete-staff" uid="<?php echo $data[$key]['id'];?>" href="#">
							<i class="icon-trash icon-white"></i> 
							Delete
						</a>
					</td>
				</tr>

					<?php endforeach; ?>

			    <?php endif;?>

			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
		<!-- content ends -->
        
</div><!--/#content.span10-->
	</div><!--/fluid-row-->