<?php //var_dump($data); ?>
<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Photos</a>
		</li>
	</ul>
</div>

<div class="page-header">
  <h1>Photos <small>Photos List Management</small></h1>
  </div>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2>Photos</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
        
        
        
        
        <div class="box-content">
			<form class="form-horizontal" method="POST" action="">
			  <fieldset>
				<legend>Sort Photos</legend>
				
                
                <div class="control-group">
				  	<label class="control-label" for="date01">Start Date</label> 
                  	<div class="controls">
                  	<input type="text" class="input-xlarge datepicker" id="date01" name="fromdate" value="03/01/2012">
         			</div>
         		</div>    
	         	<div class="control-group">     
	                <label class="control-label" for="date02">End Date</label> 
	                <div class="controls">
	                <input type="text" class="input-xlarge datepicker" id="date02" name="todate" value="03/01/2014">
	         		</div>
	         	</div>
         		<div class="control-group">         
                  	<label class="control-label">Group Photos</label>
                  	<div class="controls">
	        			<p class="btn-group">
		                  	<button class="btn btn-group-loitd btn-monthly pressed">Monthly</button>
						  	<button class="btn btn-group-loitd btn-weekly">Weekly</button>
						  	<button class="btn btn-group-loitd btn-daily">Daily</button>
						</p>
         			</div>
         		</div>

         		<input type="hidden" id="groupby" name="groupby" value="monthly">
         
                
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary" name="submit">Refresh</button>
				  <button type="reset" class="btn">Reset</button>
				</div>
			  </fieldset>
			</form>   

		</div>
        
        
        
        <?php if(count($data) > 1 && !is_null($data)): ?>
		<div class="box-content">
			
		<ul id="itemContainer">	
			<?php foreach($data as $key=>$value): ?>        
			
			<li>
            
	            <legend><?php echo $key;?></legend> 
				<ul class="thumbnails gallery">
					<?php foreach($data[$key] as $keyx=>$value):?>
					<li id="image-1" class="thumbnail">
						<a style="background:url(<?php echo $data[$key][$keyx];?>)" title="Sample Image 1" href="<?php echo $data[$key][$keyx];?>"><img class="grayscale" src="<?php echo $data[$key][$keyx];?>" alt="Sample Image 1"></a>
					</li>
					<?php endforeach; ?>
				</ul>

			</li>
			<?php endforeach; ?>
		</ul>

        <div class="pagik"></div>  
	                      
		</div><!-- end box-content -->
		<?php endif; ?>

	</div><!--/span-->

</div><!--/row-->

		<!-- content ends -->
</div><!--/#content.span10-->
	</div><!--/fluid-row-->