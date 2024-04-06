<?php
require_once 'Classes/DataSourceClass.php';
$devices = DataSource::loadDevices();
 require_once 'Header.php' ;
  // Show all devices
   	?>

	<h1> Select a device to view </h1>
	<div class="row p-2">
        <?php foreach($devices as $device): ?>
		<div class="col-4">
          	<a href="Device.php?id=<?= $device->id  ?>">
            	<img src=<?= $device->mainImg; ?> class="w-100"/>
        	</a>
			
			<div class="text-center">
			<h5><?php echo $device->model; ?></h5>
		</div>

		</div>
        <?php endforeach; ?>
	</div>

   	<?php require_once 'Footer.php' ;
	
   	?>

