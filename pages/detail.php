<?php include "header.php"?>
<section class="py-5 bg-secondary detail-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="assets/images/<?php echo $singleProduct['image'];?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h2><?php echo $singleProduct['name'];?></h2>
                        <hr>
                        <p><?php echo $singleProduct['fullDescription'];?></p>
                        <hr>
                        <h4><?php echo $singleProduct['price'];?></h4>
                        <hr>
                        <a href="" class="btn btn-secondary">Add To Cart</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>