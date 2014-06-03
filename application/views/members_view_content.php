<?php 
	//var_dump($data['comments']);
	
	if (is_null($data['basicinfo'])) {
		echo "No user(s) found.";
		die();
	}
?>

<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/members">Members</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#"><?php echo $data['basicinfo']['User_name']; ?></a> 
		</li>
	</ul>
</div>
<div class="page-header">
  <h1><?php echo $data['basicinfo']['User_name']; ?> <small>View User Information & Activity</small></h1>
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
						<td><strong>Username</strong></td>
						<td class="center"><span class="red" style="font-size:15px; font-weight:bold;">
						<?php echo $data['basicinfo']['User_name']; ?></span></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
					  <td><strong>Unique ID</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['id']; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Profile Picture</strong></td>
					  <td class="center"><a href="#">
					  <img class="thumbdisp" height="128" width="128" src="<?php echo $data['basicinfo']['Profile_picture']; ?>" alt=""></a></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
						<td><strong>First Name</strong></td>
						<td class="center"><?php echo $data['basicinfo']['First_name']; ?></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Last Name</strong></td>
						<td class="center"><?php echo $data['basicinfo']['Last_name']; ?></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Email</strong></td>
						<td class="center">
						<span class="blue" style="font-size:15px; font-weight:bold;">
						<?php echo $data['basicinfo']['Email_address']; ?>
						</span></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Password</strong></td>
						<td class="center">-</td>
						<td class="center">
                        <a class="btn btn-mini btn-danger btn-reset-pwd" href="#" uid="<?php echo $data['basicinfo']['id']; ?>" uemail="<?php echo $data['basicinfo']['Email_address']; ?>">
                        <i class="icon-refresh icon-white"></i> Reset</a>
                      </td>
					</tr>
					<tr>
					  <td><strong>Referred By Username</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['Referred_By_Username']; ?></td>
					  <td class="center">
                      <a class="btn btn-success btn-mini" href="viewmember?uname=<?php echo $data['basicinfo']['Referred_By_Username']; ?>"><i class="icon-user icon-white"></i> View</a>
                      </td>
				    </tr>
					<tr>
					  <td><strong>Referred By Email</strong></td>
					  <td class="center">-</td>
					  <td class="center">
                      <a class="btn btn-success btn-mini" href="#"><i class="icon-user icon-white"></i> View</a>
                      </td>
				    </tr>
					<tr>
					  <td><strong>Facebook</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['Facebook_id']; ?></td>
					  <td class="center">
                      <a class="btn btn-mini" href="https://www.facebook.com/<?php echo $data['basicinfo']['Facebook_id']; ?>"><i class="icon-globe icon-black"></i> Facebook</a>
                      </td>
				    </tr>
					<tr>
					  <td><strong>Twitter</strong></td>
					  <td class="center">@<?php echo $data['basicinfo']['Twitter_id']; ?></td>
					  <td class="center">
                      <a class="btn btn-mini" href="#"><i class="icon-globe icon-black"></i> Twitter</a>
                      </td>
				    </tr>
					<tr>
					  <td><strong>Weibo</strong></td>
					  <td class="center">&nbsp;</td>
					  <td class="center">
                      <a class="btn btn-mini" href="#"><i class="icon-globe icon-black"></i> Weibo</a>
                      </td>
				    </tr>
					<tr>
					  <td><strong>Address 1</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['Address']; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Address 2</strong></td>
					  <td class="center">-</td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>City</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['City']; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>State/Province</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['State']; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Country</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['Country']; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Zip/Postal Code</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['Zip']; ?></td>
					  <td class="center">
                      <a class="btn btn-mini" href="https://maps.google.ca/maps/preview?q=<?php echo $data['basicinfo']['Zip']; ?>" target="_blank"><i class="icon-globe icon-black"></i> Maps</a>
                      </td>
				    </tr>
					<tr>
					  <td><strong>Phone</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['Phone_number']; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Birthday</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['Date_Of_Birth']; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Gender</strong></td>
					  <td class="center"><?php echo $data['basicinfo']['Gender']; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>                                   
				  </tbody>
		  </table>  
			 
	  </div>
  </div>
  
  
  <div class="box fluid">
	  <div class="box-header well" data-original-title>
	    <h2>Push Notifications</h2>
	    <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
      </div>
	  <div class="box-content">
	    <table class="table table-striped table-condensed">
	      <tbody>
	        <tr>
	          <td><strong>Likes</strong></td>
	          <td class="center">People I Follow</td>
	          <td class="center"><a class="btn btn-mini btn-danger" href="#"><i class="icon-pause icon-white"></i> Pause</a></td>
            </tr>
	        <tr>
	          <td><strong>Comments</strong></td>
	          <td class="center">Everyone</td>
	          <td class="center"><a class="btn btn-mini btn-danger" href="#"><i class="icon-pause icon-white"></i> Pause</a></td>
            </tr>
	        <tr>
	          <td><strong>Contact</strong></td>
	          <td class="center">All New Contacts</td>
	          <td class="center"><a class="btn btn-mini btn-danger" href="#"><i class="icon-pause icon-white"></i> Pause</a></td>
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
	          <td class="center"><a class="btn btn-mini btn-inverse" href="#"><i class="icon-remove-sign icon-white"></i> Deactivate</a></td>
            </tr>
	        <tr>
	          <td><strong>Coins</strong></td>
	          <td class="center"><span class="yellow" style="font-size:20px; font-weight:bold;"><?php echo $data['basicinfo']['Number_of_coin']; ?></span></td>
	          <td class="center">&nbsp;</td>
            </tr>
	        <tr>
	          <td><strong>Total Purchases</strong></td><!--totalpurchased = in srv_user_activity-->
	          <td class="center"><span class="green" style="font-size:15px; font-weight:bold;"><?php 
	          //var_dump($data['totalp']);
	          echo "$".$data['totalp'][0]['totalp']; ?></span></td>
	          <td class="center">&nbsp;</td>
            </tr>
	        <tr>
	          <td><strong>Registration IP</strong></td>
	          <td class="center"><?php echo $data['basicinfo']['Registration_ip']; ?></td>
	          <td class="center"><a class="btn btn-mini" href="http://www.infobyip.com/ip-<?php echo $data['basicinfo']['Registration_ip']; ?>.html" target="_blank"><i class="icon-globe icon-black"></i> Info</a></td>
            </tr>
	        <tr>
	          <td><strong>Last IP</strong></td>
	          <td class="center"><?php echo $data['basicinfo']['User_last_ip']; ?></td>
	          <td class="center"><a class="btn btn-mini" href="http://www.infobyip.com/ip-<?php echo $data['basicinfo']['User_last_ip']; ?>.html" target="_blank"><i class="icon-globe icon-black"></i> Info</a></td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
  
      
	<div class="box fluid">
	  <div class="box-header well" data-original-title>
	    <h2>Activity</h2>
	    <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
      </div>
	  <div class="box-content">
	    <table class="table table-striped table-condensed bootstrap-datatable datatable">
        <thead>
				  <tr>
				    <th>Time</th>
				    <th>Event</th>
				    <th>Debit</th>
				    <th>Credit</th>
					<th>Balance</th>
				  </tr>
			  </thead>   
	      <tbody>
	        
	        <?php foreach($data['checkins'] as $key=>$value): ?>
	        <tr>
	          <td class="center"><?php echo $data['checkins'][$key]['Date_Time']; ?></td>
	          <td>Checked in at <span class="label label-inverse"><?php echo $data['checkins'][$key]['Name']; ?></span></td>
	          <td style="text-align:right;"><span class="yellow">-</span></td>
	          <td style="text-align:right;"><span class="yellow">-</span></td>
	          <td style="text-align:right;"><span class="yellow">-</span></td>
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
  
  
</div><!--/row-->
</div>



<hr>



<div class="row-fluid sortable"><!--/span-->
	<div class="box fluid">
		<div class="box-header well" data-original-title>
			<h2>Deals</h2>
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
				<th>Restaurant</th>
				<th>Username</th>
				<th>Earned</th>
				<th>Spent</th>
				<th>Dollars</th>
				<th>Transaction ID</th>
				</tr>
				</thead>
			<tbody>

			<?php //var_dump($data['deals']); ?>
			
			<?php foreach($data['deals'] as $key=>$value): ?>
				<tr>
					<td class="center"><?php $xx = explode(" ", $data['deals'][$key]['DateTime']); echo $xx[0]; ?></td>
					<td class="center"><?php $xxx = explode(".", $xx[1]); echo $xxx[0]; ?></td>
					<td class="center"><?php echo $data['deals'][$key]['Status']; ?></td>
					<td>
						<a class="btn btn-info btn-mini" href="<?php echo $this->config->site_url(); ?>/deals/viewdeal?id=<?php echo $data['deals'][$key]['Deals_Detail_ID'];?>">
						<i class="icon-tag icon-white"></i> View</a>
					</td>
					<td class="center">-</td>
					<td class="center"><span class="label label-inverse"><?php echo $data['deals'][$key]['Name']; ?></span></td>
					<td class="center">&nbsp;</td>
					<td style="text-align:right;"><span class="yellow">-</span></td>
					<td style="text-align:right;"><span class="yellow">-</span></td>
					<td style="text-align:right;"><span class="green"><?php echo $data['deals'][$key]['Dollar_Price']; ?></span></td>
					<td class="center"><?php echo $data['deals'][$key]['id']; ?></td>
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
	<div class="box span6">
		<div class="box-header well" data-original-title>
		<h2>Photos</h2>
		<div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
		</div>
		<div class="box-content">
		<div>

			<ul class="thumbnails gallery" id="itemContainer">
			
			<?php foreach($data['pictures'] as $key => $value):?>
			<li id="<?php echo $data['pictures'][$key]['id'];?>" class="thumbnail">
				<a style="background:url(<?php echo $data['pictures'][$key]['Picture_File_Name'];?>)" title="<?php echo "Image ". ($key+1) ;?>" href="<?php echo $data['pictures'][$key]['Picture_File_Name'];?>"><img class="grayscale" src="<?php echo $data['pictures'][$key]['Picture_File_Name'];?>" alt="Sample Image 1"></a>
			</li>
			<?php endforeach;?>										

			</ul>

		</div>
		
		<div class="pagik"></div>

	</div>
</div>

<div class="box span6">
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

				<?php foreach($data['comments'] as $key => $value): ?>
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
				<td class="center"><?php echo $data['comments'][$key]['Comment']; ?></td>
				<td class="center"><span class="label label-inverse"><?php echo $data['comments'][$key]['Name']; ?></span></td>
				<td><a class="btn btn-mini btn-danger btn-delete-comment" uid="" cmtid="<?php echo $data['comments'][$key]['id']; ?>" href="#"><i class="icon-trash icon-white"></i> Delete</a></td>
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

</div><!--/row-->



<hr>


<?php foreach($data['billing'] as $key => $value): ?>

<div class="row-fluid sortable"><!--/span-->

	<div class="box span6">
	  <div class="box-header well" data-original-title>
	    <h2>Billing Information <?php echo $key + 1;?></h2>
	    <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
      </div>
	  <div class="box-content">
	    <table class="table table-striped table-condensed">
	      <tbody>
	        <tr>
	          <td><strong> Type</strong></td>
	          <td class="center"><span class="blue" style="font-size:15px; font-weight:bold;"><?php echo $data['billing'][$key]['Type'] ; ?></span></td>
	          <td class="center">&nbsp;</td>
            </tr>
	        <tr>
	          <td><strong>Card Number</strong></td>
	          <td class="center"><?php echo "************" . substr($data['billing'][$key]['Number'], -4) ; ?></td>
	          <td class="center">&nbsp;</td>
            </tr>
	        <tr>
	          <td><strong>Expiration Date</strong></td>
	          <td class="center"><?php echo $data['billing'][$key]['Expiration'] ; ?></td>
	          <td class="center">&nbsp;</td>
            </tr>
	        <tr>
	          <td><strong>Cardholder Name</strong></td>
	          <td class="center"><?php echo $data['billing'][$key]['Card_Name'] ; ?></td>
	          <td class="center">&nbsp;</td>
            </tr>
	        <tr>
						<td><strong>First Name</strong></td>
						<td class="center"><?php echo $data['billing'][$key]['Name'] ; ?></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Last Name</strong></td>
						<td class="center"><?php echo $data['billing'][$key]['Name'] ; ?></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
						<td><strong>Email</strong></td>
						<td class="center"><?php echo $data['billing'][$key]['Paypal_Email'] ; ?></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
					  <td><strong>Address 1</strong></td>
					  <td class="center"><?php echo $data['billing'][$key]['Address'] ; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Address 2</strong></td>
					  <td class="center"><?php echo $data['billing'][$key]['Address1'] ; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>City</strong></td>
					  <td class="center"><?php echo $data['billing'][$key]['City'] ; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>State/Province</strong></td>
					  <td class="center"><?php echo $data['billing'][$key]['Province'] ; ?></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Country</strong></td>
					  <td class="center">-</td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Zip/Postal Code</strong></td>
					  <td class="center"><?php echo $data['billing'][$key]['Postal_Code'] ; ?></td>
					  <td class="center">
                      <a class="btn btn-mini" href="https://maps.google.ca/maps?q=<?php echo $data['billing'][$key]['Postal_Code'] ; ?>" target="_blank"><i class="icon-globe icon-black"></i> Maps</a>
                      </td>
				    </tr>
					<tr>
					  <td><strong>Phone</strong></td>
					  <td class="center">-</td>
					  <td class="center">&nbsp;</td>
				    </tr>
          </tbody>
        </table>
	  </div>
  </div>
	

</div><!--/row-->

<?php endforeach; ?>







  <!-- content ends -->
</div><!--/#content.span10-->
	</div><!--/fluid-row-->