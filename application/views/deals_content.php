<?php 
	//var_dump($data);
?>

<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Deals</a>
		</li>
	</ul>
</div>

<div class="page-header">
  <h1>Deals <small>Deals List Management</small></h1>
  </div>
  
  
<div class="row-fluid sortable">	
<div class="box span12">

		<div class="box-header well" data-original-title>
			<h2><i class="icon-tags"></i> Restaurant Deals</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
        
        
        	<div id="whattab" style="display: none;" val="<?php echo is_null($whattab)?'':$whattab; ?>" ></div>
        
        
            <div class="box-content">
			<ul class="nav nav-tabs" id="myTab">
				<li ><a href="#all">All</a></li>
				<li class="active"><a href="#available">Available</a></li>
				<li><a href="#expired">Expired</a></li>
			</ul>
			 
		<div id="myTabContent" class="tab-content">
            
				<div class="tab-pane active" id="all">
                
				<form class="form-horizontal form-search-all" method="POST">
			  		<fieldset>
						<legend>All (Available & Expired) Deals</legend>
	                 	
	                 	<div class="control-group">
					  		<label class="control-label" for="date01">From Expiration  Date</label> 
	                  		<div class="controls"><input type="text" name="fromdate" class="input-xlarge datepicker" id="date01" value="03/01/2013"></div>
	         			</div>    
     					
     					<div class="control-group">
         					<label class="control-label" for="date02">To Expiration  Date</label> 
                  			<div class="controls"><input type="text" name="todate" class="input-xlarge datepicker" id="date02" value="10/31/2014"></div>
              			</div>
         
         
          				<div class="control-group">
							<label class="control-label">Activity</label>
							<div class="controls">
							  	<label class="checkbox inline">
								<input type="checkbox" name="purchasedcheck" id="inlineCheckbox1" value="Purchased"  checked> Purchased
							  	</label>

							  	<label class="checkbox inline">
								<input type="checkbox" name="giftedcheck" id="inlineCheckbox2" value="Gifted"  checked> Gifted
							  	</label>

							  	<label class="checkbox inline">
								<input type="checkbox" name="redeemedcheck" id="inlineCheckbox3" value="Redeemed"  checked> Redeemed
							  	</label>
							</div>
				  		</div>
                  
                  		<div class="control-group">         
	                  		<label class="control-label"></label>
	                  		<div class="controls">
		                  		<label class="checkbox">
								<input type="checkbox" name="inactivecheck" id="inlineCheckbox1" value="yes"  checked> Include Inactive Deals
						    	</label>
	         				</div>
         				</div>
                  
                
						<div class="form-actions">
							<button type="submit" name="allsubmit" class="btn btn-primary btn-refresh-all" value="isall">Refresh</button>
							<button type="reset" class="btn">Reset</button>
						</div>
			  </fieldset>
			</form>
		
			<div class="box-content" id="MOC-FORM-SEARCH-ALL">
				
				<table class="table table-striped bootstrap-datatable datatable">
					<thead>
					  <tr>
					    <th>#</th>
					    <th>Description</th>
						  <th>Restaurant</th>
						  <th>Price</th>
						  <th>Coins</th>
						  <th>Expiration Date</th>
						  <th>Status</th>
						  <th>Actions</th>
					  </tr>
					</thead>   
				<tbody>
				
				<?php if( ($whattab == 'allsubmit' || $whattab == 'alltab') && count($data) > 0): ?>
				<?php foreach($data as $key=>$value): ?>
				<tr forr="<?php echo $data[$key]['id'];?>">
				  	<td><?php echo $data[$key]['id'];?></td>
				  	<td><?php $d = $data[$key]['Description']; $d = (strlen($d) <= 80 ? $d : substr($d, 0, 80) . " ...");echo $d;?></td>
					<td><?php echo $data[$key]['Name'];?></td>
					<td>$<?php echo $data[$key]['Dollar_Price'];?></td>
					<td><?php echo $data[$key]['Coin_Price'];?></td>
					<td class="center"><?php echo $data[$key]['End_Date'];?></td>
					<td class="center">
						<span label-status="<?php echo $data[$key]['id'];?>" class="label label-success"><?php echo $data[$key]['Status'];?></span>
					</td>
					<td class="center">
						<a class="btn btn-small btn-success" href="<?php echo $this->config->site_url(); ?>/deals/viewdeal?id=<?php echo $data[$key]['id'];?>">
							<i class="icon-zoom-in icon-white"></i>  
							View                                            
						</a>
						<a class="btn btn-small btn-info" href="<?php echo $this->config->site_url(); ?>/deals/editdeal?id=<?php echo $data[$key]['id'];?>">
							<i class="icon-edit icon-white"></i>  
							Edit                                            
						</a>
						<a class="btn btn-small btn-danger btn-deactivate-deal" id="<?php echo $data[$key]['id'];?>" href="#">
							<i class="icon-remove-sign icon-white"></i> 
							Deactivate
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php endif; ?>

				</tbody>
				</table> 

			</div>
        
    </div>
                
        <div class="tab-pane" id="available">
                
			<form class="form-horizontal" method="POST" action="">
			  	<fieldset>
					<legend>Available Deals</legend>
					
	                
	                <div class="control-group">
				  		<label class="control-label" for="date03">From Expiration  Date</label> 
	              		<div class="controls"><input type="text" name="fromdate1" class="input-xlarge datepicker" id="date03" value="03/01/2013"></div>
	     			</div>    
						
						<div class="control-group">
	 					<label class="control-label" for="date04">To Expiration  Date</label> 
	          			<div class="controls"><input type="text" name="todate1" class="input-xlarge datepicker" id="date04" value="10/31/2014"></div>
	      			</div>
	         
			        <div class="control-group">         
			  		<label class="control-label"></label>
			  		<div class="controls">
			      		<label class="checkbox">
						<input type="checkbox" name="inactivecheck" id="inlineCheckbox1" value="yes"  checked> Include Inactive Deals
				    	</label>
						</div>
					</div>
	         
	                
					<div class="form-actions">
					  <button type="submit" name="availablefrm" class="btn btn-primary" value="isavailable">Refresh</button>
					  <button type="reset" class="btn">Reset</button>
					</div>
			  	</fieldset>
			</form>
		
			<div class="box-content">
			<table class="table table-striped bootstrap-datatable datatable">
			  <thead>
				  <tr>
				    <th>#</th>
				    <th>Description</th>
					<th>Restaurant</th>
					<th>Price</th>
					<th>Coins</th>
					<th>Expiration Date</th>
					<th>Status</th>
					<th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
				
				<?php if( ($whattab == 'availablefrm' || $whattab == 'alltab') && count($data) > 0): ?>
				<?php foreach($data as $key=>$value): ?>
				<tr forr="<?php echo $data[$key]['id'];?>">
				  	<td><?php echo $data[$key]['id'];?></td>
				  	<td><?php echo $data[$key]['Description'];?></td>
					<td><?php echo $data[$key]['Name'];?></td>
					<td>$<?php echo $data[$key]['Dollar_Price'];?></td>
					<td><?php echo $data[$key]['Coin_Price'];?></td>
					<td class="center"><?php echo $data[$key]['End_Date'];?></td>
					<td class="center">
						<span label-status="<?php echo $data[$key]['id'];?>" class="label label-success"><?php echo $data[$key]['Status'];?></span>
					</td>
					<td class="center">
						<a class="btn btn-small btn-success" href="<?php echo $this->config->site_url(); ?>/deals/viewdeal?id=<?php echo $data[$key]['id'];?>">
							<i class="icon-zoom-in icon-white"></i>  
							View                                            
						</a>
						<a class="btn btn-small btn-info" href="<?php echo $this->config->site_url(); ?>/deals/editdeal?id=<?php echo $data[$key]['id'];?>">
							<i class="icon-edit icon-white"></i>  
							Edit                                            
						</a>
						<a class="btn btn-small btn-danger btn-deactivate-deal" id="<?php echo $data[$key]['id'];?>" href="#">
							<i class="icon-remove-sign icon-white"></i> 
							Deactivate
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php endif; ?>
				
			  </tbody>
		  </table>            
		</div>
        
       	</div>

       	<!-- the fu begin -->
       	<div class="tab-pane" id="expired">
                
			<form class="form-horizontal" method="POST" action="">
			  	<fieldset>
					<legend>Available Deals</legend>
					
	                
	                <div class="control-group">
				  		<label class="control-label" for="date05">From Expiration  Date</label> 
	              		<div class="controls"><input type="text" name="fromdate2" class="input-xlarge datepicker" id="date05" value="03/01/2013"></div>
	     			</div>    
						
						<div class="control-group">
	 					<label class="control-label" for="date06">To Expiration  Date</label> 
	          			<div class="controls"><input type="text" name="todate2" class="input-xlarge datepicker" id="date06" value="10/31/2014"></div>
	      			</div>
	         
                
					<div class="form-actions">
					  <button type="submit" name="expiredfrm" class="btn btn-primary" value="isavailable">Refresh</button>
					  <button type="reset" class="btn">Reset</button>
					</div>
			  	</fieldset>
			</form>
		
			<div class="box-content">
			<table class="table table-striped bootstrap-datatable datatable">
			  <thead>
				  <tr>
				    <th>#</th>
				    <th>Description</th>
					<th>Restaurant</th>
					<th>Price</th>
					<th>Coins</th>
					<th>Expiration Date</th>
					<th>Status</th>
					<th>Actions</th>
				  </tr>
			  </thead>   
			  <tbody>
				
				<?php if( ($whattab == 'expiredfrm' || $whattab == 'alltab') && count($data) > 0): ?>
				<?php foreach($data as $key=>$value): ?>
				<tr forr="<?php echo $data[$key]['id'];?>">
				  	<td><?php echo $data[$key]['id'];?></td>
				  	<td><?php echo $data[$key]['Description'];?></td>
					<td><?php echo $data[$key]['Name'];?></td>
					<td>$<?php echo $data[$key]['Dollar_Price'];?></td>
					<td><?php echo $data[$key]['Coin_Price'];?></td>
					<td class="center"><?php echo $data[$key]['End_Date'];?></td>
					<td class="center">
						<span label-status="<?php echo $data[$key]['id'];?>" class="label label-success"><?php echo $data[$key]['Status'];?></span>
					</td>
					<td class="center">
						<a class="btn btn-small btn-success" href="<?php echo $this->config->site_url(); ?>/deals/viewdeal?id=<?php echo $data[$key]['id'];?>">
							<i class="icon-zoom-in icon-white"></i>  
							View                                            
						</a>
						<a class="btn btn-small btn-info" href="<?php echo $this->config->site_url(); ?>/deals/editdeal?id=<?php echo $data[$key]['id'];?>">
							<i class="icon-edit icon-white"></i>  
							Edit                                            
						</a>
						<a class="btn btn-small btn-danger btn-deactivate-deal" id="<?php echo $data[$key]['id'];?>" href="#">
							<i class="icon-remove-sign icon-white"></i> 
							Deactivate
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php endif; ?>
				
			  </tbody>
		  </table>            
		</div>
        
       	</div>
       	<!--  the fu end -->
                
</div>
</div><!--/row-->          
  
  
                
  
  
		<!-- content ends -->
        
</div><!--/#content.span10-->
</div><!--/fluid-row-->