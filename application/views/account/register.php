    <!DOCTYPE html>
    <html>
    <head>
        <title>::Admin Register::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico"/>
        <!-- global css -->
        <link href="<?= base_url() ?>assets/css/app.css" rel="stylesheet">
        <!-- end of global css -->
        <!--page level css -->
        <link type="text/css" href="<?= base_url() ?>assets/css/themify-icons/css/themify-icons.css" rel="stylesheet"/>
        <link href="<?= base_url() ?>assets/vendors/iCheck/css/all.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
        <link href="<?= base_url() ?>assets/css/login.css" rel="stylesheet">
        <!--end of page level css-->
    </head>
    <body id="sign-up">
    <div class="preloader">
        <div class="loader_img"><img src="<?= base_url() ?>assets/img/loader.gif" alt="loading..." height="64" width="64"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-10 col-sm-8 m-auto login-form">

                    <h2 class="text-center logo_h2">
                        <img src="<?= base_url() ?>assets/img/pages/clear_black.png" alt="Logo">
                    </h2>

                <div class="card-body">

                        <form action="" id="authentication" method="post" class="signup_validator">
                         <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first" class="sr-only">First Name</label>
                                        <input type="text" class="form-control " id="first" name="first_name"
                                               placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="last" class="sr-only">Last Name</label>
                                        <input type="text" class="form-control  " id="last" name="last_name"
                                               placeholder="Last name">
                                    </div>
                                </div>
                         </div>
                            <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email" class="sr-only"> E-mail</label>
                                    <input type="text" class="form-control  " id="email" name="email"
                                           placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" class="form-control " id="password"
                                           name="password" placeholder="Password">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="confirm-password" class="sr-only">Password</label>
                                    <input type="password" class="form-control " id="confirm-password"
                                           name="password_confirm" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group checkbox">
                                    <label for="terms">
                                        <input type="checkbox" name="terms" id="terms">&nbsp; I accept the <a href="<?= base_url() ?>assets/javascript:void(0)">terms &amp; Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="submit" value="Sign Up" class="btn btn-primary btn-block"/>
                                </div>
                                <span class="sign-in">Already a member? <a href="<?= site_url("home/login"); ?>">Sign In</a></span>
                            </div>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>

        </div>
    <!-- global js -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="<?= base_url() ?>assets/vendors/iCheck/js/icheck.js"></script>
    <script src="<?= base_url() ?>assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="<?= base_url() ?>assets/text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/custom_js/register.js"></script>
    <!-- end of page level js -->
    </body>

    </html>
