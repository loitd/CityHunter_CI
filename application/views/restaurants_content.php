<?php 
	//var_dump($data);
?>

<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->base_url(); ?>dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo $this->config->base_url(); ?>restaurants">Restaurants</a>
		</li>
	</ul>
</div>

<div class="page-header">
  <h1>Restaurants <small>Restaurants List Management</small></h1>
  </div>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-glass"></i> Partner Restaurants</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		  <div class="form-actions"> <a class="btn btn-warning" href="restaurantadd.html">Add Partner Restaurant</a> </div>
		  <table class="table table-striped bootstrap-datatable datatable">
			  <thead>
				  <tr>
				    <th>#</th>
				    <th> Name</th>
					  <th>Cuisine Type</th>
					  <th>Email</th>
					  <th>Check-ins</th>
					  <th>Registration Date</th>
					  <th>Status</th>
					  <th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
				
			  	<?php foreach($data as $key => $value): ?>
					<tr forr="<?php echo $data[$key]['id']; ?>">
					  	<td><?php echo $data[$key]['id']; ?></td>
					  	<td><?php echo $data[$key]['Name']; ?></td>
						<td><?php echo $data[$key]['Cousine_Type']; ?></td>
						<td><?php echo $data[$key]['Email']; ?></td>
						<td style="text-align:right;"><?php echo $data[$key]['Check_ins']; ?></td>
						<td class="center"><?php echo $data[$key]['Reg_Date']; ?></td>
						<td class="center">
							<span class="label label-success"><?php echo $data[$key]['Status']; ?></span>
						</td>
						<td class="center">
							<a class="btn btn-small btn-success" href="restaurants/viewrestaurant?rid=<?php echo $data[$key]['id']; ?>">
								<i class="icon-zoom-in icon-white"></i>  
								View                                            
							</a>
							<a class="btn btn-small btn-info" href="restaurants/editrestaurant?rid=<?php echo $data[$key]['id']; ?>">
								<i class="icon-edit icon-white"></i>  
								Edit                                            
							</a>
							<a class="btn btn-small btn-danger btn-delete-restaurant" rid="<?php echo $data[$key]['id']; ?>" href="#">
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