<?php 
  //var_dump($data);
?>
<div>
  <ul class="breadcrumb">
    <li>
      <a href="dashboard">Home</a> <span class="divider">/</span>
    </li>
    <li>
      <a href="dashboard">Dashboard</a>
    </li>
  </ul>
</div>

<div class="sortable row-fluid">
	<a data-rel="tooltip" title="<?php echo $data['totalnewmembers']; ?> new members." class="well span3 top-block" href="#">
		<span class="icon32 icon-red icon-user"></span>
		<div> Members</div>
		<div><?php echo $data['totalmembers']; ?></div>
		<span class="notification"><?php echo $data['totalnewmembers']; ?></span>
	</a>

	<a data-rel="tooltip" title="<?php echo $data['newpromembers']; ?> new pro members." class="well span3 top-block" href="#">
		<span class="icon32 icon-color icon-star-on"></span>
		<div> Restaurants</div>
		<div><?php echo $data['totalrestaurants']; ?></div>
		<span class="notification green"><?php echo $data['newpromembers']; ?></span>
	</a>

	<a data-rel="tooltip" title="$<?php echo $data['totalnewsales']; ?> new sales." class="well span3 top-block" href="#">
		<span class="icon32 icon-color icon-cart"></span>
		<div>Sales</div>
		<div>$<?php echo $data['totalsales']; ?></div>
		<span class="notification red">$<?php echo $data['totalnewsales']; ?></span>
	</a>
	
	<a data-rel="tooltip" title="<?php echo $data['totalnewupdates']; ?> new messages." class="well span3 top-block" href="#">
		<span class="icon32 icon-color icon-alert"></span>
		<div>Updates</div>
		<div><?php echo $data['totalupdates']; ?></div>
		<span class="notification yellow"><?php echo $data['totalnewupdates']; ?></span>
	</a>
</div>

<hr>

<?php //var_dump($data['restaurantUpdates']);?>

<div class="row-fluid sortable">
  <div class="box span8">
    <div class="box-header well" data-original-title>
      <h2><i class="icon-fire"></i>Updates</h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
    </div>
    <div class="box-content">
      <table class="table table-striped bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>#</th>
            <th>Date</th>
            <th>Time</th>
            <th> Restaurant</th>
            <th>Update</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        
        <?php if(count($data['restaurantUpdates']) > 0 && $data['restaurantUpdates'] != ''): ?>
          <?php foreach($data['restaurantUpdates'] as $key => $value): ?>
            <tr>
              <td><?php echo $data['restaurantUpdates'][$key]['id'];?></td>
              <td><?php $x = explode(" ", $data['restaurantUpdates'][$key]['created_time']); $y = str_replace("-", ".", $x[0]) ; echo $y;?></td>
              <td><?php $z = $x[1]; $z = explode(":", $z); echo $z[0] . ":" . $z[1];?></td>
              <td><?php $dn = $data['restaurantUpdates'][$key]['Name']; $dn = (strlen($dn) <= 18 ? $dn : substr($dn, 0, 16) . " ..."); echo $dn;?></td>
              <td class="center"><i class="icon-glass"></i> <?php echo $data['restaurantUpdates'][$key]['action'];?></td>
              <td class="center"><span class="label label-success"><?php echo $data['restaurantUpdates'][$key]['status'];?></span></td>
              <td class="center">
                <a class="btn btn-small btn-success" href="<?php echo $this->config->site_url(); ?>/restaurants/viewrestaurant?rid=<?php echo $data['restaurantUpdates'][$key]['restaurant_id'];?>"> <i class="icon-zoom-in icon-white"></i> View </a> <a class="btn btn-small btn-info" href="<?php echo $this->config->site_url(); ?>/restaurants/editrestaurant?rid=<?php echo $data['restaurantUpdates'][$key]['restaurant_id'];?>"> <i class="icon-edit icon-white"></i> Edit </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>
  <div class="box span4">
    <div class="box-header well">
      <h2><i class="icon-signal"></i> Stats</h2>
      <div class="box-icon"> <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
    </div>
    <div class="box-content">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#daily">Daily</a></li>
        <li><a href="#weekly">Weekly</a></li>
        <li><a href="#monthly">Monthly</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="daily">
         <ul class="dashboard-list">
  	      <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['totalnewmembers'], $data['yesterdaynewmembers']); ?>"></i> <span class="red"><?php echo $data['totalnewmembers']; ?></span> New Registrations </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['todaynewdeals'], $data['yesterdaynewdeals']); ?>"></i> <span class="blue"><?php echo $data['todaynewdeals']; ?></span> New Deals </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['todaynewcheckins'], $data['yesterdaynewcheckins']); ?>"></i> <span class="green"><?php echo $data['todaynewcheckins']; ?></span> New Check-Ins </a></li>
  	      <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['todaynewphotos'], $data['yesterdaynewphotos']); ?>"></i> <span class="yellow"><?php echo $data['todaynewphotos']; ?></span> New Photos </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['todaynewcomments'], $data['yesterdaynewcomments']); ?>"></i> <span class="green"><?php echo $data['todaynewcomments']; ?></span> New Comments </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['todaynewsales'], $data['yesterdaynewsales']); ?>"></i> <span class="red"><?php echo $data['todaynewsales']; ?></span> New Sales </a></li>
        </ul>
        </div>
        <div class="tab-pane" id="weekly">
          <ul class="dashboard-list">
	      <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thisweeknewmembers'], $data['lastweeknewmembers']); ?>"></i> <span class="red"><?php echo $data['thisweeknewmembers']; ?></span> New Registrations </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thisweeknewdeals'], $data['lastweeknewdeals']); ?>"></i> <span class="blue"><?php echo $data['thisweeknewdeals']; ?></span> New Deals </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thisweeknewcheckins'], $data['lastweeknewcheckins']); ?>"></i> <span class="green"><?php echo $data['thisweeknewcheckins']; ?></span> New Check-Ins </a></li>
	      <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thisweeknewphotos'], $data['lastweeknewphotos']); ?>"></i> <span class="yellow"><?php echo $data['thisweeknewphotos']; ?></span> New Photos </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thisweeknewcomments'], $data['lastweeknewcomments']); ?>"></i> <span class="green"><?php echo $data['thisweeknewcomments']; ?></span> New Comments </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thisweeknewsales'], $data['lastweeknewsales']); ?>"></i> <span class="red"><?php echo $data['thisweeknewsales']; ?></span> New Sales </a></li>
        </ul>
        </div>
        <div class="tab-pane" id="monthly">
          <ul class="dashboard-list">
	      <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thismonthnewmembers'], $data['lastmonthnewmembers']); ?>"></i> <span class="red"><?php echo $data['thismonthnewmembers']; ?></span> New Registrations </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thismonthnewdeals'], $data['lastmonthnewdeals']); ?>"></i> <span class="blue"><?php echo $data['thismonthnewdeals']; ?></span> New Deals </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thismonthnewcheckins'], $data['lastmonthnewcheckins']); ?>"></i> <span class="green"><?php echo $data['thismonthnewcheckins']; ?></span> New Check-Ins </a></li>
	      <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thismonthnewphotos'], $data['lastmonthnewphotos']); ?>"></i> <span class="yellow"><?php echo $data['thismonthnewphotos']; ?></span> New Photos </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thismonthnewcomments'], $data['lastmonthnewcomments']); ?>"></i> <span class="green"><?php echo $data['thismonthnewcomments']; ?></span> New Comments </a></li>
          <li> <a href="#"> <i class="<?php echo getUpOrDownArrow($data['thismonthnewsales'], $data['lastmonthnewsales']); ?>"></i> <span class="red"><?php echo $data['thismonthnewsales']; ?></span> New Sales </a></li>
        </ul>
        </div>
      </div>
    </div>
  </div><!--/span--><!--/span--><!--/span-->
  </div>
 
 
 <hr>

 <?php // var_dump($data['alertNotifications']); ?>

 <div class="row-fluid sortable">
 <div class="box span4">
   <div class="box-header well" data-original-title>
     <h2><i class="icon-bullhorn"></i> Alert Notification</h2>
     <div class="box-icon"> <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a> <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> </div>
   </div>
   <div class="box-content">
   <form class="form-horizontal">
				<fieldset>
   <div class="control-group">
					<label class="control-label" for="selectError">Message</label>
					<div class="controls">
					  <textarea name="textarea2" class="autogrow"><?php echo $data['alertNotifications'][0]['message'];?></textarea>
					</div>
				  </div>
                  <div class="control-group">
					<label class="control-label" for="notificationbtn">Broadcast</label>
					<div class="controls">
				    <input <?php echo ($data['alertNotifications'][0]['status'] == "t") ? "checked" : "";?> data-no-uniform="true" type="checkbox" class="liphone-toggle" id="notificationbtn" status="<?php echo $data['alertNotifications'][0]['status'];?>">
					</div>
				  </div>
				</fieldset>
			  </form>
   </div>
 </div>
</div>
</div>
<!--/row--><!--/row-->
	  
<!-- content ends -->
</div><!--/#content.span10-->
	</div><!--/fluid-row-->