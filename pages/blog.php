<?php include "header.php";?>
    <section class="py-5 bg-secondary blog-section">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog){?>
                <div class="col-md-3 mb-4">
                    <div class="card bg-secondary">
                        <div class="card-header">
                            <img src="assets/images/<?php echo $blog['image']?>" alt="" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h3><?php echo $blog['title']?></h3>
                            <p><?php echo $blog['shortDescription']?></p>
                            <hr>
                            <a href="action.php?page=blogDetail&&id=<?php echo $blog['id']?>" class="btn btn-secondary">Read Full</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php include "footer.php";?>