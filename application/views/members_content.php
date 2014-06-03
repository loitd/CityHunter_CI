<?php 
	//var_dump($data);
?>
<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/members">Members</a>
		</li>
	</ul>
</div>

<div class="page-header">
  <h1>Members <small>Members List Management</small></h1>
  </div>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Members</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped bootstrap-datatable datatable">
			  <thead>
				  <tr>
				    <th>#</th>
				    <th>Username</th>
					  <th>Full Name</th>
					  <th>Email</th>
					  <th>Coins</th>
					  <th>Registration Date</th>
					  <th>Status</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>

				<?php foreach($data as $key=>$value): ?>
					<tr formember="<?php echo $data[$key]['id']; ?>">
					  	<td><?php echo $data[$key]['id']; ?></td>
					 	<td><?php echo $data[$key]['User_name']; ?></td>
						<td><?php echo $data[$key]['First_name'] . " " . $data[$key]['Last_name']; ?></td>
						<td><?php echo $data[$key]['Email_address']; ?></td>
						<td style="text-align:right;"><?php echo $data[$key]['Number_of_coin']; ?></td>
						<td class="center"><?php $ddsu = explode(" ", $data[$key]['Date_signup']); echo $ddsu[0]; ?></td>
						<td class="center">
							<span class="label label-success"><?php echo $data[$key]['Status']; ?></span>
						</td>
						<td class="center">
							<a class="btn btn-small btn-success" href="members/viewmember?uid=<?php echo $data[$key]['id']; ?>">
								<i class="icon-zoom-in icon-white"></i>  
								View                                            
							</a>
							<a class="btn btn-small btn-info" href="members/editmember?uid=<?php echo $data[$key]['id']; ?>">
								<i class="icon-edit icon-white"></i>  
								Edit                                            
							</a>
							<a class="btn btn-small btn-danger btn-delete-member" uid="<?php echo $data[$key]['id']; ?>" href="#">
								<i class="icon-trash icon-white"></i> 
								Delete
							</a>
						</td>
					</tr>
				<?php endforeach; ?>

			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
		<!-- content ends -->
        
</div><!--/#content.span10-->
	</div><!--/fluid-row-->