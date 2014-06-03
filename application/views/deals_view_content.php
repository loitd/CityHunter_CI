<?php 
  //var_dump($data);
?>
<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/dashboard">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo $this->config->site_url(); ?>/deals">Deals</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">the Deal</a> 
		</li>
	</ul>
</div>
<div class="page-header">
  <h1><strong><?php echo $data['data1'][0]['Description'];?></strong> <small>View Deal</small></h1>
  </div>
<div class="row-fluid sortable">
      
      <div class="box fluid span6">
        <div class="box-header well" data-original-title>
          <h2>Deal Information                </h2>
          <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
        </div>
        <div class="box-content">
          <table class="table table-striped table-condensed">
            <tbody>
              <tr>
                <td width="100"><strong>Description</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><strong><?php echo $data['data1'][0]['Description'];?></strong></td>
              </tr>
              <tr>
                <td><strong>Status</strong></td>
                <td class="center"><span class="label label-success"><?php echo $data['data1'][0]['Status'];?></span>&nbsp;&nbsp;&nbsp;<a class="btn btn-mini btn-danger" href="#"><i class="icon-remove-sign icon-white"></i> Deactivate</a></td>
              </tr>
              <tr>
                <td><strong>Auto Schedule</strong></td>
                <td class="center"><span class="label label-success">ON</span></td>
              </tr>
              <tr>
                <td><strong>Price</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><span class="green" style="font-size:15px; font-weight:bold;">$<?php echo $data['data1'][0]['Dollar_Price'];?></span></td>
              </tr>
              <tr>
                <td><strong>Coins</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><span class="yellow" style="font-size:15px; font-weight:bold;"><?php echo $data['data1'][0]['Coin_Price'];?></span></td>
              </tr>
              <tr>
                <td><strong>Start Date</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><?php echo $data['data1'][0]['Start_Date'];?></td>
              </tr>
              <tr>
                <td><strong>Expiration Date</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><?php echo $data['data1'][0]['End_Date'];?></td>
              </tr>
              <tr>
                <td><strong>Fine Print</strong> <a href="#" class="btn btnx btn-mini btn-warning" data-toggle="popover" data-placement="right" title="UPDATE"><i class="icon-fire icon-white"></i> UPDATE</a></td>
                <td class="center"><p>$99 for an Italian dinner for four with one bottle of Merlot Reserve  Michael Sullberg, Gabbiano chianti, Pinot Grigio Serenissima, or  Terranoble Chardonnay (up to a $38 value; up to a $217.40 total value)</p>
                  <ul>
                    <li>One appetizer per person (up to a $13.95 value each)</li>
                    <li>One entree per person (up to a $23.95 value each)</li>
                    <li>One dessert per person (a $6.95 value each)</li>
                  </ul>
                  <p>The menu includes antipasti such as bruschetta olivenere, or toasted bread with diced olives, roasted red pepper, and herbs, and grilled calamari with  market greens. Entrees include thin-crust pizza with spicy italian  sausage, fettuccine with mushrooms and fresh rosemary, and grilled  salmon in a lemon-leek sauce.</p></td>
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
      <div class="box fluid span6">
        <div class="box-header well" data-original-title>
          <h2>Sales</h2>
          <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a></div>
        </div>
        <div class="box-content">
          <table class="table table-striped bootstrap-datatable datatable">
            <thead>
              <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Action</th>
                <th>Redeem Code</th>
                <th>Username</th>
                <th>Recipient</th>
                <th>Transaction ID</th>
              </tr>
            </thead>
            <tbody>
              
              <?php foreach($data['data2'] as $key=>$value): ?>
                <tr>
                  <td class="center"><?php 
                    $tx = explode(" ", $data['data2'][$key]['DateTime']);
                    echo $tx[0] ;?> </td>
                  <td class="center"><?php $x= explode(".", $tx[1]); echo $x[0] ;?></td>
                  <td class="center"><span class="label label-warning"><?php echo $data['data2'][$key]['Status'] ;?></span></td>
                  <td class="center">-</td>
                  <td class="center"><span class="label label-default"><?php echo $data['data2'][$key]['User_name'] ;?></span></td>
                  <td class="center"><span class="label label-default">-</span></td>
                  <td class="center"><?php echo $data['data2'][$key]['id'] ;?></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
          
        </div>
      </div>
      <!--/row-->
</div>
<div class="row-fluid sortable"><!--/span--></div><!--/row--><!-- content ends -->
</div><!--/#content.span10-->
	</div><!--/fluid-row-->