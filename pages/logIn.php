<?php include 'pages/includes/header.php'; ?>
<section class="mt-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="card-title text-center  ">Login form</h3>
                    </div>
                    <div class="card-body">

                        <?php if (isset($message)) { ?>
                            <h6 class="text-danger text-center"><?php echo $message; ?></h6>
                        <?php } ?>
                        <div>
                            <form action="action.php" method="post" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email:</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="loginbtn" class="btn btn-outline-success btn-block" value="LOGIN" >
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'; ?>
