<?php //var_dump($data); ?>
<div id="content" class="span10">
<!-- content starts -->


<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/staffs">Staff</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#"><?php echo $data['basic'][0]['Internal_ID'];?></a> 
		</li>
	</ul>
</div>
<div class="page-header">
  <h1><?php echo $data['basic'][0]['Internal_ID'];?><small> View Sales Rep Account</small></h1>
  </div>
<div class="row-fluid sortable">

<div class="row-fluid span6">

    <div class="box fluid">
		<div class="box-header well" data-original-title>
			<h2>Information</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-condensed">
				  <tbody>
					<tr>
						<td><strong>Internal ID</strong></td>
						<td class="center"><span class="red" style="font-size:15px; font-weight:bold;"><?php echo $data['basic'][0]['Internal_ID'];?></span></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
					  <td><strong>Unique ID</strong></td>
					  <td class="center"><?php echo $data['basic'][0]['id'];?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
						<td><strong>First Name</strong></td>
						<td class="center"><?php echo $data['basic'][0]['First_Name'];?></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Last Name</strong></td>
						<td class="center"><?php echo $data['basic'][0]['Last_Name'];?></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Email</strong></td>
						<td class="center"><span class="blue" style="font-size:15px; font-weight:bold;"><?php echo $data['basic'][0]['Email'];?></span></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Password</strong></td>
						<td class="center">-</td>
						<td class="center">
                        <a class="btn btn-mini btn-danger btn-reset-staff-password" uid="<?php echo $data['basic'][0]['id'];?>" href="#"><i class="icon-refresh icon-white"></i> Reset</a>
                      </td>
					</tr>
					<tr>
					  <td><strong>Phone</strong></td>
					  <td class="center"><?php echo $data['basic'][0]['Phone'];?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
				  </tbody>
		  </table>  
			 
	  </div>
  </div>
</div>
  <div class="row-fluid span6">
  
  <div class="box fluid">
	  <div class="box-header well" data-original-title>
	    <h2>Account</h2>
	    <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
      </div>
	  <div class="box-content">
	    <table class="table table-striped table-condensed">
	      <tbody>
	        
	        <tr>
	          	<td><strong>Status</strong></td>
	          	
				<td class="center">
					<?php if($data['basic'][0]['Status'] == 'active'): ?>
					<span class="label label-success" forstafftxt="<?php echo $data['basic'][0]['id'];?>">active</span>
					<div id="StaffState" currentStaffState="active"></div>
					<?php else:?>
					<span class="label" forstafftxt="<?php echo $data['basic'][0]['id'];?>">inactive</span>
					<div id="StaffState" currentStaffState="inactive"></div>
					<?php endif; ?>
				</td>
	          	<td class="center">
	          		<?php if($data['basic'][0]['Status'] == 'active'): ?>
	          		<a class="btn btn-mini btn-inverse btn-deactivate-staff" uid="<?php echo $data['basic'][0]['id'];?>" saction="de" href="#"><i class="icon-remove-sign icon-white"></i>Deactivate</a>
	          		<?php else:?>
	          		<a class="btn btn-mini btn-success btn-deactivate-staff" uid="<?php echo $data['basic'][0]['id'];?>" saction="de" href="#"><i class="icon-remove-sign icon-white"></i>Activate</a>
	          		<?php endif; ?>
	          	</td>
            </tr>

	        <tr>
	          <td><strong>Registration IP</strong></td>
	          <td class="center"><?php echo $data['basic'][0]['Reg_IP'];?></td>
	          <td class="center"><a class="btn btn-mini" href="http://www.infobyip.com/ip-<?php echo $data['basic'][0]['Reg_IP'];?>.html" target="_blank"><i class="icon-globe icon-black"></i> Info</a></td>
            </tr>
	        <tr>
	          <td><strong>Last IP</strong></td>
	          <td class="center"><?php echo $data['basic'][0]['Last_IP'];?></td>
	          <td class="center"><a class="btn btn-mini" href="http://www.infobyip.com/ip-<?php echo $data['basic'][0]['Last_IP'];?>.html" target="_blank"><i class="icon-globe icon-black"></i> Info</a></td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
  
  <div class="box fluid">
    <div class="box-header well">
      <h2>Notes</h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
    </div>
    <div class="box-content">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#notes">Notes</a></li>
        <li><a href="#info">Info</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="notes">
        	<?php echo $data['basic'][0]['Notes'];?>
        </div>
        <div class="tab-pane" id="info">
        	<?php echo $data['basic'][0]['Info'];?>
        </div>
      </div>
    </div>
  </div>
  <!--/row-->
  </div>
  </div>
  
  <hr>
  
  <div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header well" data-original-title>
      <h2><i class="icon-glass"></i> Partner Restaurants</h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
    </div>
    <div class="box-content">
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
          
        <?php foreach($data['partner'] as $key => $value): ?>
			<tr forr="<?php echo $data['partner'][$key]['id']; ?>">
			  	<td><?php echo $data['partner'][$key]['id']; ?></td>
			  	<td><?php echo $data['partner'][$key]['Name']; ?></td>
				<td><?php echo $data['partner'][$key]['Cousine_Type']; ?></td>
				<td>-</td>
				<td style="text-align:right;"><?php echo $data['partner'][$key]['Check_ins']; ?></td>
				<td class="center">-</td>
				<td class="center">
					<span class="label label-success">Active </span>
				</td>
				<td class="center">
					<a class="btn btn-small btn-success" href="../restaurants/viewrestaurant?rid=<?php echo $data['partner'][$key]['id']; ?>">
						<i class="icon-zoom-in icon-white"></i>  
						View                                            
					</a>
					<a class="btn btn-small btn-info" href="../restaurants/editrestaurant?rid=<?php echo $data['partner'][$key]['id']; ?>">
						<i class="icon-edit icon-white"></i>  
						Edit                                            
					</a>
					<a class="btn btn-small btn-danger btn-delete-restaurant" rid="<?php echo $data['partner'][$key]['id']; ?>" href="#">
						<i class="icon-trash icon-white"></i> 
						Delete
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<!--/row--><!--/row-->






  <!-- content ends -->
</div><!--/#content.span10-->
	</div><!--/fluid-row-->