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
  <h1><?php echo $data['basic']['Name']; ?> <small>Edit Restaurant Information & Activity</small></h1>
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
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
			  <fieldset>
			<table class="table table-striped table-condensed">
				  <tbody>
					<tr>
						<td><strong>Name</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
						<td class="control-group error">
						<input class="input-small error" id="inputName" name="rname" type="text" value="<?php echo $data['basic']['Name']; ?>"></td>
						<td class="center">&nbsp;</td>
					</tr>
					<tr>
					  <td><strong>Second Name</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
					  <td class="controls"><input class="input-medium" type="text" value="unused"></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Business Type</strong></td>
					  <td class="controls"><select class="input-medium" id="selectBusiness" data-rel="chosen">
						<option selected>unused</option>
					  </select></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Cuisine Type</strong></td>
					  <td class="controls"><select class="input-medium" id="selectCusine" name="rcusine" data-rel="chosen">
<option <?php echo ($data['basic']['Cousine_Type'] == 'Afghan Restaurant') ? 'selected' : '';  ?> >Afghan Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'African Restaurant') ? 'selected' : '';  ?> >African Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'American Restaurant') ? 'selected' : '';  ?> >American Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Arepa Restaurant') ? 'selected' : '';  ?> >Arepa Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Argentinian Restaurant') ? 'selected' : '';  ?> >Argentinian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Asian Restaurant') ? 'selected' : '';  ?> >Asian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Australian Restaurant') ? 'selected' : '';  ?> >Australian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'BBQ Joint') ? 'selected' : '';  ?> >BBQ Joint</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Bagel Shop') ? 'selected' : '';  ?> >Bagel Shop</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Bakery') ? 'selected' : '';  ?> >Bakery</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Brazilian Restaurant') ? 'selected' : '';  ?> >Brazilian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Breakfast Spot') ? 'selected' : '';  ?> >Breakfast Spot</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Burger Joint') ? 'selected' : '';  ?> >Burger Joint</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Burrito Place') ? 'selected' : '';  ?> >Burrito Place</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Café') ? 'selected' : '';  ?> >Café</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Cajun / Creole Restaurant') ? 'selected' : '';  ?> >Cajun / Creole Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Caribbean Restaurant') ? 'selected' : '';  ?> >Caribbean Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Chinese Restaurant') ? 'selected' : '';  ?> >Chinese Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Coffee Shop') ? 'selected' : '';  ?> >Coffee Shop</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Cuban Restaurant') ? 'selected' : '';  ?> >Cuban Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Cupcake Shop') ? 'selected' : '';  ?> >Cupcake Shop</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Delis / Bodegas') ? 'selected' : '';  ?> >Delis / Bodegas</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Dessert Shop') ? 'selected' : '';  ?> >Dessert Shop</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Dim Sum Restaurant') ? 'selected' : '';  ?> >Dim Sum Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Diner') ? 'selected' : '';  ?> >Diner</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Distillery') ? 'selected' : '';  ?> >Distillery</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Donut Shop') ? 'selected' : '';  ?> >Donut Shop</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Dumpling Restaurant') ? 'selected' : '';  ?> >Dumpling Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Eastern European Restaurant') ? 'selected' : '';  ?> >Eastern European Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Ethiopian Restaurant') ? 'selected' : '';  ?> >Ethiopian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Falafel Restaurant') ? 'selected' : '';  ?> >Falafel Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Fast Food Restaurant') ? 'selected' : '';  ?> >Fast Food Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Filipino Restaurant') ? 'selected' : '';  ?> >Filipino Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Fish & Chips Shop') ? 'selected' : '';  ?> >Fish & Chips Shop</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Food Truck') ? 'selected' : '';  ?> >Food Truck</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'French Restaurant') ? 'selected' : '';  ?> >French Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Fried Chicken Joint') ? 'selected' : '';  ?> >Fried Chicken Joint</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Gastropub') ? 'selected' : '';  ?> >Gastropub</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'German Restaurant') ? 'selected' : '';  ?> >German Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Gluten-free Restaurant') ? 'selected' : '';  ?> >Gluten-free Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Greek Restaurant') ? 'selected' : '';  ?> >Greek Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Hot Dog Joint') ? 'selected' : '';  ?> >Hot Dog Joint</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Ice Cream Shop') ? 'selected' : '';  ?> >Ice Cream Shop</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Indian Restaurant') ? 'selected' : '';  ?> >Indian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Indonesian Restaurant') ? 'selected' : '';  ?> >Indonesian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Italian Restaurant') ? 'selected' : '';  ?> >Italian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Japanese Restaurant') ? 'selected' : '';  ?> >Japanese Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Juice Bar') ? 'selected' : '';  ?> >Juice Bar</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Korean Restaurant') ? 'selected' : '';  ?> >Korean Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Latin American Restaurant') ? 'selected' : '';  ?> >Latin American Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Mac & Cheese Joint') ? 'selected' : '';  ?> >Mac & Cheese Joint</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Malaysian Restaurant') ? 'selected' : '';  ?> >Malaysian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Mediterranean Restaurant') ? 'selected' : '';  ?> >Mediterranean Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Mexican Restaurant') ? 'selected' : '';  ?> >Mexican Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Middle Eastern Restaurant') ? 'selected' : '';  ?> >Middle Eastern Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Molecular Gastronomy Restaurant') ? 'selected' : '';  ?> >Molecular Gastronomy Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Mongolian Restaurant') ? 'selected' : '';  ?> >Mongolian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Moroccan Restaurant') ? 'selected' : '';  ?> >Moroccan Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'New American Restaurant') ? 'selected' : '';  ?> >New American Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Peruvian Restaurant') ? 'selected' : '';  ?> >Peruvian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Pizza Place') ? 'selected' : '';  ?> >Pizza Place</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Portuguese Restaurant') ? 'selected' : '';  ?> >Portuguese Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Ramen / Noodle House') ? 'selected' : '';  ?> >Ramen / Noodle House</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Restaurant') ? 'selected' : '';  ?> >Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Salad Place') ? 'selected' : '';  ?> >Salad Place</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Sandwich Place') ? 'selected' : '';  ?> >Sandwich Place</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Scandinavian Restaurant') ? 'selected' : '';  ?> >Scandinavian Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Seafood Restaurant') ? 'selected' : '';  ?> >Seafood Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Snack Place') ? 'selected' : '';  ?> >Snack Place</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Soup Place') ? 'selected' : '';  ?> >Soup Place</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'South American Restaurant') ? 'selected' : '';  ?> >South American Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Southern / Soul Food Restaurant') ? 'selected' : '';  ?> >Southern / Soul Food Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Spanish Restaurant') ? 'selected' : '';  ?> >Spanish Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Paella Restaurant') ? 'selected' : '';  ?> >Paella Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Steakhouse') ? 'selected' : '';  ?> >Steakhouse</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Sushi Restaurant') ? 'selected' : '';  ?> >Sushi Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Swiss Restaurant') ? 'selected' : '';  ?> >Swiss Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Taco Place') ? 'selected' : '';  ?> >Taco Place</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Tapas Restaurant') ? 'selected' : '';  ?> >Tapas Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Tea Room') ? 'selected' : '';  ?> >Tea Room</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Thai Restaurant') ? 'selected' : '';  ?> >Thai Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Turkish Restaurant') ? 'selected' : '';  ?> >Turkish Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Vegetarian / Vegan Restaurant') ? 'selected' : '';  ?> >Vegetarian / Vegan Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Vietnamese Restaurant') ? 'selected' : '';  ?> >Vietnamese Restaurant</option>
<option <?php echo ($data['basic']['Cousine_Type'] == 'Winery') ? 'selected' : '';  ?> >Winery</option>


					  </select></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Unique ID</strong></td>
					   <td class="controls"><input class="input-mini disabled" id="disabledInput" type="text" placeholder="<?php echo $data['basic']['id']; ?>" disabled=""></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Main Photo</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
					  <td class="center"><a href="#">
					  <img class="thumbdisp" width="256" height="256" src="<?php echo $data['basic']['BG_Picture']; ?>" alt="">
					  <input type="hidden" name="rphoto" value="<?php echo $data['basic']['BG_Picture']; ?>">
					  </a><input type="file" name="fileu"></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Hours</strong></td>
					  <td class="center"><textarea name="rbhours" class="autogrow"><?php echo $data['basic']['Business_Hours']; ?></textarea></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Public Address</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
					  <td class="center"><textarea name="raddr" class="autogrow"><?php echo $data['basic']['Address1']; ?></textarea></td>
					  <td class="center"> <a class="btn btn-mini" href="https://maps.google.ca/maps?ll=43.653226,-79.383184" target="_blank"><i class="icon-globe icon-black"></i> Maps</a></td>
				    </tr>
					<tr>
					  <td><strong>Latitude</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
					  <td class="center"><input class="input-small error" id="inputLat" type="text" value="43.653226"></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Longitude</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
					  <td class="center"><input class="input-small error" id="inputLong" type="text" value="-79.383184"></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Public Phone</strong></td>
					  <td class="center"><input class="input-medium" name="rphone" type="text" value="<?php echo $data['basic']['Phone']; ?>"></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Public Website</strong></td>
					  <td class="center"><input class="input-large" name="rweb" type="text" value="<?php echo $data['basic']['Web_address']; ?>"></td>
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
					  <td><strong>Restaurant Description</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
					   <td class="center"><textarea class="autogrow">unused</textarea></td>
					  <td class="center">&nbsp;</td>
				    </tr>
					<tr>
					  <td><strong>Price Range</strong></td>
					  <td class="controls"><select class="input-medium" id="selectPrice" data-rel="chosen">
						<option selected>unused</option>
					  </select></td>
					  <td class="center">&nbsp;</td>
				    </tr>                                   
				  </tbody>
		  </table>  
          
				  <div class="form-actions">
					<button type="submit" name="basicinfor" class="btn btn-primary">Save Changes</button>
					<button class="btn">Cancel</button>
				  </div>
			  </fieldset>
			</form>   
			 
	  </div>
  </div>

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
                    <form class="form-horizontal">
						  <fieldset>
						<table class="table table-striped table-condensed">
							  <tbody>
								<tr>
									<td><strong>First Name</strong></td>
									<td class="controls"><input class="input-medium" type="text" value="-"></td>
									<td class="center">&nbsp;</td>
								</tr>
								<tr>
									<td><strong>Last Name</strong></td>
									<td class="controls"><input class="input-medium" type="text" value="-"></td>
									<td class="center">&nbsp;</td>
								</tr>
								<tr>
									<td><strong>Email</strong></td>
									<td class="control-group warning"><input class="input-large warning" id="inputWarning" type="text" value="-@yahooo.com"></td>
									<td class="center">&nbsp;</td>
								</tr>
								<tr>
								  <td><strong>Phone</strong></td>
									<td class="controls"><input class="input-medium" type="text" value="-"></td>
								  <td class="center">&nbsp;</td>
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
               <div class="box fluid">
                 <div class="box-header well" data-original-title>
                   <h2>Contact Information</h2>
                   <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
                 </div>
                 <div class="box-content">
                   <form class="form-horizontal">
                     <fieldset>
                       <table class="table table-striped table-condensed">
                         <tbody>
                           <tr>
                             <td><strong>Unique ID</strong></td>
                             <td class="controls"><input class="input-mini disabled" id="disabledInput2" type="text" placeholder="-" disabled=""></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>First Name</strong></td>
                             <td class="controls"><input class="input-medium" type="text" value="-"></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>Last Name</strong></td>
                             <td class="controls"><input class="input-medium" type="text" value="-"></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>Position</strong></td>
                             <td class="controls"><input class="input-large" type="text" value="-"></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>Email</strong></td>
                             <td class="control-group warning"><input class="input-large warning" id="inputWarning8" type="text" value="-@yahooo.com"></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>Password</strong></td>
                             <td class="center">-</td>
                             <td class="center"><a class="btn btn-mini btn-danger" href="#"><i class="icon-refresh icon-white"></i> Reset</a></td>
                           </tr>
                           <tr>
                             <td><strong>Address 1</strong></td>
                             <td class="controls"><input class="input-xlarge" type="text" value="-"></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>Address 2</strong></td>
                             <td class="controls"><input class="input-xlarge" type="text" value="#-"></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>City</strong></td>
                             <td class="controls"><input class="input-large" type="text" value="-"></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>State/Province</strong></td>
                             <td class="controls"><input class="input-large" type="text" class="span6 typeahead" id="typeahead" value="-" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming","Quebec","Ontario","Alberta","Manitoba","Saskatchewan","Yukon","Nunavut","British Columbia","Nova Scotia","Wyoming","New Brunswick","New Foundland and Labrador","Prince Edward island","Northwest Territories"]'>
                               </input></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>Country</strong></td>
                             <td class="controls"><input class="input-small" type="text" class="span6 typeahead" id="typeahead" value="-" data-provide="typeahead" data-items="4" data-source='["United States","Canada"]'>
                               </input></td>
                             <td class="center">&nbsp;</td>
                           </tr>
                           <tr>
                             <td><strong>Zip/Postal Code</strong></td>
                             <td class="controls"><input class="input-mini" type="text" value="-"></td>
                             <td class="center"><a class="btn btn-mini" href="https://maps.google.ca/maps?q=h3k+1g6" target="_blank"><i class="icon-globe icon-black"></i> Maps</a></td>
                           </tr>
                           <tr>
                             <td><strong>Phone</strong></td>
                             <td class="controls"><input class="input-medium" type="text" value="-"></td>
                             <td class="center">&nbsp;</td>
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
				          <td class="center"><span class="green" style="font-size:15px; font-weight:bold;">$-</span></td>
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
				          <td class="center"><a class="btn btn-mini btn-success" href="staffview.html"> <i class="icon-zoom-in icon-white"></i> View </a>&nbsp;<a href="#" class="btn btny btn-mini btn-info" data-toggle="popover" data-placement="left" title="Re-assign"><i class="icon-edit icon-white"></i> Re-assign</a></td>
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
				    <table class="table table-striped table-condensed">
                    <thead>
							  <tr>
							    <th>Time</th>
							    <th>Event</th>
						      </tr>
					  </thead>   
				      <tbody>
				        
				        <tr>
				          <td class="center">10m</td>
				          <td><span class="label label-default">-</span> likes this reastaurant</td>
			            </tr>
				        
			          </tbody>
			        </table>
                    <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
					  </ul>
					</div>
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
				        <textarea class="cleditor" id="textarea2" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.</textarea>
			          </div>
				      <div class="tab-pane" id="info">
				        <h3>Lorem Ipsum <small>Dolor Sit amet</small></h3>
				        <br>
				        <p>In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
				        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros.</p>
			          </div>
			        </div>
			      </div>
			    </div>
              
              
   			  </div><!--/row-->
	    </div>
    
    <hr>

    <?php foreach($data['deals'] as $key=>$val): ?>
    
    <?php //var_dump($data['deals'][$key]); ?>

    <div class="row-fluid sortable">
      <div class="box fluid span6">
        <div class="box-header well" data-original-title>
          <h2>Deal <?php echo $key+1; ?></h2>
          <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
        </div>
        <div class="box-content">
 	<form class="form-horizontal" action="" method="POST">
		<fieldset>
          <table class="table table-striped table-condensed">
           <tbody>
            <tr>
            	<input type="hidden" name="rdid<?php echo $key;?>" value="<?php echo $data['deals'][$key]['id'];?>">
              	<td width="100"><strong> Description</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
              	<td class="center"><textarea name="rddesc<?php echo $key;?>" class="autogrow"><?php echo $data['deals'][$key]['Description'];?></textarea></td>
            </tr>
              <tr>
                <td><strong>Status</strong></td>
                <td class="center"><span class="label label-success"><?php echo $data['deals'][$key]['Status'];?></span>&nbsp;&nbsp;&nbsp;<a class="btn btn-mini btn-danger" href="#"><i class="icon-remove-sign icon-white"></i> Deactivate</a></td>
              </tr>
              <tr>
                <td><strong>Auto Schedule</strong></td>
                
                <?php if( strtoupper($data['deals'][$key]['Status']) == 'ACTIVE'): ?>
	            	<td class="center"><input data-no-uniform="true" type="checkbox" class="iphone-toggle"></td>
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
                <td class="control-group success"><input name="rdprice<?php echo $key;?>" class="input-small warning" id="inputWarning" type="text" value="<?php echo $data['deals'][$key]['Dollar_Price'];?>"></td>
              </tr>
              <tr>
                <td><strong>Coins</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
               <td class="control-group warning"><input name="rdcoin<?php echo $key;?>" class="input-small warning" id="inputWarning" type="text" value="<?php echo $data['deals'][$key]['Coin_Price'];?>"></td>
                </tr>
              <tr>
                <td><strong>Start Date</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><input type="text" name="rdstart<?php echo $key;?>" class="input-small datepicker" id="date01" value="<?php echo $data['deals'][$key]['Start_Date'];?>"></td>
                </tr>
              <tr>
                <td><strong>Expiration Date</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><input type="text" name="rdend<?php echo $key;?>" class="input-small datepicker" id="date02" value="<?php echo $data['deals'][$key]['End_Date'];?>"></td>
                </tr>
              <tr>
                <td><strong>Fine Print</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><textarea class="cleditor" id="textarea2" rows="15"><p>$99 for an Italian dinner for four with one bottle of Merlot Reserve  Michael Sullberg, Gabbiano chianti, Pinot Grigio Serenissima, or  Terranoble Chardonnay (up to a $38 value; up to a $217.40 total value)</p>
                  <ul>
                    <li>One appetizer per person (up to a $13.95 value each)</li>
                    <li>One entree per person (up to a $23.95 value each)</li>
                    <li>One dessert per person (a $6.95 value each)</li>
                    </ul>
                  <p>The menu includes antipasti such as bruschetta olivenere, or toasted bread with  diced olives, roasted red pepper, and herbs, and grilled calamari with  market greens. Entrees include thin-crust pizza with spicy italian  sausage, fettuccine with mushrooms and fresh rosemary, and grilled  salmon in a lemon-leek sauce.</p></textarea></td>
                </tr>
              <tr>
                <td><strong>Likes</strong></td>
                <td class="center">-</td>
                </tr>
              <tr><!-- deal purchased -->
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
          	<div class="form-actions">
				<button type="submit" name="rd<?php echo $key;?>" class="btn btn-primary">Save Changes</button>
				<button class="btn btn-danger">Archive</button>
                <button class="btn">Cancel</button>
		    </div>
		</fieldset>
		</form>  
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
              <?php foreach($data['deals'] as $key=>$val): ?>
	          	<tr>
		            <td class="center"><?php echo $data['deals'][$key]['Start_Date'];?></td>
		            <td class="center"><?php echo $data['deals'][$key]['End_Date'];?></td>
		            <td class="center"><?php echo $data['deals'][$key]['Description'];?></td>
		            <td style="text-align:right;"><span class="green">$<?php echo $data['deals'][$key]['Dollar_Price'];?></span></td>
		            <td style="text-align:right;"><span class="yellow"><?php echo $data['deals'][$key]['Coin_Price'];?></span></td>
		            <td><a class="btn btn-info btn-mini" href="<?php echo $this->config->site_url(); ?>/deals/viewdeal?id=<?php echo $data['deals'][$key]['id'];?>"><i class="icon-tag icon-white"></i> View</a></td>
		            <td class="center">-</td>
		            <td class="center">-</td>
		            <td class="center">-</td>
		            <td class="center">-</td>
	          	</tr>
          	<?php endforeach; ?>
              
            </tbody>
          </table>
          
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
            		<?php //var_dump($data['sales'][$key]); ?>
              	<tr>
	                <td class="center"><?php $x= explode(" ", $data['sales'][$key]['DateTime']); echo $x[0]; ?> </td>
	                <td class="center"><?php echo $x[1]; ?></td>
	                <td class="center"><span class="label label-warning"><?php echo $data['sales'][$key]['Status'];?></span></td>
	                <td>
	                	<a class="btn btn-info btn-mini" href="<?php echo $this->config->site_url(); ?>/deals/viewdeal?id=<?php echo $data['sales'][$key]['Deals_Detail_ID'];?>">
	                	<i class="icon-tag icon-white"></i> View</a>
	                </td>
	                <td class="center"><?php echo $data['sales'][$key]['Redeem_Code'];?></td>
	                <td class="center"><span class="label label-default"><?php echo $data['sales'][$key]['User_name'];?></span></td>
	                <td class="center"><span class="label label-default">-</span></td>
	                <td style="text-align:right;"><span class="green"><?php echo $data['sales'][$key]['Dollar_Price'];?></span></td>
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

<div class="row-fluid span6">
  <div class="box fluid">
    <div class="box-header well" data-original-title>
      <h2>Comments</h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-condensed">
        <thead>
          <tr>
            <th>Time</th>
            <th>Comment</th>
            <th>Relation</th>
            <th width="70">Manage</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td class="center">10m</td>
            <td class="center">I think this is great!</td>
            <td class="center"><span class="label label-inverse">Pizza Hut</span></td>
            <td><a class="btn btn-mini btn-danger" href="#"><i class="icon-trash icon-white"></i> Delete</a></td>
          </tr>
          
        </tbody>
      </table>
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

</div>
			
            
             <hr>
            
            
<?php foreach($data['signatures'] as $key=>$val): ?>
	<?php //var_dump($data['signatures'][$key]) ;?>

    <div class="row-fluid sortable">
        <div class="box fluid span6">
			<div class="box-header well" data-original-title>
				<h2>Signature Dish 1</h2>
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
							<input type="hidden" name="rsid<?php echo $key;?>" value="<?php echo $data['signatures'][$key]['id'];?>">
							<td><strong>Name</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
							<td class="controls">
								<input class="input-large" name="rsname<?php echo $key;?>" type="text" value="<?php echo $data['signatures'][$key]['Menu_name'] ;?>">
							</td>
						</tr>
						<tr>
						  <td><strong>Status</strong></td>
						  <td class="center"><span class="label label-success">Active</span>&nbsp;&nbsp;&nbsp;<a class="btn btn-mini btn-danger" href="#"><i class="icon-remove-sign icon-white"></i> Deactivate</a></td>
					    </tr>
						<!--<tr>
						  <td><strong> Photo</strong></td>
						  <td class="center"><a href="#"><img class="thumbdisp" src="img/gallery/thumbs/1.jpg" alt=""></a><input type="file"></td>
					    </tr>-->
						<tr>
						  <td><strong>Price</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
						  <td class="control-group success">
						  <input class="input-small warning" name="rsprice<?php echo $key;?>" id="inputWarning3" type="text" value="<?php echo $data['signatures'][$key]['Menu_prize'] ;?>"></td>
					    </tr>
						<tr>
						  <td><strong>Description</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
						  <td class="center"><textarea name="rsdesc<?php echo $key;?>" class="autogrow"><?php echo $data['signatures'][$key]['Menu_description'] ;?></textarea></td>
					    </tr>
						<tr>
						  <td><strong>Likes</strong></td>
						  <td class="center"><?php echo $data['signatures'][$key]['Menu_Like'] ;?></td>
					    </tr>                                   
					  </tbody>
			  </table>  
                      
              <div class="form-actions">
                <button type="submit" name="rs<?php echo $key;?>" class="btn btn-primary">Save Changes</button>
                <button class="btn">Cancel</button>
              </div>
            </fieldset>
          </form>
						 
		  </div>
        </div>
        </div>
<?php endforeach; ?>
        
    

            

    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->