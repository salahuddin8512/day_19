<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Registration Form</div>
                    <div class="card-body">
                        <h4 class="text-danger text-center mb-4"><?php echo isset($massage) ? $massage : ''; ?> </h4>
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="full_name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" required class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="mobile"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="register_btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>


