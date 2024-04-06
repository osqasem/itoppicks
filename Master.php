<?php
require_once 'Classes/DataSourceClass.php';
require_once 'Header.php';

$devices = DataSource::loadDevices();

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 text-center mt-4">
      <h2> Welcome to iTopPicks, your go-to destination for the best smartphone recommendations! </a></h2>
      <?php if ($username) : ?>
        <p class="font-weight-bold text-success">You are logged in as <?php echo $username; ?></p>
      <?php endif; ?>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-3 device-preview">
      <img src="DeviceView.jpg" alt="Device" class="w-100 object-fit-contain  ">
    </div>

    <!-- Content area -->
    <div class="col-lg-9 content">

      <div class="col-lg-9 text-center">
        <h2>Featured Devices</h2>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

          <?php foreach ($devices as $key => $device) : ?>
            <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
              <img class="d-block w-100" src=<?= $device->imageName; ?> alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <a href="Device.php?id=<?= $device->id; ?>">
                  <h5><?php echo $device->model; ?></h5>
                </a>
                <a href="OperatingSystem.php?id=<?= $device->operatingSystem; ?>">
                  <h7><?php echo $device->operatingSystem; ?></h7> Operating System
                </a>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php require_once 'Footer.php';
?>