<?php
    require_once 'Classes/DataSourceClass.php';
    $id = (int)$_GET['id'];
    $device = DataSource::loadDeviceById($id);
    $userReviews = DataSource::loadReviewsByDeviceId($id);
    $externalReviews = DataSource::loadExternalReviewsByDeviceId($id);
    $retailers = DataSource::loadTopRetailersByDeviceId($id);


    require_once 'Header.php' ;
?>
	
	<div class="container-fluid">
    <div class="row">
        <!-- Left section for device view -->
		<div class="col-lg-3">
          	<a href="Device.php?id=1">
            	<img src="<?php echo $device->mainImg; ?>" class="w-100"/>
        	</a>
            <div>
                <h5><?php echo $device->model; ?></h5>
                
            </div>
            <a href="<?php echo $device->previewLink; ?>" target="_blank" class="btn btn-primary mt-2">Device View</a>
            <div class="mt-3">
                <h5> Top Retailers: </h5>
                <div class="mt-2">
                    <?php foreach($retailers as $key=>$value): ?>
                        <div class="alert alert-warning" role="alert">
                        <h6><?php echo $value->getSiteName(); ?></h6>
                        <h6><?php echo $value->getModel(); ?></h6>
                        <h6><?php echo $value->getPrice(); ?></h6>
                        <a class="button" href="<?php echo $value->getSiteUrl(); ?>" target="_blank">Buy now</a>
                        </div>
                    <?php endforeach; ?>  
                </div> 
            </div>

		</div>
        
        <div class="col-lg-6">
            <table class="table table-bordered">
            <tr>
                        <th>Technical Information</th>
                    </tr>
                    <tr>
                        <td>Colour</td>
                        <td><?php echo $device->colour; ?></td>
                    </tr>
                    <tr>
                        <td>Storage</td>
                        <td><?php echo $device->storage; ?></td>
                    </tr>
                    <tr>
                        <td>Memory</td>
                        <td><?php echo $device->memory; ?></td>
                    </tr>
                    <tr>
                        <td>CPU Cores</td>
                        <td><?php echo $device->cpuCores; ?></td>
                    </tr>
                    <tr>
                        <td>Camera</td>
                        <td><?php echo $device->camera; ?></td>
                    </tr>
                    <tr>
                        <td>Battery</td>
                        <td><?php echo $device->battery; ?></td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td><?php echo $device->weight; ?></td>
                    </tr>
                    <tr>
                        <td>Dimensions</td>
                        <td><?php echo $device->dimensions; ?></td>
                    </tr>
                    <!-- Add more rows for other technical information -->

                    
            </table>
            <!-- Option to select device as favorite and add review -->
            <button class="btn btn-primary" onclick="location.href='addFavorite.php?model=<?= $device->model  ?>'"><i class="fa fa-heart" style="font-size:24px"></i>   Add to Favorites</button>

            <div class="mt-5">
            <h4>User Reviews</h4>
            <h6>All user reviews will be shown below<h6>
                <?php foreach($userReviews as $key=>$value): ?>
                    <div class="mt-2">
                        <div class="alert alert-primary" role="alert">

                            <b> <?php echo $value->getUser()->username; ?></b><br />
                            <?php echo $value->getRating(); ?>/ 10<br />
                            <?php echo $value->getReviewText(); ?>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
            
            <form class="my-5" action="AddDeviceReview.php" method="post">
                <h3 >Add your review</h3>
                <input type="hidden"  name="id" value="<?php echo $device->id; ?>" />
                <div class="form-group">
                    <label>Select ratting</label>
                    <select class="form-control" name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea name="comment" class="form-control" rows="3"></textarea>
                </div>
                <button class="btn btn-secondary" type="submit">Save</button>
            </form>
        </div>
        <!-- Right section (empty for now) -->        <!-- Middle section for technical information table -->
        <div class="col-lg-3">
                
        
            <!-- Smaller table for device information -->
            <table class="table table-bordered">
                <tr>
                    <td>Manufacturer:</td>
                    <td>Apple</td>
                </tr>
                <tr>
                    <td>OS:</td>
                    <td>iOS</td>
                </tr>
                <tr>
                    <td>Release Date</td>
                    <td><?php echo $device->releaseDate; ?></td>
                </tr>
                <!-- Add more rows for other device information -->
            </table>
            <!-- Labels for user reviews, iTopPicks review, and score -->
            <h5> External Reviews: </h5>
            <div class="mt-2">
                <?php foreach($externalReviews as $key=>$value): ?>
                    <div class="alert alert-warning" role="alert">
                        <b> <?php echo $value->getSiteName(); ?></b><br />
                        <h6><?php echo $value->getmodel(); ?></h6>
                        <a href="<?php echo $value->getSiteUrl(); ?>" target="_blank">url</a>
                    </div>
                <?php endforeach; ?>
            </div>
            
            
            <h5>iTopPicks Review</h5>
            <textarea readonly>The iPhone 15 Pro Max is a highly anticipated smartphone from Apple, offering top-tier performance, a stunning OLED display, and a sophisticated camera system. It comes with upgraded features like a 48MP main camera and a USB 2.0 Type-C port.

The iPhone 14 Plus stands out for its extraordinary battery life, lightweight design, pro-level camera, and video features. It also offers groundbreaking safety capabilities like Emergency SOS via satellite, making it a great option for those seeking a new iPhone.

The iPhone 11 Pro Max features Apple's three-camera system, a 6.5-inch Super Retina XDR display, and the A12 Bionic chip. While it didn't receive a major cosmetic upgrade, it brought significant performance enhancements to the iPhone 11 lineup, including a bigger battery for all-day use.</textarea>
            <h5>iTopPicks Score</h5>
            <textarea readonly>iPhone 15 Pro Max --> 9.5/10
                               iPhone 14 Plus --> 8.5/10
                               iPhone 11 Pro Max --> 9/10
            </textarea>
            
        
		</div>
    </div>
</div>

<?php require_once 'Footer.php' ;?>

