<!-- <div id="content" class="span10"> -->
<!-- content starts -->


<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
		<a href="#">Coins</a></li>
	</ul>
</div>
<div class="page-header">
  <h1>Coins <small>Manage Coins</small></h1>
  </div>
<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header well" data-original-title>
      <h2><i class="icon-play-circle"></i> Coins Earned History</h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
    </div>
      <div class="box-content">
        <table class="table table-striped bootstrap-datatable datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>Time</th>
              <th>Username</th>
              <th>Activity</th>
              <th>Coins Earned</th>
              <th>Restaurant</th>
              <th>Deal</th>
              <th>Photo</th>
              <th>Recipient</th>
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
				        <td class="center"><?php $y = explode(".", $x[1]); $z = explode(":", $y[0]); echo $z[1] . ":" . $z[2];?></td>
				        <td class="center"><?php echo $data[$key]['User_name'];?></td>
				        <td class="center">
				        <?php if($data[$key]['User_action'] == "Purchased a deal"): ?>
				        	<span class="label label-warning">Purchased Deal</span>
				    	<?php elseif($data[$key]['User_action'] == "Redeemed"):?>
				    		<span class="label label-success">Redeemed</span>
				    	<?php elseif($data[$key]['User_action'] == "Gifted a deal at"):?>
				    		<span class="label label-info">Gifted</span>
				    	<?php else: ?>
				    		<span class="label label-warning"><?php //echo $data[$key]['User_action'];?></span>
				    	<?php endif;?>
				        </td>
				        <td class="center"><?php echo $data[$key]['Coin'];?></td>
				        <td class="center"><?php echo $data[$key]['Name'];?></td>
				        <!-- view deal -->
				        <td class="center"><a class="btn btn-info btn-mini" href="#">
				        	<i class="icon-tag icon-white"></i> View</a>
				        </td>
				        <!-- view photos -->
				        <td class="center"><a class="btn btn-info btn-mini" href="#">
				        	<i class="icon-picture icon-white"></i> View</a>
				        </td>
				        <td class="center">-</td>

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
  <!--/row-->
  <!-- content ends -->
  </div>

<hr>


<div class="row-fluid sortable">

<div class="row-fluid span6">

  <div class="box fluid">
		<div class="box-header well" data-original-title>
			<h2>Coins  Settings</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
        <form class="form-horizontal">
			  <fieldset>
			<table class="table table-striped table-condensed">
				  <tbody>
					<tr>
					  <td><strong>Check In</strong> </td>
					  <td class="center"><input class="input-small error" id="inputLat" type="text" value="300"> per check in</td>
					  <td class="center"><p>(Default: 300)</p></td>
				    </tr>
					<tr>
					  <td><strong>Post Photo</strong></td>
					  <td class="center"><input class="input-small error" id="inputLat2" type="text" value="350"> per photo posted</td>
					  <td class="center">(Default: 350)</td>
				    </tr>
					<tr>
					  <td><strong>Like Photo</strong></td>
					  <td class="center"><input class="input-small error" id="inputLat3" type="text" value="15"> per photo liked</td>
					  <td class="center">(Default: 15)</td>
				    </tr>
					<tr>
					  <td><strong>Referral</strong></td>
					  <td class="center"><input class="input-small error" id="inputLat4" type="text" value="1000"> per new member referred</td>
					  <td class="center">(Default: 1000)</td>
				    </tr>
					<tr>
					  <td><strong>Purchase Deal</strong></td>
					  <td class="center"><input class="input-small error" id="inputLat5" type="text" value="1300"> per dollar spent</td>
					  <td class="center">(Default: 1300)</td>
				    </tr>                                   
				  </tbody>
		  </table>  
          
				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">Save Changes</button>
					<button class="btn">Cancel</button>
			    </div>
		  </fieldset>
		  </form>   
			 
	  </div>
  </div>
</div>
 
  
  
  </div><!--/row-->
</div>
<div class="row-fluid sortable"><!--/span--></div>

<!-- content ends -->
</div><!--/#content.span10-->
	</div><!--/fluid-row-->