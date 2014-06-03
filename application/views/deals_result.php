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

<?php foreach($data as $key=>$value): ?>
<tr>
  	<td><?php echo $data[$key]['id'];?></td>
  	<td><?php echo $data[$key]['Description'];?></td>
	<td><?php echo $data[$key]['Name'];?></td>
	<td>$<?php echo $data[$key]['Dollar_Price'];?></td>
	<td><?php echo $data[$key]['Coin_Price'];?></td>
	<td class="center"><?php echo $data[$key]['End_Date'];?></td>
	<td class="center">
		<span class="label label-success"><?php echo $data[$key]['Status'];?></span>
	</td>
	<td class="center">
		<a class="btn btn-small btn-success" href="dealview.html">
			<i class="icon-zoom-in icon-white"></i>  
			View                                            
		</a>
		<a class="btn btn-small btn-info" href="dealedit.html">
			<i class="icon-edit icon-white"></i>  
			Edit                                            
		</a>
		<a class="btn btn-small btn-danger" href="#">
			<i class="icon-remove-sign icon-white"></i> 
			Deactivate
		</a>
	</td>
</tr>
<?php endforeach; ?>

</tbody>
</table> 
