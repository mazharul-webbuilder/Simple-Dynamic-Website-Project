<?php include "header.php";?>
<section class="bg-secondary py-5 product-section">
    <div class="container">
        <div class="row">
            <?php foreach ($allProducts as $product) {?>
            <div class="col-md-3 mb-4 ">
                <div class="card bg-secondary">
                    <div class="card-header">
                        <a href="action.php?page=detail&&id=<?php echo $product['id'];?>"><img src="assets/images/<?php echo $product['image'];?>" alt="" class="card-img-top"></a>
                    </div>
                    <div class="card-body">
                        <h2><?php echo $product['name'];?></h2>
                        <h4><?php echo $product['price'];?></h4>
                        <hr>
                        <p><?php echo $product['shortDescription'];?></p>
                        <hr>
                        <a href="action.php?page=detail&&id=<?php echo $product['id'];?>" class="btn btn-secondary">Detail</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<?php include "footer.php";?>