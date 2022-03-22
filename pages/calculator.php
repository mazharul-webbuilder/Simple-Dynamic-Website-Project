<?php include "header.php";?>
    <section class="py-5 bg-secondary cal-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0 bg-secondary">
                        <div class="card-header">
                            <h2 class="text-center">CALCULATOR</h2>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="first Number" class="form-label">First Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" id="first Number" name="first_number" value="<?php if (isset($_POST['calBtn'])){echo $firstNumber;}?>">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="last Number" class="form-label">Last Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" id="last Number" name="last_number" value="<?php if (isset($_POST['calBtn'])){echo $lastNumber;}?>">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label class="form-label">Result</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control bg-white" disabled value="<?php echo $result;?>">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="action" class="form-label">Choose Action</label>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-label px-1"><input type="radio" name="action" value="+"<?php if (isset($_POST['calBtn'])){if($action == '+'){echo 'checked';}}?>> Addition  </label>
                                        <label class="form-label px-1"><input type="radio" name="action" value="-"<?php if (isset($_POST['calBtn'])){if($action == '-'){echo 'checked';}}?>> Subtraction  </label>
                                        <label class="form-label px-1"><input type="radio" name="action" value="*"<?php if (isset($_POST['calBtn'])){if($action == '*'){echo 'checked';}}?>> Multiplication  </label>
                                        <label class="form-label px-1"><input type="radio" name="action" value="/"<?php if (isset($_POST['calBtn'])){if($action == '/'){echo 'checked';}}?>> Division  </label>
                                        <label class="form-label px-1"><input type="radio" name="action" value="%"<?php if (isset($_POST['calBtn'])){if($action == '%'){echo 'checked';}}?>> Reminder  </label>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-secondary" name="calBtn">
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