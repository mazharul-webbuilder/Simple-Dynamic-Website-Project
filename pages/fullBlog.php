<?php include "header.php";?>
<section class="py-5 bg-secondary blog-detail-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/images/<?php echo $singleBlogs['image']?>" alt="">
            </div>
            <div class="col-md-8">
                <h1 class="h-50"><?php echo $singleBlogs['title']?></h1>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-12">
                <p><?php echo $singleBlogs['fullDescription']?></p>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php";?>