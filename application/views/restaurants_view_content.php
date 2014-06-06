<?php 
	//var_dump($data['signatures']);
	//var_dump((int)5/2);

	if(is_null($data)){
		echo "No restaurant(s) found.";
		die();
	}
?>
<div>
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
				</li>
				<li>
					<a href="<?php echo $this->config->site_url(); ?>/restaurants">Restaurants</a> <span class="divider">/</span>
				</li>
				<li>
					<a href="#"><?php echo $data['basic']['Name']; ?></a> 
				</li>
			</ul>
		</div>
		<div class="page-header">
		  <h1><?php echo $data['basic']['Name']; ?> <small>View Restaurant Information & Activity</small></h1>
		  </div>
		<div class="row-fluid sortable">
        
        <div class="row-fluid span6">
        
            <div class="box fluid">
				<div class="box-header well" data-original-title>
					<h2>Restaurant Information</h2>
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
								<td><strong>Name</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
								<td class="center"><span class="red" style="font-size:15px; font-weight:bold;"><?php echo $data['basic']['Name']; ?></span></td>
								<td class="center">&nbsp;</td>
							</tr>
							<tr>
							  <td><strong>Second Name</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
							  <td class="center">unused</td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Business Type</strong></td>
							  <td class="center">unused</td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Cuisine Type</strong></td>
							  <td class="center"><?php echo $data['basic']['Cousine_Type']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Unique ID</strong></td>
							  <td class="center"><?php echo $data['basic']['id']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Main Photo</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
							  <td class="center"><a href="#"><img class="thumbdisp" width="256" height="256" src="<?php echo $data['basic']['BG_Picture']; ?>" alt=""></a></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Hours</strong></td>
							  <td class="center"><?php echo $data['basic']['Business_Hours']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Public Address </strong><a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
							  <td class="center"><?php echo $data['basic']['Address1']; ?></td>
							  <td class="center"> <a class="btn btn-mini" href="https://maps.google.ca/maps?ll=43.653226,-79.383184" target="_blank"><i class="icon-globe icon-black"></i> Maps</a></td>
						    </tr>
							<tr>
							  <td><strong>Latitude</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
							  <td class="center">-</td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Longitude</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
							  <td class="center">-</td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Public Phone</strong></td>
							  <td class="center"><?php echo $data['basic']['Phone']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Public Website</strong></td>
							  <td class="center"><?php echo $data['basic']['Web_address']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Check-ins</strong></td>
							  <td class="center"><?php echo $data['basic']['Check_ins']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Likes</strong></td>
							  <td class="center"><?php echo $data['basic']['Like']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Favourited</strong></td>
							  <td class="center">-</td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Comments</strong></td>
							  <td class="center"><?php echo $data['basic']['Comments']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Voted</strong></td>
							  <td class="center"><?php echo $data['basic']['Vote']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Redeemed</strong></td>
							  <td class="center"><?php echo $data['basic']['Redeemed']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Restaurant Description</strong></td>
							  <td class="center">unused</td>
							  <td class="center">&nbsp;</td>
						    </tr>
							<tr>
							  <td><strong>Price Range</strong></td>
							  <td class="center">unused</td>
							  <td class="center">&nbsp;</td>
						    </tr>                                   
						  </tbody>
				  </table>  
					 
			  </div>
		  </div>
          
          <?php //var_dump($data['owner']); ?>
           <div class="box fluid">
				<div class="box-header well" data-original-title>
					<h2>Owner Information</h2>
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
								<td><strong>First Name</strong></td>
								<td class="center"><?php echo $data['basic']['O_Firstname']; ?></td>
								<td class="center">&nbsp;</td>
							</tr>
							<tr>
								<td><strong>Last Name</strong></td>
								<td class="center"><?php echo $data['basic']['O_Lastname']; ?></td>
								<td class="center">&nbsp;</td>
							</tr>
							<tr>
								<td><strong>Email</strong></td>
								<td class="center"><span class="blue" style="font-size:15px; font-weight:bold;">
								<?php echo $data['basic']['O_Email']; ?></span></td>
								<td class="center">&nbsp;</td>
							</tr>
							<tr>
							  <td><strong>Phone</strong></td>
							  <td class="center"><?php echo $data['basic']['O_Phone']; ?></td>
							  <td class="center">&nbsp;</td>
						    </tr>                                   
						  </tbody>
				  </table>  
					 
			  </div>
		  </div>
           <div class="box fluid">
             <div class="box-header well" data-original-title>
               <h2>Contact Information</h2>
               <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
             </div>
             <div class="box-content">
               <table class="table table-striped table-condensed">
                 <tbody>
                   <tr>
                     <td><strong>Unique ID</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Uid']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>First Name</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Firstname']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>Last Name</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Lastname']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>Position</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Position']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>Email</strong></td>
                     <td class="center"><span class="blue" style="font-size:15px; font-weight:bold;">
                     <?php echo $data['basic']['C_Email']; ?></span></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>Phone</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Phone']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>Password</strong></td>
                     <td class="center">-</td>
                     <td class="center"><a class="btn btn-mini btn-danger" href="#"><i class="icon-refresh icon-white"></i> Reset</a></td>
                   </tr>
                   <tr>
                     <td><strong>Address 1</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Addr1']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>Address 2</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Addr2']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>City</strong></td>
                     <td class="center"><?php echo $data['basic']['C_City']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>State/Province</strong></td>
                     <td class="center"><?php echo $data['basic']['C_State']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>Country</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Country']; ?></td>
                     <td class="center">&nbsp;</td>
                   </tr>
                   <tr>
                     <td><strong>Zip/Postal Code</strong></td>
                     <td class="center"><?php echo $data['basic']['C_Zip']; ?></td>
                     <td class="center"><a class="btn btn-mini" href="https://maps.google.ca/maps?q=<?php echo $data['basic']['C_Zip']; ?>" target="_blank"><i class="icon-globe icon-black"></i> Maps</a></td>
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
			          <td class="center"><span class="label label-success">Active</span></td>
			          <td class="center"><a class="btn btn-mini btn-danger" href="#"><i class="icon-remove-sign icon-white"></i> Deactivate</a></td>
		            </tr>
			        <tr>
			          <td><strong>Total Sales</strong></td>
			          <td class="center"><span class="green" style="font-size:15px; font-weight:bold;">
			          <?php echo "$" . $data['totalsales'][0]['QQ']; ?>
			          </span></td>
			          <td class="center">&nbsp;</td>
		            </tr>
			        <tr>
			          <td><strong>Registration IP</strong></td>
			          <td class="center">-</td>
			          <td class="center"><a class="btn btn-mini" href="http://www.infobyip.com/ip-96.23.198.179.html" target="_blank"><i class="icon-globe icon-black"></i> Info</a></td>
		            </tr>
			        <tr>
			          <td><strong>Last IP</strong></td>
			          <td class="center">-</td>
			          <td class="center"><a class="btn btn-mini" href="http://www.infobyip.com/ip-96.23.198.179.html" target="_blank"><i class="icon-globe icon-black"></i> Info</a></td>
		            </tr>
			        <tr>
			          <td><strong>Sales Representative</strong></td>
			          <td class="center">-</td>
			          <td class="center"><a class="btn btn-mini btn-success" href="staffview.html">
									<i class="icon-zoom-in icon-white"></i>  
									View                                            
								</a></td>
		            </tr>
		          </tbody>
		        </table>
		      </div>
		  </div>
          
              
			<div class="box fluid">
			  <div class="box-header well" data-original-title>
			    <h2>Newsfeed</h2>
			    <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
		      </div>
			  <div class="box-content">
			    <table class="table table-striped table-condensed bootstrap-datatable datatable">
                <thead>
						  <tr>
						    <th>Time</th>
						    <th>Event</th>
					      </tr>
				  </thead>   
			      <tbody>
			        
			      <?php foreach($data['newsfeed'] as $key=>$value):?>
			        <tr>
			          <td class="center">
			         <?php 
						$x = explode(".", $data['newsfeed'][$key]['QQ']); 
						if(strpos($x[0], "days") !== false){
							// include days in string
							$y = explode("days", $x[0]);
							echo $y[0] . " days"; 
						} else {
							echo $x[0];
						}
						
					?></td>
			          <td><span class="label label-default"><?php echo $data['newsfeed'][$key]['First_name'];?></span> <?php echo $data['newsfeed'][$key]['User_action'];?></td>
		            </tr>
		          <?php endforeach; ?>
			        

		          </tbody>
		        </table>
                
		        <style type="text/css">
		        	#DataTables_Table_2_wrapper > div.row-fluid > div.span6 {
						display: none;
					}
		        </style>


		      </div>
		  </div>
			<div class="box fluid">
			  <div class="box-header well">
			    <h2>Notes</h2>
			    <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
		      </div>
			  <div class="box-content">
			    <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#notes">Notes</a></li>
			    <li><a href="#info">Info</a></li>
			      
		        </ul>
			    <div id="myTabContent" class="tab-content">
			      <div class="tab-pane active" id="notes">
			        <p><?php echo $data['basic']['Note'];?></p>
		          </div>
			      <div class="tab-pane" id="info">
			        <p><?php echo $data['basic']['Info'];?></p>
		          </div>
		        </div>
		      </div>
		    </div>
            
                            
          </div><!--/row-->
    </div>

<hr>

<?php foreach($data['deals'] as $key=>$val): ?>

<div class="row-fluid sortable">
  <div class="box fluid span6">
    <div class="box-header well" data-original-title>
      <h2>Deal <?php echo $key+1; ?></h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-condensed">
       <tbody>
        <tr>
          <td width="100"><strong>Description</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
          <td class="center"><strong><?php echo $data['deals'][$key]['Description'];?></strong></td>
          </tr>
          <tr>
            <td><strong>Status</strong></td>
            <td class="center"><span class="label label-success"><?php echo $data['deals'][$key]['Status'];?></span>&nbsp;&nbsp;&nbsp;<a class="btn btn-mini btn-danger" href="#"><i class="icon-remove-sign icon-white"></i> Deactivate</a></td>
          </tr>
          <tr>
            <td><strong>Auto Schedule</strong></td>
            <?php if( strtoupper($data['deals'][$key]['Status']) == 'ACTIVE'): ?>
            	<td class="center"><span class="label label-success">ON</span></td>
        	<?php else: ?>
        		<td class="center"> 
                <div class="alert alert-warning">
				<strong>Warning!</strong> For auto schedule to work, the deal must be active!
				</div>
                </td>
        	<?php endif;?>
          </tr>
          <tr>
            <td><strong>Price</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
            <td class="center"><span class="green" style="font-size:15px; font-weight:bold;">$<?php echo $data['deals'][$key]['Dollar_Price'];?></span></td>
          </tr>
          <tr>
            <td><strong>Coins</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
            <td class="center"><span class="yellow" style="font-size:15px; font-weight:bold;"><?php echo $data['deals'][$key]['Coin_Price'];?></span></td>
            </tr>
          <tr>
            <td><strong>Start Date</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
            <td class="center"><?php echo $data['deals'][$key]['Start_Date'];?></td>
            </tr>
             <tr>
            <td><strong>Expiration Date</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
            <td class="center"><?php echo $data['deals'][$key]['End_Date'];?></td>
            </tr>
          <tr>
            <td><strong>Fine Print</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
            <td class="center"><p>-</p></td>
            </tr>
          <tr>
            <td><strong>Likes</strong></td>
            <td class="center">-</td>
            </tr>
          <tr>
            <td><strong>Purchased</strong></td>
            <td class="center">-</td>
            </tr>
          <tr>
            <td><strong>Redeemed</strong></td>
            <td class="center">-</td>
            </tr>
          <tr>
            <td><strong>Gifted</strong></td>
            <td class="center">-</td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
<?php endforeach; ?>

  
<div class="row-fluid sortable">
  <div class="box fluid span6">
    <div class="box-header well" data-original-title>
      <h2>Deal History (Archived Deals)</h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-condensed  bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>Start</th>
            <th>Expiration</th>
            <th>Description</th>
            <th>Dollars</th>
            <th>Coins</th>
            <th>Deal</th>
            <th>L</th>
            <th>P</th>
            <th>R</th>
            <th>G</th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach($data['dealhis'] as $key=>$val): ?>
	          	<tr>
		            <td class="center"><?php echo $data['dealhis'][$key]['Start_Date'];?></td>
		            <td class="center"><?php echo $data['dealhis'][$key]['End_Date'];?></td>
		            <td class="center"><?php echo $data['dealhis'][$key]['Description'];?></td>
		            <td style="text-align:right;"><span class="green">$<?php echo $data['dealhis'][$key]['Dollar_Price'];?></span></td>
		            <td style="text-align:right;"><span class="yellow"><?php echo $data['dealhis'][$key]['Coin_Price'];?></span></td>
		            <td><a class="btn btn-info btn-mini" href="<?php echo $this->config->site_url(); ?>/deals/viewdeal?id=<?php echo $data['dealhis'][$key]['id'];?>"><i class="icon-tag icon-white"></i> View</a></td>
		            <td class="center">-</td>
		            <td class="center">-</td>
		            <td class="center">-</td>
		            <td class="center">-</td>
	          	</tr>
          	<?php endforeach; ?>
        </tbody>
      </table>
      
      <style type="text/css">
      	#DataTables_Table_0_wrapper > div.row-fluid > div.span6 {
			display: none;
		}
      </style>

    </div>
  </div>
  
</div>


<hr>


<div class="row-fluid sortable"><!--/span-->
  <div class="box fluid">
    <div class="box-header well" data-original-title>
      <h2>Sales</h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-condensed bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Action</th>
            <th>Deal</th>
            <th>Redeem Code</th>
            <th>Username</th>
            <th>Recipient</th>
            <th>Dollars</th>
            <th>Coins</th>
            <th>Transaction ID</th>
          </tr>
        </thead>
        <tbody>
        
        <?php foreach($data['sales'] as $key=>$val): ?>
          	<tr>
	            <td class="center"><?php $x= explode(" ", $data['sales'][$key]['DateTime']); echo $x[0]; ?> </td>
	            <td class="center"><?php $y= explode(".", $x[1]) ; $y = explode(":", $y[0]); echo $y[0].":".$y[1]; ?></td>
	            <td class="center"><span class="label label-warning"><?php echo $data['sales'][$key]['Status'];?></span></td>
	            <td><a class="btn btn-info btn-mini" href="#"><i class="icon-tag icon-white"></i> View</a></td>
	            <td class="center"><?php echo $data['sales'][$key]['Redeem_Code'];?></td>
	            <td class="center"><span class="label label-default"><?php echo $data['sales'][$key]['User_name'];?></span></td>
	            <td class="center"><span class="label label-default">-</span></td>
	            <td style="text-align:right;"><span class="green">$<?php echo $data['sales'][$key]['Dollar_Price'];?></span></td>
	            <td style="text-align:right;"><span class="yellow"><?php echo $data['sales'][$key]['Coin_Price'];?></span></td>
	            <td class="center"><?php echo $data['sales'][$key]['id'];?></td>
          	</tr>
        <?php endforeach; ?>
        
        </tbody>

      </table>
      
      <style type="text/css">
      	#DataTables_Table_1_wrapper > div.row-fluid > div.span6 {
			display: none;
		}
      </style>

    </div>
  </div>
</div><!--/row-->



 <hr>



<div class="row-fluid sortable"><!--/span-->
<div class="row-fluid span6">
<div class="box fluid">
<div class="box-header well" data-original-title>
  <h2>Owner Photos</h2>
  <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
</div>
<div class="box-content">
<div><ul class="thumbnails gallery">
													<li id="image-1" class="thumbnail thumbnailx">
							<a style="background:url(img/gallery/thumbs/1.jpg)" title="Sample Image 1" href="img/gallery/1.jpg"><img class="grayscale" src="img/gallery/thumbs/1.jpg" alt="Sample Image 1"></a>
						</li>
													
</ul>
</div>
  <div class="pagination pagination-centered">
    <ul>
      <li><a href="#">Prev</a></li>
      <li class="active"> <a href="#">1</a> </li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">Next</a></li>
    </ul>
</div>
</div>
</div>



<div class="box fluid">
<div class="box-header well" data-original-title>
  <h2>Members Photos</h2>
  <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
</div>
<div class="box-content">
  <div>
    <ul class="thumbnails gallery">
      <li id="image-13" class="thumbnail"> <a style="background:url(img/gallery/thumbs/1.jpg)" title="Sample Image 1" href="img/gallery/1.jpg"><img class="grayscale" src="img/gallery/thumbs/1.jpg" alt="Sample Image 1"></a> </li>
    </ul>
  </div>
  <div class="pagination pagination-centered">
    <ul>
      <li><a href="#">Prev</a></li>
      <li class="active"> <a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">Next</a></li>
    </ul>
  </div>
</div>
</div>
</div>

<?php //var_dump($data['comments']); ?>
<div class="row-fluid span6">
<div class="box fluid">
<div class="box-header well" data-original-title>
  <h2>Comments</h2>
  <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
</div>
<div class="box-content">
  <table class="table table-striped table-condensed bootstrap-datatable datatable">
    <thead>
      <tr>
        <th>Time</th>
        <th>Comment</th>
        <th>Relation</th>
        <th width="70">Manage</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($data['comments'] as $key=>$value):?>
      <tr>
        <td class="center">
        	<?php 
				$x = explode(".", $data['comments'][$key]['QQ']); 
				if(strpos($x[0], "days") !== false){
					// include days in string
					$y = explode("days", $x[0]);
					echo $y[0] . " days"; 
				} else {
					echo $x[0];
				}
				
			?>
        </td>
        <td class="center"><?php echo $data['comments'][$key]['Comment']?></td>
        <td class="center"><span class="label label-inverse"><?php echo $data['comments'][$key]['ResName']?></span></td>
        <td><a class="btn btn-mini btn-danger btn-delete-comment" uid="" cmtid="<?php echo $data['comments'][$key]['id']; ?>" href="#"><i class="icon-trash icon-white"></i> Delete</a></td>
      </tr>
    <?php endforeach; ?>
      
    </tbody>
  </table>
  
		<style type="text/css">
        	#DataTables_Table_0_wrapper > div.row-fluid > div.span6,
        	#DataTables_Table_1_wrapper > div.row-fluid > div.span6,
        	#DataTables_Table_2_wrapper > div.row-fluid > div.span6,
        	#DataTables_Table_3_wrapper > div.row-fluid > div.span6 {
				display: none;
			}
        </style>



</div>
</div>
</div>

</div>
		
        
<hr>
        
<?php foreach($data['signatures'] as $key=>$val): ?>
<?php if($data['signatures'][$key]['Menu_name'] != ''): ?>

<div class="row-fluid sortable">
    <div class="box fluid span6">
		<div class="box-header well" data-original-title>
			<h2>Signature Dish <?php echo $key+1;?></h2>
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
						<td><strong>Name</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
						<td class="center"><span class="red" style="font-size:15px; font-weight:bold;"><?php echo $data['signatures'][$key]['Menu_name'] ;?></span></td>
					</tr>
					<tr>
					  <td><strong>Status</strong></td>
					  <td class="center"><span class="label label-success">Active</span>&nbsp;&nbsp;&nbsp;<a class="btn btn-mini btn-danger" href="#"><i class="icon-remove-sign icon-white"></i> Deactivate</a></td>
				    </tr>
					<!--<tr>
					  <td><strong> Photo</strong></td>
					  <td class="center"><a href="#"><img class="thumbdisp" src="img/gallery/thumbs/1.jpg" alt=""></a></td>
				    </tr>-->
					<tr>
					  <td><strong>Price</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
					  <td class="center"><span class="green" style="font-size:15px; font-weight:bold;">$<?php echo $data['signatures'][$key]['Menu_prize'] ;?></span></td>
				    </tr>
					<tr>
					  <td><strong>Description</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
					  <td class="center"><?php echo $data['signatures'][$key]['Menu_description'] ;?></td>
				    </tr>
					<tr>
					  <td><strong>Likes</strong></td>
					  <td class="center"><?php echo $data['signatures'][$key]['Menu_Like'] ;?></td>
				    </tr>                                   
				  </tbody>
		  	</table>  
		</div>
    </div>
</div>

<?php endif;?>
<?php endforeach; ?>
            
<!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->