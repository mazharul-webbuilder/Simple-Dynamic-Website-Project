<?php include "header.php";?>
<section class="py-5 bg-secondary series-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-secondary">
                    <div class="card-header">
                        <h2 class="text-center">SERIES</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="staritn_number" class="form-label">Starting Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" id="staritn_number" name="starting_number" value="<?php if (isset($_POST['seriesBtn'])) echo $startingNumber;?>">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="ending_number" class="form-label">Ending Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" id="ending_number" name="ending_number" value="<?php if (isset($_POST['seriesBtn'])) echo $endingNumber;?>">

                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">Your Series</div>
                                <div class="col-md-9">
                                    <textarea class="form-control bg-white" disabled><?php foreach ($mySeries as $value){echo $value. ' ';}?></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" name="seriesBtn" class="btn btn-secondary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php";?>