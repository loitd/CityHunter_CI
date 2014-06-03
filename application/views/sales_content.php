<!--<div id="content" class="span10">-->
<!-- content starts -->


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
  <h1>Sales History <small>Sales History List Management</small></h1>
  </div>
  
  
<div class="row-fluid sortable">	
<div class="box span12">

		<div class="box-header well" data-original-title>
			<h2><i class="icon-shopping-cart"></i> Sales History</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
        
        
        
        
        
            <div class="box-content">
			
                
			<form class="form-horizontal" method="GET" action="">
			  <fieldset>
				<legend>Sort Sales</legend>
				
                
                 <div class="control-group">
				  <label class="control-label" for="date01">From Sale Date</label> 
                  <div class="controls">
                  <input name="fromdate" type="text" class="input-xlarge datepicker" id="date01" value="2/2/2012">
         </div></div>    
         <div class="control-group">     
                  <label class="control-label" for="date02">To Sale Date</label> 
                  <div class="controls">
                  <input name="todate" type="text" class="input-xlarge datepicker" id="date02" value="3/3/2014">
         </div></div>
         
         <div class="control-group">         
                  <label class="control-label"></label>
                  <div class="controls">
                  <label class="checkbox">
					<input name="hiddencheck" type="checkbox" id="inlineCheckbox1" value="yes"  checked> 
					Include Hidden Sales
				    </label>
         </div></div>
         
                
				<div class="form-actions">
				  <button name="salebtn" type="submit" class="btn btn-primary">Refresh</button>
				  <button type="reset" class="btn">Reset</button>
				</div>
			  </fieldset>
			</form>
		
				<div class="box-content">
				  <table class="table table-striped bootstrap-datatable datatable">
				    <thead>
				      <tr>
				        <th>#</th>
				        <th>Date</th>
				        <th>Time</th>
				        <th>Activity</th>
				        <th>Redeem Code</th>
				        <th>Price</th>
				        <th>Coins</th>
				        <th>Restaurant</th>
				        <th>Username</th>
				        <th>Recipient</th>
				        <th>Transaction ID</th>
				        <th>Actions</th>
			          </tr>
			        </thead>
				    <tbody>
				    <?php //var_dump($data); ?>
				    <?php if(count($data) > 0 && $data != ''): ?>
					    <?php foreach($data as $key=>$value): ?>

						    <?php if($data[$key]['ishidden'] == "f"): ?> 
						    	<tr> 
							<?php elseif($data[$key]['ishidden'] == "t"):?>
								<tr style="background-color:#F66;">
							<?php endif;?>
						    
						        <td><?php echo $data[$key]['id'];?></td>
						        <td class="center"><?php $x = explode(" ", $data[$key]['Date_time']); echo str_replace("-", ".", $x[0]);?> </td>
						        <td class="center"><?php $y = explode(".", $x[1]); echo $y[0];?></td>
						        <td class="center">
							        <?php if($data[$key]['User_action'] == "Purchased a deal"): ?>
							        	<span class="label label-warning">Purchased</span>
							    	<?php elseif($data[$key]['User_action'] == "Redeemed"):?>
							    		<span class="label label-success">Redeemed</span>
							    	<?php elseif($data[$key]['User_action'] == "Gifted a deal at"):?>
							    		<span class="label label-info">Gifted</span>
							    	<?php else: ?>
							    		<span class="label label-warning"><?php // echo $data[$key]['User_action'];?></span>
							    	<?php endif;?>
						        </td>
						        <td class="center">-</td>
						        <td class="center">$<?php echo $data[$key]['Dollar_Price'];?></td>
						        <td class="center"><?php echo $data[$key]['Coin'];?></td>
						        <td class="center"><?php echo $data[$key]['Name'];?></td>
						        <td class="center"><?php echo $data[$key]['User_name'];?></td>
						        <td class="center">-</td>
						        <td class="center"><?php echo $data[$key]['id'];?></td>
						        <td class="center"><a class="btn btn-small btn-success" href="#">
									<i class="icon-zoom-in icon-white"></i>  
									View                                            
								</a> 
								<?php if($data[$key]['ishidden'] == "f"): ?> 
									<a class="btn btn-small btn-danger btn-sale-hide" id="<?php echo $data[$key]['id'];?>" href="#"> 
									<i class="icon-remove-sign icon-white"></i> Hide 
								<?php elseif($data[$key]['ishidden'] == "t"):?> 
									<a class="btn btn-small btn-danger btn-sale-unhide" id="<?php echo $data[$key]['id'];?>" href="#"> 
									<i class="icon-remove-sign icon-white"></i> Unhide
								<?php endif;?>
								</a>
								</td>
					        </tr>

				        <?php endforeach; ?>

			    	<?php endif;?>

			        </tbody>
			      </table>
			  </div>
            </div>
               
</div><!--/row-->          
  
  
                
  
  
		<!-- content ends -->
        
</div><!--/#content.span10-->
</div><!--/fluid-row-->