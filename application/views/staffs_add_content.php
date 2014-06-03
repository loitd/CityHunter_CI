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
			<a href="#">Add</a> 
		</li>
	</ul>
</div>
<div class="page-header">
	<h1>New <small>Add Sales Rep Account</small></h1>
</div>

<?php if(validation_errors()): ?>
<div class="alert alert-info">
	<?php echo validation_errors(); ?>
</div>
<?php endif; ?>

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
        <form class="form-horizontal" method="POST" action="">
			  <fieldset>
			<table class="table table-striped table-condensed">
				  <tbody>
					<tr>
						<td><strong>Internal ID</strong></td>
						<td class="control-group error">
						<input name="internalID" class="input-small error" id="inputError" type="text"></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
					  <td><strong>Unique ID</strong></td>
					  <td class="controls">
					  <input class="input-mini disabled" id="disabledInput" type="text" placeholder="<?php echo $data['nextid'];?>" disabled=""></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
						<td><strong>First Name</strong></td>
						<td class="controls">
						<input name="firstname" class="input-medium" type="text"></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Last Name</strong></td>
						<td class="controls">
						<input name="lastname" class="input-medium" type="text"></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Email</strong></td>
						<td class="control-group warning">
						<input name="email" class="input-large warning" id="inputWarning" type="text"></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Password</strong></td>
						<td class="controls">
						<input name="password" class="input-medium" type="password"></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
					  <td><strong>Password Confirmation</strong></td>
					  <td class="controls">
					  <input name="password_confirm" class="input-medium" type="password"></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Phone</strong></td>
						<td class="controls">
						<input name="phone" class="input-medium" type="text"></td>
					  <td class="center">&nbsp;</td>
				    </tr>                                   
				  </tbody>
		  </table>  
				  <div class="form-actions">
					<button name="addstaff" type="submit" class="btn btn-primary">Save Changes</button>
					<button class="btn">Cancel</button>
			    </div>
			  </fieldset>
			</form>   
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
	          <td class="center"><span class="label label">Inactive</span></td>
	          <td class="center"><a class="btn btn-mini btn-success" href="#"><i class="icon-ok-sign icon-white"></i> Activate</a></td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
  </div><!--/row-->
</div>

<!--/row-->



		<!-- content ends -->
</div><!--/#content.span10-->
	</div><!--/fluid-row-->